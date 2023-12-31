<?php
/**
 * Title: Blog layout one
 * Slug: blwbmkr/blog-layout-1
 * Categories: blwbmkr-blog
 * Block Types: core/query, core/post-template
 * Keywords: blog
 *
 * @package blwbmkr
 * @since 1.0.4
 */

?>

<!-- wp:query {"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false},"align":"wide","layout":{"inherit":true},"className":"blwbmkr-hide-sticky"} -->
<div class="wp-block-query alignwide blwbmkr-hide-sticky">
<!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group">
<!-- wp:post-featured-image {"isLink":true,"sizeSlug":"medium","className":"is-style-blwbmkr-zoom-image is-style-blwbmkr-image-border-radius"} /-->
<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->
<!-- wp:post-title {"isLink":true} /-->
<!-- wp:post-excerpt /--></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude"},"displayLayout":{"type":"flex","columns":2},"align":"wide","className":"blwbmkr-blog-layout","layout":{"inherit":true}} -->
<div class="wp-block-query alignwide blwbmkr-blog-layout">
<!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"style":{"border":{"radius":"4px"},"color":{"background":"#f2f2f203"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group has-background" style="background-color:#f2f2f203;border-radius:4px">
<!-- wp:post-featured-image {"isLink":true,"width":"200px","height":"149px","className":"is-style-blwbmkr-zoom-image is-style-blwbmkr-image-border-radius"} /-->
<!-- wp:group {"className":"blwbmkr-post-meta"} -->
<div class="wp-block-group blwbmkr-post-meta">
<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->
<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
