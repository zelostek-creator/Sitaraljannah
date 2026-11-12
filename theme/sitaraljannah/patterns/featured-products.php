<?php
/**
 * Title: New arrivals
 * Slug: sitaraljannah/featured-products
 * Categories: sitaraljannah, woo-commerce
 * Keywords: products, shop, new arrivals, featured
 * Viewport Width: 1400
 * Description: The four newest products from the store (requires WooCommerce).
 *
 * @package Sitaraljannah
 */

?>
<!-- wp:group {"metadata":{"name":"New arrivals"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","className":"sj-reveal","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide sj-reveal"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php esc_html_e( 'Just arrived', 'sitaraljannah' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'New this season', 'sitaraljannah' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","className":"is-style-gold-outline"} -->
<div class="wp-block-button is-style-gold-outline"><a class="wp-block-button__link has-primary-color has-text-color wp-element-button" href="/shop/"><?php esc_html_e( 'View all', 'sitaraljannah' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<?php if ( class_exists( 'WooCommerce' ) ) : ?>
<!-- wp:woocommerce/product-collection {"queryId":11,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"collection":"woocommerce/product-collection/new-arrivals","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-woocommerce-product-collection alignwide" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"1rem","bottom":"0.25rem"}}},"fontSize":"large","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"small"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->
<?php else : ?>
<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Activate WooCommerce to show your newest products here.', 'sitaraljannah' ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>
</div>
<!-- /wp:group -->
