<?php
/**
 * Title: Homepage Hero
 * Slug: wedding-photography-nook/home-hero
 * Categories: featured, banner
 * Inserter: yes
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-chateau-garden.jpg","hasParallax":true,"dimRatio":20,"overlayColor":"theme-2","isUserOverlayColor":true,"minHeight":50,"minHeightUnit":"vw","isDark":false,"sizeSlug":"large","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="min-height:50vw"><div class="wp-block-cover__image-background size-large has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-chateau-garden.jpg)"></div><span aria-hidden="true" class="wp-block-cover__background has-theme-2-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"textColor":"theme-1"} -->
<h2 class="wp-block-heading has-text-align-center has-theme-1-color has-text-color"><?php echo wp_kses_post( __( 'MAKING <em>unforgettable</em> MEMORIES ON YOUR<br><em>special</em> DAY', 'wedding-photography-nook' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400","letterSpacing":"0.2em","textAlign":"center"}},"textColor":"theme-1","fontSize":"custom-1"} -->
<p class="has-text-align-center has-theme-1-color has-text-color has-custom-1-font-size" style="font-style:normal;font-weight:400;letter-spacing:0.2em;text-transform:uppercase"><a href="#"><?php esc_html_e( 'Explore services', 'wedding-photography-nook' ); ?></a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
