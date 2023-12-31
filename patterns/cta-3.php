<?php
/**
 * Title: Pill shaped Call to action
 * Slug: blwbmkr/pill-shaped-cta
 * Categories: blwbmkr-sections, blwbmkr-woo
 * Block Types: core/paragraph, core/heading, core/button
 * Keywords: call to action, cta
 *
 * @package blwbmkr
 * @since 1.0.4
 */

?>
<!-- wp:group {"style":{"border":{"radius":"999px"}},"backgroundColor":"secondary","layout":{"type":"flex"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:999px">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{}},"className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-tshirt.jpg' ) ); ?>" alt="" /></figure>
<!-- /wp:image -->
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html_x( 'Example heading', 'sample content', 'blwbmkr' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php echo esc_html_x( 'Add your custom product details here.', 'sample content', 'blwbmkr' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"background","className":"is-style-blwbmkr-shadow-button","fontSize":"extra-small"} -->
<div class="wp-block-button has-custom-font-size is-style-blwbmkr-shadow-button has-extra-small-font-size"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background"><strong><?php echo esc_html_x( 'Call to Action button', 'sample content', 'blwbmkr' ); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->



