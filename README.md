# Sitar al Jannah — WordPress store

A custom WordPress block theme (full site editing) and a local development stack for **Sitar al Jannah**, a modest fashion brand (abayas, hijabs, prayer sets). It works with WooCommerce out of the box.

## What's included

| Path | What it is |
| --- | --- |
| `theme/sitaraljannah/` | The theme. Copy or zip this folder to install it on any WordPress site. |
| `docker-compose.yml` | WordPress 6.8 + MariaDB + WP-CLI for local development. |
| `bin/setup.sh` | One-command install: WordPress, WooCommerce, the theme, pages, categories and 8 demo products. |

### Theme features
- **Brand design system** in `theme.json`: Emerald, Ivory and Gold palette, with Cormorant Garamond (headings), Jost (body) and Amiri (Arabic wordmark). The fonts are bundled with the theme, so there are no Google Fonts calls.
- **Homepage sections**, each a reusable pattern under *Patterns → Sitar al Jannah*:
  hero · collections · new arrivals (WooCommerce) · brand story · values · testimonials · newsletter.
- **Templates:** front page, blog (Journal), single post, page, full-width page, archive, search, 404, shop/category and single product.
- **WooCommerce:** mini-cart and account icons in the header, portrait (3:4) product images, a styled shop, a product page with gallery and related products, and a sizing note under *Add to cart*.
- **Style variations:** Emerald (default), Noor (navy and gold) and Rose. Switch them in *Appearance → Editor → Styles*.
- **Block styles:** gold-outline button, arch image, eyebrow text, ornament divider, card group.
- A sticky header, gentle scroll reveals that respect *reduced motion*, and a responsive layout down to phone width.
- Original SVG illustrations as placeholder art. Replace them with your own product photography.

## Run it locally

Requirements: Docker Desktop (or Docker Engine with Compose).

```bash
cp .env.example .env      # then set WP_ADMIN_PASSWORD and other values
./bin/setup.sh            # starts containers and provisions everything
```

Open http://localhost:8080 for the store and http://localhost:8080/wp-admin for the dashboard.

Stop it with `docker compose down`. Add `-v` to wipe the database and start again from scratch.

## Install on a live site

1. Zip the theme: `cd theme && zip -r sitaraljannah.zip sitaraljannah`
2. In WordPress, go to *Appearance → Themes → Add New → Upload Theme* and choose the zip, then activate it.
3. Install and activate **WooCommerce** for the shop features.
4. Create product categories with the slugs `abayas`, `hijabs` and `prayer-sets` (the menus and collection cards link to these), plus the pages *Our Story*, *Contact*, *Shipping & Returns*, *Size Guide* and *Journal*. Set *Settings → Reading → Posts page* to *Journal*.

## Before going live: replace the placeholders
- **Testimonials:** the quotes are sample text attributed to "Customer name · City". Replace them with genuine customer reviews.
- **Contact details:** `hello@sitaraljannah.com` and the social links in the footer are placeholders.
- **Policy copy:** the free-shipping threshold ($150), the returns window (14 days) and the size-guide lengths are examples. Set them to your real policies.
- **Newsletter:** the form shows a thank-you message but does not store emails. Either give the `<form>` an `action` URL from your email provider (Mailchimp, Klaviyo and so on), or swap in your provider's block.
- **Imagery:** replace the SVG illustrations in the patterns with real photography. Upload a logo under *Site Logo* in the header.

## Editing content
Everything is editable in *Appearance → Editor*: header, footer, templates and colours. The homepage is `templates/front-page.html`, built from the patterns in `theme/sitaraljannah/patterns/`.

## Licences
Theme code: GPL-2.0-or-later. Fonts: SIL Open Font License (see `assets/fonts/OFL-*.txt`).
