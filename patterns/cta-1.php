<?php
/**
 * Title: Newsletter Subscription Call to action
 * Slug: blwbmkr/newsletter-subscription-cta
 * Categories: blwbmkr-sections
 * Block Types: core/paragraph, core/heading, core/button
 * Keywords: newsletter, subscription, call to action
 *
 * @package blwbmkr
 * @since 1.0.4
 */

?>
<!-- wp:group {"layout":{"inherit":false,"contentSize":"25rem"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"border":{"radius":"4px"}},"backgroundColor":"primary","className":"is-style-blwbmkr-slide-up is-style-blwbmkr-box-shadow","layout":{"inherit":true}} -->
<div class="wp-block-group is-style-blwbmkr-slide-up is-style-blwbmkr-box-shadow has-primary-background-color has-background" style="border-radius:4px"><!-- wp:paragraph {"align":"center","textColor":"secondary","className":"is-style-default","fontSize":"large"} -->
<p class="has-text-align-center is-style-default has-secondary-color has-text-color has-large-font-size"><strong><?php echo esc_html_x( 'Get notified of our latest offers and new products', 'sample content', 'blwbmkr' ); ?></strong></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"2.2rem","right":"2.2rem"}}},"className":"is-style-blwbmkr-shadow-button","fontSize":"medium"} -->
<div class="wp-block-button aligncenter has-custom-font-size is-style-blwbmkr-shadow-button has-medium-font-size"><a class="wp-block-button__link" style="padding-top:0.6rem;padding-right:2.2rem;padding-bottom:0.6rem;padding-left:2.2rem"><strong><?php echo esc_html_x( 'Subscribe', 'sample content', 'blwbmkr' ); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
