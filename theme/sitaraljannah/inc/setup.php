<?php
/**
 * Theme supports, assets and pattern categories.
 *
 * @package Sitaraljannah
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register theme supports.
 */
function sitaraljannah_setup() {
	load_theme_textdomain( 'sitaraljannah', get_theme_file_path( 'languages' ) );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 120,
			'width'       => 360,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	add_editor_style( 'assets/css/theme.css' );

	add_image_size( 'sitaraljannah-portrait', 900, 1200, true );
}
add_action( 'after_setup_theme', 'sitaraljannah_setup' );

/**
 * Front-end styles and scripts.
 */
function sitaraljannah_enqueue_assets() {
	wp_enqueue_style(
		'sitaraljannah-theme',
		get_theme_file_uri( 'assets/css/theme.css' ),
		array(),
		SITARALJANNAH_VERSION
	);

	wp_enqueue_script(
		'sitaraljannah-theme',
		get_theme_file_uri( 'assets/js/theme.js' ),
		array(),
		SITARALJANNAH_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'sitaraljannah_enqueue_assets' );

/**
 * Pattern categories shown in the inserter.
 */
function sitaraljannah_register_pattern_categories() {
	register_block_pattern_category(
		'sitaraljannah',
		array(
			'label'       => __( 'Sitar al Jannah', 'sitaraljannah' ),
			'description' => __( 'Brand sections for the Sitar al Jannah store.', 'sitaraljannah' ),
		)
	);
}
add_action( 'init', 'sitaraljannah_register_pattern_categories' );

/**
 * URL of an image bundled with the theme, for use inside patterns.
 *
 * @param string $file File name inside assets/images.
 * @return string
 */
function sitaraljannah_image( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}
