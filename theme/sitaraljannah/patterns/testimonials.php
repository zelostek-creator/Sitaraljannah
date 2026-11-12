<?php
/**
 * Title: Testimonials
 * Slug: sitaraljannah/testimonials
 * Categories: sitaraljannah, testimonials
 * Keywords: reviews, quotes, customers
 * Viewport Width: 1400
 * Description: Three customer quotes. The sample text is a placeholder: replace it with genuine reviews.
 *
 * @package Sitaraljannah
 */

$sitaraljannah_quotes = array(
	array( __( 'The fabric falls beautifully and it is the first abaya I have owned that feels light enough for summer.', 'sitaraljannah' ), __( 'Customer name · City', 'sitaraljannah' ) ),
	array( __( 'Exactly the coverage I wanted without feeling heavy. The packaging felt like opening a gift.', 'sitaraljannah' ), __( 'Customer name · City', 'sitaraljannah' ) ),
	array( __( 'My prayer set lives in my bag now. Soft, easy to fold, and the colour is even nicer in person.', 'sitaraljannah' ), __( 'Customer name · City', 'sitaraljannah' ) ),
);
?>
<!-- wp:group {"metadata":{"name":"Testimonials"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"gradient":"dawn","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-dawn-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php esc_html_e( 'Kind words', 'sitaraljannah' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Loved by our community', 'sitaraljannah' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">
<?php foreach ( $sitaraljannah_quotes as $sitaraljannah_quote ) : ?>
<!-- wp:column {"className":"sj-reveal"} -->
<div class="wp-block-column sj-reveal"><!-- wp:paragraph {"align":"center","className":"sj-testimonial-stars"} -->
<p class="has-text-align-center sj-testimonial-stars">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"has-text-align-center"} -->
<blockquote class="wp-block-quote has-text-align-center"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php echo esc_html( $sitaraljannah_quote[0] ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html( $sitaraljannah_quote[1] ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->
<?php endforeach; ?>
</div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
