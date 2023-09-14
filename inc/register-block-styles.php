<?php
/**
 * Block styles.
 *
 * @package blwbmkr
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function blwbmkr_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'blwbmkr-flat-button',
			'label' => __( 'Flat', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'blwbmkr-shadow-button',
			'label' => __( 'Shadow', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'blwbmkr-no-bg',
			'label' => __( 'Transparent', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'blwbmkr-grow-button',
			'label' => __( 'Hover: Grow', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'blwbmkr-pulse-button',
			'label' => __( 'Hover: Pulse', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'woocommerce/all-products',
		array(
			'name'  => 'blwbmkr-pulse-button',
			'label' => __( 'Pulse add to cart button', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'woocommerce/product-new',
		array(
			'name'  => 'blwbmkr-pulse-button',
			'label' => __( 'Pulse add to cart button', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/image',
		array(
			'name'  => 'blwbmkr-zoom-image',
			'label' => __( 'Hover: Zoom', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-featured-image',
		array(
			'name'  => 'blwbmkr-zoom-image',
			'label' => __( 'Hover: Zoom', 'blwbmkr' ),
		)
	);

	/*
	 * Featured images does not support border radius yet, so a block style is used until it is solved.
	 * @See https://github.com/WordPress/gutenberg/pull/37783/
	*/
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-featured-image',
		array(
			'name'  => 'blwbmkr-image-border-radius',
			'label' => __( 'Rounded corners', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'blwbmkr-flat-button',
			'label' => __( 'Flat', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'blwbmkr-no-bg',
			'label' => __( 'Transparent', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'blwbmkr-list-underline',
			'label' => __( 'Underlined', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'blwbmkr-checklist',
			'label' => __( 'Checklist', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'blwbmkr-list-shadow',
			'label' => __( 'Box Shadow', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'blwbmkr-box-shadow',
			'label' => __( 'Box shadow', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'blwbmkr-box-shadow',
			'label' => __( 'Box shadow', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'blwbmkr-box-shadow',
			'label' => __( 'Box shadow', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'blwbmkr-text-shadow',
			'label' => __( 'Text shadow', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/query-title',
		array(
			'name'  => 'blwbmkr-text-shadow',
			'label' => __( 'Text shadow', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'blwbmkr-text-shadow',
			'label' => __( 'Text shadow', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'blwbmkr-text-shadow',
			'label' => __( 'Text shadow', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'blwbmkr-slide-up',
			'label' => __( 'Slide up (not visible in the editor)', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'blwbmkr-slide-up',
			'label' => __( 'Slide up (not visible in the editor)', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'  => 'blwbmkr-slide-up',
			'label' => __( 'Slide up (not visible in the editor)', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'blwbmkr-slide-up',
			'label' => __( 'Slide up (not visible in the editor)', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'blwbmkr-vertical-text',
			'label' => __( 'Vertical', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'blwbmkr-vertical-text',
			'label' => __( 'Vertical', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'blwbmkr-vertical-text',
			'label' => __( 'Vertical', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'  => 'blwbmkr-vertical-text',
			'label' => __( 'Vertical', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/image',
		array(
			'name'  => 'blwbmkr-skewed',
			'label' => __( 'Skew', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-featured-image',
		array(
			'name'  => 'blwbmkr-skewed',
			'label' => __( 'Skew', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/cover',
		array(
			'name'  => 'blwbmkr-skewed',
			'label' => __( 'Skew', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'blwbmkr-skewed',
			'label' => __( 'Skew', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'  => 'blwbmkr-skewed',
			'label' => __( 'Skew', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'blwbmkr-skewed',
			'label' => __( 'Skew group', 'blwbmkr' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'blwbmkr-days-counter',
			'label' => __( 'Days Counter', 'blwbmkr' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'blwbmkr-bottom-element',
			'label' => __( 'Bottom Element', 'blwbmkr' ),
		)
	);
}
add_action( 'init', 'blwbmkr_register_block_styles' );
