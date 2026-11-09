<?php
/**
 * Title: Header Hero
 * Slug: wedding-photography-nook/header-hero
 * Categories: featured, text
 * Inserter: no
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/homepage_hero.jpg","hasParallax":true,"dimRatio":0,"isUserOverlayColor":true,"minHeight":30,"minHeightUnit":"vh","gradient":"homepage-header-gradient","isDark":false,"sizeSlug":"large","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}}},"textColor":"theme-1","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-parallax has-theme-1-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:30vh"><div class="wp-block-cover__image-background  size-large has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/homepage_hero.jpg)"></div><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-homepage-header-gradient-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignfull" style="min-height:100vh"><!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"5vw","right":"5vw"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-right:5vw;padding-bottom:var(--wp--preset--spacing--40);padding-left:5vw"><!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"200px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img alt="" style="width:200px"/></figure>
<!-- /wp:image -->

<!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayBackgroundColor":"base","overlayTextColor":"primary","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"46vh","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"6vw","left":"6vw"}}}} -->
<div class="wp-block-columns alignwide" style="padding-right:6vw;padding-left:6vw"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","letterSpacing":"-0.02em","fontWeight":"100"}},"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-x-large-font-size" style="font-style:normal;font-weight:100;letter-spacing:-0.02em"><?php echo esc_html__( 'Making Unforgettable Moments', 'wedding-photography-nook' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Your wedding day is one of the most magical days of your life. We capture these fleeting moments and turn them into timeless memories.', 'wedding-photography-nook' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"base","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color has-link-color wp-element-button"><?php echo esc_html__( 'Book a call', 'wedding-photography-nook' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"40px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->