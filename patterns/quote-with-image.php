<?php
/**
 * Title: Quote with image
 * Slug: blwbmkr/quote-with-image
 * Categories: blwbmkr-images, blwbmkr-section
 * Block Types: core/quote, core/image
 *
 * @package blwbmkr
 * @since 1.0.4
 */

?>
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group">
<!-- wp:quote --><blockquote class="wp-block-quote"><p><?php echo esc_html_x( 'Add quote', 'sample content', 'blwbmkr' ); ?></p>
<cite><?php echo esc_html_x( 'Add citation', 'sample content', 'blwbmkr' ); ?></cite>
</blockquote>
<!-- /wp:quote -->
<!-- wp:image {"width":200,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img alt="" width="200" height="200"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
