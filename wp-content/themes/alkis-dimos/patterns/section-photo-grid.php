<?php
/**
 * Title: Ενότητα: Πλέγμα φωτογραφιών (Behind the lens)
 * Slug: alkis-dimos/section-photo-grid
 * Categories: alkis-dimos
 * Viewport Width: 1400
 */

$img = get_stylesheet_directory_uri() . '/assets/images/';
?>
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
