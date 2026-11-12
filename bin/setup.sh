#!/usr/bin/env bash
# One-time setup for the local Sitar al Jannah store.
# Usage: docker compose up -d && ./bin/setup.sh
set -euo pipefail
cd "$(dirname "$0")/.."

if [ -f .env ]; then set -a; . ./.env; set +a; fi
WP_URL="${WP_URL:-http://localhost:${WP_PORT:-8080}}"
WP_TITLE="${WP_TITLE:-Sitar al Jannah}"
WP_ADMIN_USER="${WP_ADMIN_USER:-admin}"
WP_ADMIN_PASSWORD="${WP_ADMIN_PASSWORD:-change-me-now}"
WP_ADMIN_EMAIL="${WP_ADMIN_EMAIL:-admin@example.com}"

docker compose up -d
docker compose run --rm cli bash /scripts/provision.sh \
  "$WP_URL" "$WP_TITLE" "$WP_ADMIN_USER" "$WP_ADMIN_PASSWORD" "$WP_ADMIN_EMAIL"

echo
echo "Done. Store:  $WP_URL"
echo "      Admin:  $WP_URL/wp-admin  (user: $WP_ADMIN_USER)"
