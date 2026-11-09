<?php
/**
 * Title: Ενότητα: Κάρτα Showreel
 * Slug: alkis-dimos/section-showreel
 * Categories: alkis-dimos
 * Viewport Width: 1400
 */

$img = get_stylesheet_directory_uri() . '/assets/images/';
?>
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
