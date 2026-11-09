<?php
/**
 * Title: Ενότητα: Φωτογραφίες + κείμενο (My story)
 * Slug: alkis-dimos/section-story
 * Categories: alkis-dimos
 * Viewport Width: 1400
 */

$img = get_stylesheet_directory_uri() . '/assets/images/';
?>
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
