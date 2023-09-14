<?php
/**
 * Title: Sticky site header
 * Slug: blwbmkr/site-header-sticky
 * Categories: blwbmkr-site-header
 * Keywords: site header
 * Block Types: core/site-title, core/site-logo, core/navigation
 *
 * @package blwbmkr
 * @since 1.0.4
 */

?>
<!-- wp:group {"style":{"position":{"type":""},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"color":{"gradient":"linear-gradient(174deg,rgb(247,248,249) 21%,rgb(199,159,240) 74%)"}},"className":"is-style-blwbmkr-sticky-header","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-blwbmkr-sticky-header has-background" style="background:linear-gradient(174deg,rgb(247,248,249) 21%,rgb(199,159,240) 74%);padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":88,"shouldSyncIcon":true,"className":"is-style-default"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"ref":4139,"overlayMenu":"never","icon":"menu","overlayBackgroundColor":"white","customOverlayTextColor":"#3b80a8","className":"is-nav-top-desktop is-style-default-navigation is-style-blwbmkr-no-bg","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} /-->

<!-- wp:navigation {"ref":4142,"textColor":"luminous-vivid-orange","backgroundColor":"white","overlayMenu":"always","icon":"menu","className":"is-nav-top-mobile is-style-blwbmkr-flat-button","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"extra-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->