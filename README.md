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

## Run it locally with Docker

Requirements: Docker Desktop (or Docker Engine with Compose).

```bash
cp .env.example .env      # then set WP_ADMIN_PASSWORD and other values
./bin/setup.sh            # starts containers and provisions everything
```

Open http://localhost:8080 for the store and http://localhost:8080/wp-admin for the dashboard.

Stop it with `docker compose down`. Add `-v` to wipe the database and start again from scratch.

## Run it locally with XAMPP

You need XAMPP with PHP 7.4 or newer (current XAMPP ships PHP 8.2) and WordPress 6.6 or newer.

1. **Start XAMPP.** In the XAMPP Control Panel, start **Apache** and **MySQL**.
2. **Create a database.** Open http://localhost/phpmyadmin, click *New*, name it `sitaraljannah` and click *Create*.
3. **Add WordPress.** Download WordPress from https://wordpress.org/download/ and unzip it to `C:\xampp\htdocs\sitaraljannah` (macOS: `/Applications/XAMPP/htdocs/sitaraljannah`).
4. **Run the installer.** Visit http://localhost/sitaraljannah and enter:
   database `sitaraljannah`, user `root`, password *(leave empty)*, host `localhost`.
   Then choose your site title and admin login.
5. **Add the theme.** Choose one of these:
   - **Copy:** copy `theme/sitaraljannah` into `htdocs/sitaraljannah/wp-content/themes/`.
   - **Link (recommended while developing):** link the folder, so edits in this repo show up immediately and you can commit them with git.
     - Windows (Command Prompt):
       `mklink /J C:\xampp\htdocs\sitaraljannah\wp-content\themes\sitaraljannah C:\path\to\Sitaraljannah\theme\sitaraljannah`
     - macOS:
       `ln -s ~/path/to/Sitaraljannah/theme/sitaraljannah /Applications/XAMPP/htdocs/sitaraljannah/wp-content/themes/sitaraljannah`
6. **Activate.** In wp-admin, go to *Appearance → Themes* and activate **Sitar al Jannah**. Then go to *Plugins → Add New*, install **WooCommerce**, activate it and skip the setup wizard.
7. **Fix the links.** Go to *Settings → Permalinks*, choose **Post name** and click *Save*. The menus link to `/shop/`, `/our-story/` and similar addresses, so this step is needed.

### Optional: add the pages, categories and demo products automatically
If you have [WP-CLI](https://wp-cli.org/) installed (on Windows, run this from Git Bash), run the same provisioning script the Docker setup uses, from inside the WordPress folder:

```bash
cd /c/xampp/htdocs/sitaraljannah
bash /c/path/to/Sitaraljannah/bin/provision.sh "http://localhost/sitaraljannah" "Sitar al Jannah" admin "your-admin-password" you@example.com
```

The script is safe to re-run. It creates *Our Story*, *Contact*, *Shipping & Returns*, *Size Guide* and *Journal*, the `abayas` / `hijabs` / `prayer-sets` categories, and 8 sample products.

Without WP-CLI, create these by hand as described in step 4 of *Install on a live site* below.

### Note on subfolder URLs
Because XAMPP serves the site from `http://localhost/sitaraljannah/`, the hard-coded links in the header, footer and homepage buttons (for example `/shop/`) point to `http://localhost/shop/` and will 404 locally. You have two ways to fix this:
- **Quick:** edit the links in *Appearance → Editor* (Navigation, buttons) to include `/sitaraljannah/`.
- **Cleaner:** set up a virtual host so the site runs at the domain root, for example `http://sitaraljannah.local`:
  1. Add this to `C:\xampp\apache\conf\extra\httpd-vhosts.conf`:
     ```apache
     <VirtualHost *:80>
         ServerName sitaraljannah.local
         DocumentRoot "C:/xampp/htdocs/sitaraljannah"
         <Directory "C:/xampp/htdocs/sitaraljannah">
             AllowOverride All
             Require all granted
         </Directory>
     </VirtualHost>
     ```
  2. Add `127.0.0.1 sitaraljannah.local` to `C:\Windows\System32\drivers\etc\hosts` (open Notepad as Administrator to edit it).
  3. Restart Apache.
  4. In *Settings → General*, change both URLs to `http://sitaraljannah.local`.

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
