<?php
/**
 * Custom block style variations.
 *
 * @package Sitaraljannah
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register block styles. Their CSS lives in assets/css/theme.css.
 */
function sitaraljannah_register_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'gold-outline',
			'label' => __( 'Gold outline', 'sitaraljannah' ),
		)
	);

	register_block_style(
		'core/image',
		array(
			'name'  => 'arch',
			'label' => __( 'Arch', 'sitaraljannah' ),
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'  => 'eyebrow',
			'label' => __( 'Eyebrow', 'sitaraljannah' ),
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'eyebrow',
			'label' => __( 'Eyebrow', 'sitaraljannah' ),
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'  => 'ornament',
			'label' => __( 'Ornament', 'sitaraljannah' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'card',
			'label' => __( 'Card', 'sitaraljannah' ),
		)
	);
}
add_action( 'init', 'sitaraljannah_register_block_styles' );
