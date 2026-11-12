<?php
/**
 * Title: Newsletter
 * Slug: sitaraljannah/newsletter
 * Categories: sitaraljannah, call-to-action
 * Keywords: newsletter, email, subscribe, signup
 * Viewport Width: 1400
 * Description: Email sign-up band. Set the form's action to your email provider's endpoint, or replace it with your provider's block.
 *
 * @package Sitaraljannah
 */

?>
<!-- wp:group {"metadata":{"name":"Newsletter"},"align":"full","className":"sj-pattern-bg","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"elements":{"heading":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base-2","layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignfull sj-pattern-bg has-base-2-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php esc_html_e( 'The Sitar Letter', 'sitaraljannah' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'First to know, first to wear', 'sitaraljannah' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'New collections, restocks and Ramadan & Eid previews — delivered gently, never too often.', 'sitaraljannah' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="sj-newsletter-form" method="post">
	<label class="screen-reader-text" for="sj-newsletter-email"><?php esc_html_e( 'Email address', 'sitaraljannah' ); ?></label>
	<input id="sj-newsletter-email" type="email" name="email" required placeholder="<?php esc_attr_e( 'Your email address', 'sitaraljannah' ); ?>" autocomplete="email" />
	<button type="submit"><?php esc_html_e( 'Subscribe', 'sitaraljannah' ); ?></button>
</form>
<p class="sj-newsletter-message has-text-align-center has-small-font-size" role="status" aria-live="polite"></p>
<!-- /wp:html --></div>
<!-- /wp:group -->
