<?php
/**
 * Title: 404
 * Slug: wedding-photography-nook/hidden-404
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404_bg.jpg","id":401,"dimRatio":50,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":1},"sizeSlug":"large","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull"><img class="wp-block-cover__image-background wp-image-401 size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404_bg.jpg" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}}},"textColor":"theme-1"} -->
<h2 class="wp-block-heading alignwide has-text-align-center has-theme-1-color has-text-color has-link-color" id="page-not-found"><?php echo esc_html__( 'Page Not Found', 'wedding-photography-nook' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'The page you are looking for does not exist. Maybe it\'s off on a honeymoon?', 'wedding-photography-nook' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Back to homepage', 'wedding-photography-nook' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
