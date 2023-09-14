<?php
/**
 * Block Variations
 *
 * @package blwbmkr
 * @since 1.0.4
 */

/**
 * Create a sticky variations of the header and navigation block.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
 *
 * @since 1.0.4
 *
 * @return void
 */
function blwbmkr_register_block_variation() {
	wp_enqueue_script(
		'blwbmkr-block-variations',
		get_template_directory_uri() . '/assets/js/block-variation.js',
		array( 'wp-blocks' ),
		blwbmkr_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'blwbmkr_register_block_variation' );
