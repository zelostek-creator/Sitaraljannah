#!/usr/bin/env bash
# Runs inside the wp-cli container (see bin/setup.sh). Safe to re-run.
set -euo pipefail
URL="$1"; TITLE="$2"; ADMIN_USER="$3"; ADMIN_PASS="$4"; ADMIN_EMAIL="$5"

echo "Waiting for WordPress files and database..."
for _ in $(seq 1 60); do
  if [ -f wp-config.php ] && wp db check >/dev/null 2>&1; then break; fi
  sleep 2
done

if ! wp core is-installed 2>/dev/null; then
  wp core install --url="$URL" --title="$TITLE" --admin_user="$ADMIN_USER" \
    --admin_password="$ADMIN_PASS" --admin_email="$ADMIN_EMAIL" --skip-email
fi

wp option update blogdescription "Modest wear, made with intention"
wp rewrite structure '/%postname%/' --hard
wp theme activate sitaraljannah

if ! wp plugin is-installed woocommerce; then
  wp plugin install woocommerce --activate
else
  wp plugin activate woocommerce
fi
wp option update woocommerce_onboarding_profile '{"skipped":true}' --format=json
wp option update woocommerce_coming_soon no
wp wc tool run install_pages --user="$ADMIN_USER" >/dev/null || true

# ---- Pages ----------------------------------------------------------------
page_id() { wp post list --post_type=page --name="$1" --field=ID --posts_per_page=1; }
ensure_page() { # slug title content [template]
  local id; id="$(page_id "$1")"
  if [ -z "$id" ]; then
    id="$(wp post create --post_type=page --post_status=publish --post_name="$1" \
      --post_title="$2" --post_content="$3" --porcelain)"
    if [ -n "${4:-}" ]; then wp post meta update "$id" _wp_page_template "$4" >/dev/null; fi
  fi
  echo "$id"
}

STORY='<!-- wp:pattern {"slug":"sitaraljannah/brand-story"} /-->

<!-- wp:pattern {"slug":"sitaraljannah/values"} /-->

<!-- wp:pattern {"slug":"sitaraljannah/newsletter"} /-->'
P='<!-- wp:paragraph --><p>'; E='</p><!-- /wp:paragraph -->'

ensure_page our-story "Our Story" "$STORY" page-full-width >/dev/null
ensure_page contact "Contact" "${P}We would love to hear from you. Email hello@sitaraljannah.com or message us on WhatsApp, and our team will reply within one working day.${E}" >/dev/null
ensure_page shipping-returns "Shipping & Returns" "${P}Orders are dispatched within 1–2 working days. Unworn items with tags attached may be returned within 14 days of delivery.${E}" >/dev/null
ensure_page size-guide "Size Guide" "${P}Our abayas are measured shoulder to hem. Choose your length by height: 52 (under 155 cm), 54 (155–162 cm), 56 (163–170 cm), 58 (170 cm+).${E}" >/dev/null
JOURNAL_ID="$(ensure_page journal "Journal" "")"
wp option update page_for_posts "$JOURNAL_ID"

# ---- Product categories and demo products ---------------------------------
ensure_cat() { # slug name description
  wp wc product_cat list --slug="$1" --field=id --user="$ADMIN_USER" | head -n1 | grep . ||
    wp wc product_cat create --slug="$1" --name="$2" --description="$3" --porcelain --user="$ADMIN_USER"
}
ABAYAS="$(ensure_cat abayas "Abayas" "Fluid silhouettes in crepe, nida and linen.")"
HIJABS="$(ensure_cat hijabs "Hijabs" "Breathable jersey, chiffon and modal in quiet tones.")"
PRAYER="$(ensure_cat prayer-sets "Prayer Sets" "Soft, easy pieces for your moments of salah.")"

ensure_product() { # sku name price category_id short_description
  if [ -z "$(wp wc product list --sku="$1" --field=id --user="$ADMIN_USER")" ]; then
    wp wc product create --sku="$1" --name="$2" --regular_price="$3" \
      --categories="[{\"id\":$4}]" --short_description="$5" \
      --description="$5" --status=publish --user="$ADMIN_USER" >/dev/null
    echo "  created $2"
  fi
}
echo "Creating demo products..."
ensure_product SJ-AB-001 "Noor Open Abaya" 129 "$ABAYAS" "A softly structured open abaya in matte nida with gold-tone piping at the cuffs."
ensure_product SJ-AB-002 "Rawdah Pleated Abaya" 149 "$ABAYAS" "Knife pleats fall from the yoke for movement and an elegant, airy drape."
ensure_product SJ-AB-003 "Layla Linen Abaya" 139 "$ABAYAS" "Breathable linen blend for warm days, with deep pockets and a relaxed cut."
ensure_product SJ-HJ-001 "Everyday Jersey Hijab" 22 "$HIJABS" "Stretch jersey that stays put without pins. Opaque, soft and easy to style."
ensure_product SJ-HJ-002 "Chiffon Hijab — Sand" 18 "$HIJABS" "Lightweight premium chiffon with a subtle matte finish."
ensure_product SJ-HJ-003 "Modal Wrap Hijab" 26 "$HIJABS" "Silky modal with a gentle sheen and a cool feel against the skin."
ensure_product SJ-PR-001 "Sakinah Prayer Set" 59 "$PRAYER" "A two-piece prayer set with an attached khimar and a pouch for travel."
ensure_product SJ-PR-002 "Travel Prayer Dress" 45 "$PRAYER" "One-piece, wrinkle-resistant and folds small enough for any handbag."

wp rewrite flush --hard
echo "Provisioning complete."
