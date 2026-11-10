<?php
/**
 * Title: Photography – σελίδα
 * Slug: alkis-dimos/photography-page
 * Categories: alkis-dimos
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Description: Σελίδα Photography: μεγάλη φωτογραφία, μαύρη φάσα, τρεις ενότητες με πλέγμα φωτογραφιών (μεγαλώνουν με κλικ) και κουμπί επικοινωνίας.
 */

$img   = get_stylesheet_directory_uri() . '/assets/images/';
$photo = function ( $id, $fallback ) use ( $img ) {
	$url = wp_get_attachment_image_url( $id, 'large' );
	return $url ? $url : $img . $fallback;
};
$hero = wp_get_attachment_image_url( 35, 'full' );
$hero = $hero ? $hero : $img . 'hero.jpg';

$sections = array(
	array(
		'title'  => 'Portraits',
		'kicker' => 'Artists &amp; people',
		'images' => array( $photo( 35, 'tall.jpg' ), $photo( 53, 'tall.jpg' ), $img . 'square.jpg', $img . 'tall.jpg', $img . 'square.jpg', $img . 'tall.jpg' ),
	),
	array(
		'title'  => 'Commercial',
		'kicker' => 'Brands &amp; products',
		'images' => array( $photo( 67, 'wide.jpg' ), $img . 'square.jpg', $img . 'tall.jpg', $img . 'square.jpg', $img . 'tall.jpg', $img . 'square.jpg' ),
	),
	array(
		'title'  => 'Places',
		'kicker' => 'Spaces &amp; landscapes',
		'images' => array( $photo( 39, 'wide.jpg' ), $img . 'tall.jpg', $img . 'square.jpg', $img . 'tall.jpg', $img . 'square.jpg', $img . 'tall.jpg' ),
	),
);
?>
<!-- wp:cover {"url":"<?php echo esc_url( $hero ); ?>","dimRatio":30,"overlayColor":"theme-2","focalPoint":{"x":0.5,"y":0.3},"minHeight":80,"minHeightUnit":"vh","align":"full","className":"ad-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull ad-hero" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-theme-2-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $hero ); ?>" style="object-position:50% 30%" data-object-position="50% 30%" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","className":"ad-hero__subtitle"} -->
<p class="has-text-align-center ad-hero__subtitle">Portraits · Commercial · Places</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","className":"ad-intro","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-intro"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center">Photography</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Light, mood and the one moment that tells the whole story. A selection of portraits, commercial work and places. Click any photo to see it larger.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php foreach ( $sections as $section ) : ?>

<!-- wp:group {"align":"wide","className":"ad-spotlight-head","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide ad-spotlight-head"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo $section['title']; ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ad-kicker"} -->
<p class="ad-kicker"><?php echo $section['kicker']; ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"ad-spotlight-grid"} -->
<div class="wp-block-columns alignwide ad-spotlight-grid"><?php
	// Ίδιο πλέγμα με το «Behind the lens» του About: 3 στήλες, όρθια + τετράγωνη, εναλλάξ.
	foreach ( array_chunk( $section['images'], 2 ) as $c => $pair ) :
		$shapes = ( 1 === $c % 2 ) ? array( 'square', 'tall' ) : array( 'tall', 'square' );
		?><!-- wp:column -->
<div class="wp-block-column"><?php foreach ( $pair as $i => $src ) : ?><!-- wp:image {"sizeSlug":"large","linkDestination":"none","lightbox":{"enabled":true},"className":"ad-img-<?php echo $shapes[ $i ]; ?>"} -->
<figure class="wp-block-image size-large ad-img-<?php echo $shapes[ $i ]; ?>"><img src="<?php echo esc_url( $src ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php endforeach; ?></div>
<!-- /wp:column -->

<?php endforeach; ?></div>
<!-- /wp:columns -->
<?php endforeach; ?>

<!-- wp:paragraph {"align":"center","className":"ad-more ad-next"} -->
<p class="has-text-align-center ad-more ad-next"><a href="<?php echo esc_url( home_url( '/gallery/videography/' ) ); ?>">Next: Videography</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"full","className":"ad-cta","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-cta"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading">Have a shoot in mind?</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-circle-arrow"} -->
<div class="wp-block-button is-style-circle-arrow"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">→</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
