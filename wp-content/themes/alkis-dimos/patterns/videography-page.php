<?php
/**
 * Title: Videography – σελίδα
 * Slug: alkis-dimos/videography-page
 * Categories: alkis-dimos
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Description: Σελίδα Videography: μεγάλη φωτογραφία, μαύρη φάσα, showreel από Vimeo, πλέγμα με ταινίες από Vimeo και κουμπί επικοινωνίας.
 */

$img  = get_stylesheet_directory_uri() . '/assets/images/';
$hero = wp_get_attachment_image_url( 67, 'full' );
$hero = $hero ? $hero : $img . 'hero.jpg';

// Αντικατάστησε τα links με τα δικά σου βίντεο από το Vimeo.
$placeholder = 'https://vimeo.com/76979871';

$films = array(
	array( 'title' => 'Film title', 'meta' => 'Music video' ),
	array( 'title' => 'Film title', 'meta' => 'Commercial' ),
	array( 'title' => 'Film title', 'meta' => 'Brand film' ),
	array( 'title' => 'Film title', 'meta' => 'Social content' ),
);

$vimeo = function ( $url ) {
	return '<!-- wp:embed {"url":"' . esc_url( $url ) . '","type":"video","providerNameSlug":"vimeo","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
<figure class="wp-block-embed is-type-video is-provider-vimeo wp-block-embed-vimeo wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
' . esc_url( $url ) . '
</div></figure>
<!-- /wp:embed -->';
};
?>
<!-- wp:cover {"url":"<?php echo esc_url( $hero ); ?>","dimRatio":40,"overlayColor":"theme-2","minHeight":80,"minHeightUnit":"vh","align":"full","className":"ad-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull ad-hero" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-theme-2-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $hero ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","className":"ad-hero__subtitle"} -->
<p class="has-text-align-center ad-hero__subtitle">Music videos · Commercials · Social</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","className":"ad-intro","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-intro"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center">Videography</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Films shaped around rhythm and emotion, for artists who want to be seen and brands that want to be remembered.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"ad-spotlight-head","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide ad-spotlight-head"><!-- wp:heading -->
<h2 class="wp-block-heading">Showreel</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ad-kicker"} -->
<p class="ad-kicker">The best of recent work</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"ad-reel","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ad-reel"><?php echo $vimeo( $placeholder ); ?></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"ad-spotlight-head","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide ad-spotlight-head"><!-- wp:heading -->
<h2 class="wp-block-heading">Selected films</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ad-kicker"} -->
<p class="ad-kicker">Music · Brands · Social</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php foreach ( array_chunk( $films, 2 ) as $row ) : ?>

<!-- wp:columns {"align":"wide","className":"ad-films"} -->
<div class="wp-block-columns alignwide ad-films"><?php foreach ( $row as $film ) : ?><!-- wp:column {"className":"ad-film"} -->
<div class="wp-block-column ad-film"><?php echo $vimeo( $placeholder ); ?>

<!-- wp:heading {"level":3,"className":"ad-film__title"} -->
<h3 class="wp-block-heading ad-film__title"><?php echo esc_html( $film['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ad-film__meta"} -->
<p class="ad-film__meta"><?php echo esc_html( $film['meta'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<?php endforeach; ?></div>
<!-- /wp:columns -->
<?php endforeach; ?>

<!-- wp:paragraph {"align":"center","className":"ad-more ad-next"} -->
<p class="has-text-align-center ad-more ad-next"><a href="<?php echo esc_url( home_url( '/gallery/photography/' ) ); ?>">Next: Photography</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"full","className":"ad-cta","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-cta"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading">Let's make your next film</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-circle-arrow"} -->
<div class="wp-block-button is-style-circle-arrow"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">→</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
