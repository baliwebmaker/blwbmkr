<?php
/**
 * Block patterns
 *
 * @package blwbmkr
 * @since 1.0.0
 */

/**
 * Registers block pattern categories.
 *
 * @since 1.0.4
 *
 * @return void
 */
function blwbmkr_register_block_pattern_category() {

	register_block_pattern_category(
		'blwbmkr-images',
		array( 'label' => esc_html__( 'blwbmkr - Images', 'blwbmkr' ) )
	);

	register_block_pattern_category(
		'blwbmkr-woo',
		array( 'label' => esc_html__( 'blwbmkr - WooCommerce', 'blwbmkr' ) )
	);

	register_block_pattern_category(
		'blwbmkr-post-header',
		array( 'label' => esc_html__( 'blwbmkr - Post and page headers', 'blwbmkr' ) )
	);

	register_block_pattern_category(
		'blwbmkr-pages',
		array( 'label' => esc_html__( 'blwbmkr - Pages', 'blwbmkr' ) )
	);

	register_block_pattern_category(
		'blwbmkr-sections',
		array( 'label' => esc_html__( 'blwbmkr - Page Sections', 'blwbmkr' ) )
	);

	register_block_pattern_category(
		'blwbmkr-blog',
		array( 'label' => esc_html__( 'blwbmkr - Blog layouts', 'blwbmkr' ) )
	);

	register_block_pattern_category(
		'blwbmkr-site-footer',
		array( 'label' => esc_html__( 'blwbmkr - Site Footers', 'blwbmkr' ) )
	);

	register_block_pattern_category(
		'blwbmkr-site-header',
		array( 'label' => esc_html__( 'blwbmkr - Site Headers', 'blwbmkr' ) )
	);

	register_block_pattern_category(
		'blwbmkr-site-search',
		array( 'label' => esc_html__( 'blwbmkr - Site Search', 'blwbmkr' ) )
	);

}
add_action( 'init', 'blwbmkr_register_block_pattern_category', 9 );
