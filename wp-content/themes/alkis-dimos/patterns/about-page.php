<?php
/**
 * Title: About me – ολόκληρη σελίδα
 * Slug: alkis-dimos/about-page
 * Categories: alkis-dimos
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Description: Σελίδα About: φωτογραφία, μαύρη φάσα με τίτλο, showreel, η ιστορία, στιγμές και κουμπί επικοινωνίας.
 */

$img = get_stylesheet_directory_uri() . '/assets/images/';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $img . 'hero.jpg' ); ?>","dimRatio":30,"overlayColor":"theme-2","minHeight":80,"minHeightUnit":"vh","align":"full","className":"ad-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull ad-hero" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-theme-2-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $img . 'hero.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","className":"ad-hero__subtitle"} -->
<p class="has-text-align-center ad-hero__subtitle">Photographer &amp; Filmmaker</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","className":"ad-intro","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-intro"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center">About me</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">I'm Alkis Dimos, a photographer and filmmaker telling stories through music videos, commercials and portraits. I work with artists and brands who want images that feel honest, cinematic and impossible to scroll past.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( $img . 'feature.jpg' ); ?>","dimRatio":40,"overlayColor":"theme-2","minHeight":70,"minHeightUnit":"vh","contentPosition":"bottom left","align":"wide","className":"ad-feature","layout":{"type":"default"}} -->
<div class="wp-block-cover alignwide has-custom-content-position is-position-bottom-left ad-feature" style="min-height:70vh"><span aria-hidden="true" class="wp-block-cover__background has-theme-2-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $img . 'feature.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading -->
<h2 class="wp-block-heading">Showreel</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A few seconds from the projects I've loved making: music videos, brand films and everything in between.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-more"} -->
<p class="ad-more"><a href="#">Watch the reel</a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:columns {"align":"wide","className":"ad-story"} -->
<div class="wp-block-columns alignwide ad-story"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","className":"ad-img-tall"} -->
<figure class="wp-block-image size-full ad-img-tall"><img src="<?php echo esc_url( $img . 'tall.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","className":"ad-img-square"} -->
<figure class="wp-block-image size-full ad-img-square"><img src="<?php echo esc_url( $img . 'square.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2 class="wp-block-heading">My story</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell the story of how it all started: the first camera, the first project, the moment it became more than a hobby.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Then what drives you today: the kind of stories you love to tell, how you work with artists and brands, and what they can expect on set.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","className":"ad-spotlight-head","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide ad-spotlight-head"><!-- wp:heading -->
<h2 class="wp-block-heading">Behind the lens</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ad-kicker"} -->
<p class="ad-kicker">On set &amp; in the edit</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"ad-spotlight-grid"} -->
<div class="wp-block-columns alignwide ad-spotlight-grid"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","className":"ad-img-tall"} -->
<figure class="wp-block-image size-full ad-img-tall"><img src="<?php echo esc_url( $img . 'tall.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"ad-img-square"} -->
<figure class="wp-block-image size-full ad-img-square"><img src="<?php echo esc_url( $img . 'square.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","className":"ad-img-square"} -->
<figure class="wp-block-image size-full ad-img-square"><img src="<?php echo esc_url( $img . 'square.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"ad-img-tall"} -->
<figure class="wp-block-image size-full ad-img-tall"><img src="<?php echo esc_url( $img . 'tall.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","className":"ad-img-tall"} -->
<figure class="wp-block-image size-full ad-img-tall"><img src="<?php echo esc_url( $img . 'tall.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"ad-img-square"} -->
<figure class="wp-block-image size-full ad-img-square"><img src="<?php echo esc_url( $img . 'square.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
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
