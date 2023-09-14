<?php
/**
 * Title: Post header with centered featured image
 * Slug: blwbmkr/post-header-centered-featured-image
 * Categories: blwbmkr-post-header
 * Block Types: core/post-featured-image, core/group, core/post-title
 *
 * @package blwbmkr
 * @since 1.0.4
 */

?>
<!-- wp:post-featured-image /-->
<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:post-title {"className":"is-style-blwbmkr-text-shadow","fontSize":"x-large"} /-->
<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group">
	<!-- wp:post-author {"showAvatar":false} /-->
<!-- wp:post-date /-->
<!-- wp:post-terms {"term":"category"} /-->
<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group -->
<!-- wp:separator {"opacity":"css","backgroundColor":"secondary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-secondary-color has-css-opacity has-secondary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->
<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
