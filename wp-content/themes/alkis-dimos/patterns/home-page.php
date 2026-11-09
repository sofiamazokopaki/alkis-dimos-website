<?php
/**
 * Title: Αρχική σελίδα – ολόκληρη
 * Slug: alkis-dimos/home-page
 * Categories: alkis-dimos
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Description: Αρχική: μεγάλη εικόνα/βίντεο, εισαγωγή, latest work, υπηρεσίες, about, συνεργασίες, gallery και κουμπί επικοινωνίας.
 */

$img = get_stylesheet_directory_uri() . '/assets/images/';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $img . 'hero.jpg' ); ?>","dimRatio":40,"overlayColor":"theme-2","minHeight":85,"minHeightUnit":"vh","align":"full","className":"ad-hero ad-hero--home","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull ad-hero ad-hero--home" style="min-height:85vh"><span aria-hidden="true" class="wp-block-cover__background has-theme-2-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $img . 'hero.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"className":"ad-hero__title"} -->
<h1 class="wp-block-heading has-text-align-center ad-hero__title">Photographer &amp; Videographer in Athens</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"ad-hero__subtitle"} -->
<p class="has-text-align-center ad-hero__subtitle">Music videos, commercials &amp; branded content</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"ad-home-intro","layout":{"type":"constrained"}} -->
<div class="wp-block-group ad-home-intro"><!-- wp:heading -->
<h2 class="wp-block-heading">Stories worth watching</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>I'm Alkis Dimos, and I turn ideas into visuals with rhythm, emotion and a cinematic eye. From music videos for some of Greece's best-known artists to campaigns for international brands, every project starts with one question: what's the story?</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( $img . 'feature.jpg' ); ?>","dimRatio":40,"overlayColor":"theme-2","minHeight":70,"minHeightUnit":"vh","contentPosition":"bottom left","align":"wide","className":"ad-feature","layout":{"type":"default"}} -->
<div class="wp-block-cover alignwide has-custom-content-position is-position-bottom-left ad-feature" style="min-height:70vh"><span aria-hidden="true" class="wp-block-cover__background has-theme-2-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $img . 'feature.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"ad-feature__kicker"} -->
<p class="ad-feature__kicker">Latest work</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Project title</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>One short line about the client and the idea behind the project.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-more"} -->
<p class="ad-more"><a href="#">View project</a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","className":"ad-spotlight-head","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide ad-spotlight-head"><!-- wp:heading -->
<h2 class="wp-block-heading">What I do</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ad-kicker"} -->
<p class="ad-kicker">Services</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"ad-services"} -->
<div class="wp-block-columns alignwide ad-services"><!-- wp:column {"className":"ad-service"} -->
<div class="wp-block-column ad-service"><!-- wp:image {"sizeSlug":"full","className":"ad-img-wide"} -->
<figure class="wp-block-image size-full ad-img-wide"><img src="<?php echo esc_url( $img . 'wide.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Music videos</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>From concept to final edit, shaped around the rhythm and mood of the track.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-more"} -->
<p class="ad-more"><a href="#">Learn more</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"ad-service"} -->
<div class="wp-block-column ad-service"><!-- wp:image {"sizeSlug":"full","className":"ad-img-wide"} -->
<figure class="wp-block-image size-full ad-img-wide"><img src="<?php echo esc_url( $img . 'wide.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Commercials &amp; brand films</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Short films and campaigns that show what makes a brand worth noticing.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-more"} -->
<p class="ad-more"><a href="#">Learn more</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","className":"ad-services"} -->
<div class="wp-block-columns alignwide ad-services"><!-- wp:column {"className":"ad-service"} -->
<div class="wp-block-column ad-service"><!-- wp:image {"sizeSlug":"full","className":"ad-img-wide"} -->
<figure class="wp-block-image size-full ad-img-wide"><img src="<?php echo esc_url( $img . 'wide.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Social media content</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Reels and TikToks that are sharp, fast and made for each platform.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-more"} -->
<p class="ad-more"><a href="#">Learn more</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"ad-service"} -->
<div class="wp-block-column ad-service"><!-- wp:image {"sizeSlug":"full","className":"ad-img-wide"} -->
<figure class="wp-block-image size-full ad-img-wide"><img src="<?php echo esc_url( $img . 'wide.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Photography</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Portraits, products and places, captured with a cinematic eye.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-more"} -->
<p class="ad-more"><a href="#">Learn more</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","className":"ad-story"} -->
<div class="wp-block-columns alignwide ad-story"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","className":"ad-img-tall"} -->
<figure class="wp-block-image size-full ad-img-tall"><img src="<?php echo esc_url( $img . 'tall.jpg' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
<h2 class="wp-block-heading">About me</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Born in Athens and trained in sound before falling for the image, I've spent years creating visuals for artists, brands and agencies.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Today I work as a freelancer across music, sports, showbiz and hospitality, in Greece and on international projects.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-more"} -->
<p class="ad-more"><a href="<?php echo esc_url( home_url( '/about-me/' ) ); ?>">My story</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","className":"ad-names","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-names"><!-- wp:paragraph {"className":"ad-names__kicker"} -->
<p class="ad-names__kicker">Trusted by</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-names__list"} -->
<p class="ad-names__list">Anna Vissi, Antonis Remos, Elena Paparizou, Tonis Sfinos, Guy Laroche, Lonsdale, Belvedere, Jose Cuervo, Monkey Shoulder, Allou Fun Park</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-more"} -->
<p class="ad-more"><a href="<?php echo esc_url( home_url( '/collaborations/' ) ); ?>">All collaborations</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"ad-spotlight-head","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide ad-spotlight-head"><!-- wp:heading -->
<h2 class="wp-block-heading">Gallery</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ad-kicker"} -->
<p class="ad-kicker">Photos &amp; video</p>
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

<!-- wp:paragraph {"align":"center","className":"ad-more ad-gallery-link"} -->
<p class="has-text-align-center ad-more ad-gallery-link"><a href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>">Explore the gallery</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"full","className":"ad-cta","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-cta"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading">Let's create something together</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-circle-arrow"} -->
<div class="wp-block-button is-style-circle-arrow"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact me</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
