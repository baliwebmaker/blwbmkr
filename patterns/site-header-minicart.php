<?php
/**
 * Title: Site header with Mini Cart block pattern
 * Slug: blwbmkr/site-header-minicart
 * Categories: blwbmkr-site-header, blwbmkr-woo
 * Keywords: site header, cart
 * Block Types: core/site-title, core/site-logo, core/navigation
 *
 * @package blwbmkr
 * @since 1.0.4
 */

?>
<!-- wp:group {"backgroundColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group has-background-background-color has-background">
<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group">
<!-- wp:site-logo {"width":60,"className":"is-style-rounded"} /-->
<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} /-->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group">
<!-- wp:navigation {"overlayBackgroundColor":"background","overlayTextColor":"foreground","className":"is-style-default-navigation is-style-blwbmkr-no-bg","fontSize":"medium"} /-->
<!-- wp:pattern {"slug":"blwbmkr/search-modal"} /-->
<!-- wp:woocommerce/mini-cart /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
