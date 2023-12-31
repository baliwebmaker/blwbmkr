<?php
/**
 * Title: Image with text overlay
 * Slug: blwbmkr/image-text-overlay
 * Categories: blwbmkr-images
 * Block Types: core/image, core/group, core/heading
 *
 * @package blwbmkr
 * @since 1.0.4
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"-80px"}},"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-large is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-headphones2.jpg' ) ); ?>" alt="" /></figure>
<!-- /wp:image -->
<!-- wp:group {"layout":{"contentSize":"340px"},"className":"is-blwbmkr-overlay"} -->
<div class="wp-block-group is-blwbmkr-overlay">
<!-- wp:group {"backgroundColor":"white","style":{"border":{"radius":"4px"}}} --><div class="wp-block-group has-white-background-color has-background" style="border-radius:4px"><!-- wp:heading {"textAlign":"center","textColor":"secondary"} -->
<h2 class="wp-block-heading has-text-align-center has-secondary-color has-text-color"><?php echo esc_html_x( 'Example heading', 'sample content', 'blwbmkr' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color"><?php echo esc_html_x( 'Example text', 'sample content', 'blwbmkr' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
