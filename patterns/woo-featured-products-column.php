<?php
/**
 * Title: Featured products columns block
 * Slug: blwbmkr/featured-products-columns
 * Categories: blwbmkr-woo
 * Block Types: core/columns
 *
 * @package blwbmkr
 * @since 1.0.4
 */

?>
<!-- wp:columns {"verticalAlignment":null,"align":"full","backgroundColor":"background"} -->
<div class="wp-block-columns alignfull has-background-background-color has-background">
<!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center">
<!-- wp:heading {"textAlign":"center","textColor":"foreground","className":"is-style-blwbmkr-text-shadow","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center is-style-blwbmkr-text-shadow has-foreground-color has-text-color has-x-large-font-size"><?php echo esc_html_x( 'Featured products', 'sample content', 'blwbmkr' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:buttons {"layout":{"type":"flex","verticalAlignment":"bottom","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size has-medium-font-size">
<a class="wp-block-button__link"><?php echo esc_html_x( 'Add shop link', 'sample content', 'blwbmkr' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:woocommerce/featured-product {"dimRatio":80,"editMode":false,"backgroundColor":"foreground","textColor":"secondary"} -->
<!-- /wp:woocommerce/featured-product --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:woocommerce/featured-product {"dimRatio":90,"editMode":false,"backgroundColor":"background","textColor":"foreground"} -->
<!-- /wp:woocommerce/featured-product --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
