<?php
/**
 * Title: Search title
 * Slug: blwbmkr/search-title
 * Inserter: no
 *
 * @package blwbmkr
 * @since 1.0.0
 */

if ( isset( $_GET['s'] ) ) {
	?>
	<!-- wp:heading {"className":"is-style-blwbmkr-text-shadow","fontSize":"x-large"} -->
	<h2 class="wp-block-heading is-style-blwbmkr-text-shadow has-x-large-font-size">
	<?php
	$search_term = sanitize_text_field( wp_unslash( $_GET['s'] ) );
	/* translators: %s: Search term. */
	echo isset( $search_term ) ? sprintf( esc_html__( 'Search results for "%s"', 'blwbmkr' ), esc_html( $search_term ) ) : __( 'Search results', 'blwbmkr' );
	?>
	</h2>
	<!-- /wp:heading -->
	<?php
}
