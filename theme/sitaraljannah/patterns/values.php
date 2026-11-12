<?php
/**
 * Title: Values
 * Slug: sitaraljannah/values
 * Categories: sitaraljannah, features
 * Keywords: values, benefits, features, promise
 * Viewport Width: 1400
 * Description: Four brand promises in bordered cards.
 *
 * @package Sitaraljannah
 */

$sitaraljannah_values = array(
	array( '01', __( 'Considered fabrics', 'sitaraljannah' ), __( 'Breathable, opaque materials chosen for drape, comfort and coverage.', 'sitaraljannah' ) ),
	array( '02', __( 'Thoughtful cuts', 'sitaraljannah' ), __( 'Generous proportions and true-to-size fits that move with you.', 'sitaraljannah' ) ),
	array( '03', __( 'Made to last', 'sitaraljannah' ), __( 'Reinforced seams and finishing that stand up to everyday wear.', 'sitaraljannah' ) ),
	array( '04', __( 'Care in every order', 'sitaraljannah' ), __( 'Wrapped with care and supported by a team who answers personally.', 'sitaraljannah' ) ),
);
?>
<!-- wp:group {"metadata":{"name":"Values"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide">
<?php foreach ( $sitaraljannah_values as $sitaraljannah_value ) : ?>
<!-- wp:column {"className":"sj-reveal"} -->
<div class="wp-block-column sj-reveal"><!-- wp:group {"className":"is-style-card","style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group is-style-card" style="min-height:100%"><!-- wp:paragraph {"textColor":"accent","fontSize":"x-large","fontFamily":"heading"} -->
<p class="has-accent-color has-text-color has-x-large-font-size has-heading-font-family"><?php echo esc_html( $sitaraljannah_value[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $sitaraljannah_value[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html( $sitaraljannah_value[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<?php endforeach; ?>
</div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
