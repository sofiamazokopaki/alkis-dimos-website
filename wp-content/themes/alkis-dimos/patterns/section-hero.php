<?php
/**
 * Title: Ενότητα: Μεγάλη φωτογραφία
 * Slug: alkis-dimos/section-hero
 * Categories: alkis-dimos
 * Viewport Width: 1400
 */

$img = get_stylesheet_directory_uri() . '/assets/images/';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $img . 'hero.jpg' ); ?>","dimRatio":30,"overlayColor":"theme-2","minHeight":80,"minHeightUnit":"vh","align":"full","className":"ad-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull ad-hero" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-theme-2-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $img . 'hero.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","className":"ad-hero__subtitle"} -->
<p class="has-text-align-center ad-hero__subtitle">Photographer &amp; Filmmaker</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
