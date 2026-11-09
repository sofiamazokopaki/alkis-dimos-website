<?php
/**
 * Title: Deep Focus – σελίδα
 * Slug: alkis-dimos/deep-focus-page
 * Categories: alkis-dimos
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Description: Βιτρίνα του blog: μεγάλη φωτογραφία, μαύρη φάσα με τίτλο, κουτάκια με τα άρθρα και ενότητα με βίντεο από TikTok.
 */

$img = get_stylesheet_directory_uri() . '/assets/images/';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $img . 'hero.jpg' ); ?>","dimRatio":30,"overlayColor":"theme-2","minHeight":80,"minHeightUnit":"vh","align":"full","className":"ad-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull ad-hero" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-theme-2-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $img . 'hero.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","className":"ad-hero__subtitle"} -->
<p class="has-text-align-center ad-hero__subtitle">Behind the scenes &amp; stories from set</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","className":"ad-intro","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-intro"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center">Deep Focus</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Notes from behind the camera: how projects come to life, the ideas behind them and what happens between the takes.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ad-posts","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide ad-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"className":"ad-card__img"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ad-card__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"className":"ad-card__excerpt"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>New stories are coming soon.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:group {"align":"wide","className":"ad-tiktok-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ad-tiktok-section"><!-- wp:group {"className":"ad-spotlight-head","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group ad-spotlight-head"><!-- wp:heading -->
<h2 class="wp-block-heading">On TikTok</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ad-kicker"} -->
<p class="ad-kicker">Short stories from set</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"ad-tiktok-grid"} -->
<div class="wp-block-columns ad-tiktok-grid"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:embed {"providerNameSlug":"tiktok","responsive":true} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:embed {"providerNameSlug":"tiktok","responsive":true} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:embed {"providerNameSlug":"tiktok","responsive":true} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
