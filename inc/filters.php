<?php
/**
 * Filters
 *
 * @package blwbmkr
 * @since 1.0.0
 */

/**
 * Show '(No title)' if a post has no title.
 *
 * @since 1.0.0
 */
add_filter(
	'the_title',
	function( $title ) {
		if ( ! is_admin() && empty( $title ) ) {
			$title = _x( '(No title)', 'Used if post or pages has no title', 'blwbmkr' );
		}

		return $title;
	}
);

/**
 * Replace the default [...] excerpt more with an elipsis.
 *
 * @since 1.0.0
*/
add_filter(
	'excerpt_more',
	function( $more ) {
		return '&hellip;';
	}
);

/**
 * Filter the search modal block pattern to correctly show the search icon
 *
 * @param string $html  The block HTML.
 * @param array  $block The block data.
 * @return string Block HTML markup.
 * @since 1.0.4
 */
function blwbmkr_search_icon( $html, $block ) {

	if ( 'core/navigation' === $block['blockName'] &&
		isset( $block['attrs']['className'] ) &&
		false !== strpos( $block['attrs']['className'], 'is-blwbmkr-search-modal' )
	) {
		$icon = '
		><svg xmlns="http://www.w3.org/2000/svg" class="search-icon" role="img" alt="" aria-label="' . esc_attr__( 'Search', 'blwbmkr' ) . '" viewBox="0 0 24 24" width="40" height="40" fill="currentColor"><path d="M13.5 6C10.5 6 8 8.5 8 11.5c0 1.1.3 2.1.9 3l-3.4 3 1 1.1 3.4-2.9c1 .9 2.2 1.4 3.6 1.4 3 0 5.5-2.5 5.5-5.5C19 8.5 16.5 6 13.5 6zm0 9.5c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path></svg>';

		$html = str_replace( 'aria-label="' . esc_attr__( 'Open menu', 'blwbmkr' ) . '"', 'aria-label="' . esc_attr__( 'Open search', 'blwbmkr' ) . '"', $html );
		$html = str_replace( 'aria-label="' . esc_attr__( 'Close menu', 'blwbmkr' ) . '"', 'aria-label="' . esc_attr__( 'Close search', 'blwbmkr' ) . '"', $html );

		// Replace the menu icon.
		$html = str_replace(
			'><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><rect x="4" y="7.5" width="16" height="1.5" /><rect x="4" y="15" width="16" height="1.5" /></svg>',
			$icon,
			$html
		);

		// Replace the menu text, if the text option is used (6.0).
		$html = str_replace( '>' . __( 'Menu', 'blwbmkr' ), $icon, $html );
	}

	return $html;
}

add_filter( 'render_block', 'blwbmkr_search_icon', 10, 2 );


/**
 * Add the "query-block-paged" body class when a paged query is used.
 *
 * @param array $classes The CSS classes applied to the body tag.
 * @return array CSS class names
 * @since 1.0.4
 */
function blwbmkr_set_paged_class( $classes ) {
	$current_url = '';
	if ( isset( $_SERVER['REQUEST_URI'] ) ) {
		$current_url = wp_unslash( $_SERVER['REQUEST_URI'] );
	}

	if ( false !== strpos( $current_url, '-page=' ) ) {
		$classes[] = 'query-block-paged';
	}
	return $classes;
}
add_filter( 'body_class', 'blwbmkr_set_paged_class' );
