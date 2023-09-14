<?php
/**
 * Title: Footer links, full width
 * Slug: blwbmkr/footer-links-full-width
 * Inserter: no
 *
 * @package blwbmkr
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull">
<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} --><div class="wp-block-group">
<!-- wp:paragraph {"fontSize":"extra-small"} --><p class="has-extra-small-font-size">
<?php echo __( 'Copyright', 'blwbmkr' ) . ' ' . date_i18n( _x( 'Y', 'copyright date format', 'blwbmkr' ) ); ?></p><!-- /wp:paragraph -->
<!-- wp:site-title {"level":0, "fontSize":"extra-small"} /-->
<?php
if ( get_the_privacy_policy_link() ) {
	echo '<!-- wp:paragraph {"fontSize":"extra-small"} --><p class="has-extra-small-font-size">' . get_the_privacy_policy_link() . '</p><!-- /wp:paragraph -->';
}
?>
<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--preset--color--primary)","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
<!-- /wp:social-links -->
</div><!-- /wp:group -->
<!-- wp:pattern {"slug":"blwbmkr/footer-buttons"} /-->
</div><!-- /wp:group -->
