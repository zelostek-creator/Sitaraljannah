<?php
/**
 * Title: Brand story
 * Slug: sitaraljannah/brand-story
 * Categories: sitaraljannah, about, text
 * Keywords: about, story, mission, brand
 * Viewport Width: 1400
 * Description: Arched image beside the meaning behind the Sitar al Jannah name.
 *
 * @package Sitaraljannah
 */

?>
<!-- wp:group {"metadata":{"name":"Brand story"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%","className":"sj-reveal"} -->
<div class="wp-block-column is-vertically-aligned-center sj-reveal" style="flex-basis:45%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-arch"} -->
<figure class="wp-block-image size-full is-style-arch"><img src="<?php echo sitaraljannah_image( 'story.svg' ); ?>" alt="<?php esc_attr_e( 'Illustration of a woman in a flowing abaya framed by an arch', 'sitaraljannah' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"sj-reveal"} -->
<div class="wp-block-column is-vertically-aligned-center sj-reveal"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php esc_html_e( 'Our story', 'sitaraljannah' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( __( 'Sitar al Jannah — <em>a veil of paradise</em>', 'sitaraljannah' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Our name speaks to covering as an act of beauty and devotion. Every piece begins with a simple question: how can modest clothing feel as graceful as it looks?', 'sitaraljannah' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'We choose fabrics that drape and breathe, cut with room to move, and finish each garment with quiet details meant to last well beyond a single season.', 'sitaraljannah' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/our-story/"><?php esc_html_e( 'Read more', 'sitaraljannah' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
