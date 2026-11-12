<?php
/**
 * WooCommerce integration. Everything here is skipped when WooCommerce is inactive.
 *
 * @package Sitaraljannah
 */

defined( 'ABSPATH' ) || exit;

/**
 * Declare WooCommerce support and gallery features.
 */
function sitaraljannah_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 600,
			'single_image_width'    => 900,
			'product_grid'          => array(
				'default_columns' => 3,
				'min_columns'     => 2,
				'max_columns'     => 4,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'sitaraljannah_woocommerce_setup' );

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

/**
 * Portrait (3:4) product images suit garments better than squares.
 *
 * @param array $size Image size settings.
 * @return array
 */
function sitaraljannah_portrait_thumbnails( $size ) {
	$size['width']  = 600;
	$size['height'] = 800;
	$size['crop']   = 1;
	return $size;
}
add_filter( 'woocommerce_get_image_size_thumbnail', 'sitaraljannah_portrait_thumbnails' );

/**
 * Show a modest-wear sizing note under the add-to-cart button.
 */
function sitaraljannah_sizing_note() {
	echo '<p class="sitaraljannah-sizing-note">' .
		esc_html__( 'Cut generously for comfort and coverage. Unsure of your size? Our team will help you choose.', 'sitaraljannah' ) .
		'</p>';
}
add_action( 'woocommerce_after_add_to_cart_form', 'sitaraljannah_sizing_note' );

/**
 * Load the theme's WooCommerce styling after WooCommerce's own.
 */
function sitaraljannah_woocommerce_styles() {
	wp_enqueue_style(
		'sitaraljannah-woocommerce',
		get_theme_file_uri( 'assets/css/woocommerce.css' ),
		array( 'sitaraljannah-theme' ),
		SITARALJANNAH_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'sitaraljannah_woocommerce_styles', 20 );
