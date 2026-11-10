<?php
/**
 * Title: Gallery – σελίδα
 * Slug: alkis-dimos/gallery-page
 * Categories: alkis-dimos
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Description: Σελίδα Gallery: μεγάλη φωτογραφία, μαύρη φάσα με τίτλο και δύο μεγάλα κουτιά που οδηγούν σε Photography και Videography.
 */

$img   = get_stylesheet_directory_uri() . '/assets/images/';
$photo = function ( $id, $fallback ) use ( $img ) {
	$url = wp_get_attachment_image_url( $id, 'full' );
	return $url ? $url : $img . $fallback;
};
$hero  = $photo( 53, 'hero.jpg' );
$t_ph  = $photo( 35, 'tall.jpg' );
$t_vid = $img . 'tall.jpg';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $hero ); ?>","dimRatio":30,"overlayColor":"theme-2","focalPoint":{"x":0.5,"y":0.35},"minHeight":80,"minHeightUnit":"vh","align":"full","className":"ad-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull ad-hero" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-theme-2-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $hero ); ?>" style="object-position:50% 35%" data-object-position="50% 35%" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","className":"ad-hero__subtitle"} -->
<p class="has-text-align-center ad-hero__subtitle">Stills &amp; motion</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","className":"ad-intro","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-intro"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center">Gallery</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Two ways of telling a story: frames that stand still and pictures that move. Choose where you'd like to start.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"ad-tiles"} -->
<div class="wp-block-columns alignwide ad-tiles"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( $t_ph ); ?>","dimRatio":40,"overlayColor":"theme-2","focalPoint":{"x":0.5,"y":0.3},"contentPosition":"bottom left","className":"ad-tile","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left ad-tile"><span aria-hidden="true" class="wp-block-cover__background has-theme-2-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $t_ph ); ?>" style="object-position:50% 30%" data-object-position="50% 30%" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"ad-tile__num"} -->
<p class="ad-tile__num">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ad-tile__title"} -->
<h2 class="wp-block-heading ad-tile__title"><a href="<?php echo esc_url( home_url( '/gallery/photography/' ) ); ?>">Photography</a></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Portraits, products and places, captured with a cinematic eye.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( $t_vid ); ?>","dimRatio":40,"overlayColor":"theme-2","contentPosition":"bottom left","className":"ad-tile","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left ad-tile"><span aria-hidden="true" class="wp-block-cover__background has-theme-2-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $t_vid ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"ad-tile__num"} -->
<p class="ad-tile__num">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ad-tile__title"} -->
<h2 class="wp-block-heading ad-tile__title"><a href="<?php echo esc_url( home_url( '/gallery/videography/' ) ); ?>">Videography</a></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Music videos, commercials and social content, from concept to final edit.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","className":"ad-cta","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-cta"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading">Let's create something together</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-circle-arrow"} -->
<div class="wp-block-button is-style-circle-arrow"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">→</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
