<?php
/**
 * Title: Wedding Inquiry Call to Action
 * Slug: wedding-photography-nook/call-to-action
 * Categories: featured, call-to-action
 * Inserter: yes
 */
?>

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta-bridal-bouquet.jpg","hasParallax":true,"dimRatio":20,"isUserOverlayColor":true,"minHeight":35,"minHeightUnit":"vw","isDark":false,"sizeSlug":"large","align":"full","textColor":"theme-1","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-parallax has-theme-1-color has-text-color" style="min-height:35vw"><div class="wp-block-cover__image-background size-large has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta-bridal-bouquet.jpg)"></div><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo wp_kses_post( __( 'Ready to capture your <em>special</em> day with us?', 'wedding-photography-nook' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Make an Inquiry', 'wedding-photography-nook' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
