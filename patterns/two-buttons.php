<?php
/**
 * Title: Two buttons
 * Slug: blwbmkr/two-buttons
 * Categories: buttons, blwbmkr-sections
 * Block Types: core/buttons
 *
 * @package blwbmkr
 * @since 1.0.1
 */

?>
<!-- wp:paragraph {"fontSize":"normal"} --><p class="has-normal-font-size"><?php echo _x( 'Example paragraph, replace this with your own text.<br>You can use different colored buttons for your primary and secondary call to actions.', 'sample content', 'blwbmkr' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"background"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background"><?php echo esc_html_x( 'Button one', 'sample content', 'blwbmkr' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"backgroundColor":"secondary","textColor":"foreground"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-secondary-background-color has-text-color has-background"><?php echo esc_html_x( 'Button two', 'sample content', 'blwbmkr' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
