<?php
/**
 * Title: Hero
 * Slug: sitaraljannah/hero
 * Categories: sitaraljannah, banner, featured
 * Keywords: hero, banner, cover, intro
 * Viewport Width: 1400
 * Description: Full-width opening banner with headline and two calls to action.
 *
 * @package Sitaraljannah
 */

?>
<!-- wp:cover {"url":"<?php echo sitaraljannah_image( 'hero.svg' ); ?>","dimRatio":30,"overlayColor":"primary-2","isUserOverlayColor":true,"minHeight":88,"minHeightUnit":"vh","contentPosition":"center left","align":"full","className":"sj-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-left sj-hero" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);min-height:88vh"><span aria-hidden="true" class="wp-block-cover__background has-primary-2-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo sitaraljannah_image( 'hero.svg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent-2"} -->
<p class="is-style-eyebrow has-accent-2-text-color has-text-color"><?php esc_html_e( 'The Autumn Collection', 'sitaraljannah' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"base"} -->
<h1 class="wp-block-heading has-base-color has-text-color"><?php echo wp_kses_post( __( 'Grace, woven <em>into every thread</em>', 'sitaraljannah' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base-2","fontSize":"large"} -->
<p class="has-base-2-color has-text-color has-large-font-size"><?php esc_html_e( 'Flowing abayas, soft hijabs and prayer sets — modest pieces designed with intention, for every day and every occasion.', 'sitaraljannah' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button {"backgroundColor":"accent","textColor":"primary-2","style":{"border":{"color":"var:preset|color|accent"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-2-color has-accent-background-color has-text-color has-background has-border-color wp-element-button" href="/shop/" style="border-color:var(--wp--preset--color--accent)"><?php esc_html_e( 'Shop the collection', 'sitaraljannah' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base","className":"is-style-gold-outline"} -->
<div class="wp-block-button is-style-gold-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="/our-story/"><?php esc_html_e( 'Our story', 'sitaraljannah' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
