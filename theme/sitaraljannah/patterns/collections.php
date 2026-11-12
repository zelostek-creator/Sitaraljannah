<?php
/**
 * Title: Collections
 * Slug: sitaraljannah/collections
 * Categories: sitaraljannah, gallery
 * Keywords: collections, categories, shop
 * Viewport Width: 1400
 * Description: Three arched collection cards linking to product categories.
 *
 * @package Sitaraljannah
 */

$sitaraljannah_collections = array(
	array(
		'image' => 'collection-abayas.svg',
		'title' => __( 'Abayas', 'sitaraljannah' ),
		'text'  => __( 'Fluid silhouettes in crepe, nida and linen.', 'sitaraljannah' ),
		'url'   => '/product-category/abayas/',
	),
	array(
		'image' => 'collection-hijabs.svg',
		'title' => __( 'Hijabs', 'sitaraljannah' ),
		'text'  => __( 'Breathable jersey, chiffon and modal in quiet tones.', 'sitaraljannah' ),
		'url'   => '/product-category/hijabs/',
	),
	array(
		'image' => 'collection-prayer.svg',
		'title' => __( 'Prayer Sets', 'sitaraljannah' ),
		'text'  => __( 'Soft, easy pieces for your moments of salah.', 'sitaraljannah' ),
		'url'   => '/product-category/prayer-sets/',
	),
);
?>
<!-- wp:group {"metadata":{"name":"Collections"},"anchor":"collections","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div id="collections" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"className":"sj-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group sj-reveal"><!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php esc_html_e( 'Collections', 'sitaraljannah' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Dressed in modesty, carried with ease', 'sitaraljannah' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-ornament"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-ornament"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">
<?php foreach ( $sitaraljannah_collections as $sitaraljannah_item ) : ?>
<!-- wp:column {"className":"sj-reveal"} -->
<div class="wp-block-column sj-reveal"><!-- wp:cover {"url":"<?php echo sitaraljannah_image( $sitaraljannah_item['image'] ); ?>","dimRatio":100,"customGradient":"linear-gradient(180deg,rgba(12,46,38,0) 45%,rgba(12,46,38,0.82) 100%)","isUserOverlayColor":true,"minHeight":560,"contentPosition":"bottom center","className":"sj-collection-card is-style-arch","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center sj-collection-card is-style-arch" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(12,46,38,0) 45%,rgba(12,46,38,0.82) 100%)"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo sitaraljannah_image( $sitaraljannah_item['image'] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"base"} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color"><a href="<?php echo esc_url( $sitaraljannah_item['url'] ); ?>"><?php echo esc_html( $sitaraljannah_item['title'] ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"base-2","fontSize":"small"} -->
<p class="has-text-align-center has-base-2-color has-text-color has-small-font-size"><?php echo esc_html( $sitaraljannah_item['text'] ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->
<?php endforeach; ?>
</div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
