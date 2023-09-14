<?php
/**
 * Title: Newsletter signup offer and featured products
 * Slug: blwbmkr/newsletter-and-featured-products
 * Categories: blwbmkr-woo
 * Keywords: product
 *
 * @package blwbmkr
 * @since 1.0.4
 */

?>
<!-- wp:columns {"verticalAlignment":null,"align":"wide","backgroundColor":"background"} -->
<div class="wp-block-columns alignwide has-background-background-color has-background"><!-- wp:column {"verticalAlignment":"top","backgroundColor":"primary"} -->
<div class="wp-block-column is-vertically-aligned-top has-primary-background-color has-background"><!-- wp:group {"backgroundColor":"primary","className":"is-style-blwbmkr-slide-up","layout":{"inherit":true}} -->
<div class="wp-block-group is-style-blwbmkr-slide-up has-primary-background-color has-background"><!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","textColor":"secondary","className":"is-style-default","fontSize":"medium"} -->
<p class="has-text-align-center is-style-default has-secondary-color has-text-color has-medium-font-size"><strong><?php esc_html_e( '5% off on your first purchase when you sign up for our Newsletter', 'blwbmkr' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"align":"center","className":"is-style-blwbmkr-shadow-button","fontSize":"medium"} -->
<div class="wp-block-button aligncenter has-custom-font-size is-style-blwbmkr-shadow-button has-medium-font-size"><a class="wp-block-button__link"><?php esc_html_e( 'Signup', 'blwbmkr' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"15px"} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:woocommerce/featured-product {"dimRatio":80,"editMode":false,"backgroundColor":"foreground","textColor":"secondary"} -->
<!-- /wp:woocommerce/featured-product --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:woocommerce/featured-product {"dimRatio":80,"editMode":false,"backgroundColor":"foreground","textColor":"secondary"} -->
<!-- /wp:woocommerce/featured-product --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
