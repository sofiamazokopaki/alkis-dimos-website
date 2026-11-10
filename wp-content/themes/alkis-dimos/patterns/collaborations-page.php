<?php
/**
 * Title: Collaborations – σελίδα
 * Slug: alkis-dimos/collaborations-page
 * Categories: alkis-dimos
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Description: Σελίδα Collaborations: μεγάλη φωτογραφία, μαύρη φάσα, ονόματα συνεργατών ανά κατηγορία, πλέγμα με δουλειές και κουμπί επικοινωνίας.
 */

$img   = get_stylesheet_directory_uri() . '/assets/images/';
$photo = function ( $id, $fallback, $size = 'large' ) use ( $img ) {
	$url = wp_get_attachment_image_url( $id, $size );
	return $url ? $url : $img . $fallback;
};
$hero = $photo( 67, 'hero.jpg', 'full' );

$groups = array(
	'Music &amp; showbiz'    => array( 'Anna Vissi', 'Antonis Remos', 'Elena Paparizou', 'Tonis Sfinos' ),
	'Brands'                 => array( 'Guy Laroche', 'Lonsdale', 'Belvedere', 'Jose Cuervo', 'Monkey Shoulder' ),
	'Leisure &amp; hospitality' => array( 'Allou Fun Park' ),
	'Agencies'               => array( 'Media Planners', 'YouNet DigitalLife' ),
);

// Ενδεικτικές δουλειές: άλλαξε φωτογραφία, όνομα και κατηγορία από τον editor.
$work = array(
	array( $photo( 35, 'tall.jpg' ), 'Artist name', 'Music &amp; showbiz' ),
	array( $photo( 67, 'tall.jpg' ), 'Brand name', 'Brands' ),
	array( $photo( 53, 'tall.jpg' ), 'Artist name', 'Music &amp; showbiz' ),
	array( $img . 'tall.jpg', 'Allou Fun Park', 'Leisure &amp; hospitality' ),
	array( $img . 'tall.jpg', 'Brand name', 'Brands' ),
	array( $img . 'tall.jpg', 'Brand name', 'Brands' ),
);
?>
<!-- wp:cover {"url":"<?php echo esc_url( $hero ); ?>","dimRatio":30,"overlayColor":"theme-2","minHeight":80,"minHeightUnit":"vh","align":"full","className":"ad-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull ad-hero" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-theme-2-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $hero ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","className":"ad-hero__subtitle"} -->
<p class="has-text-align-center ad-hero__subtitle">Artists · Brands · Venues</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","className":"ad-intro","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-intro"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center">Collaborations</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">From Greek showbiz to international brands, these are some of the people I've had the pleasure to create with.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"ad-clients"} -->
<div class="wp-block-columns alignwide ad-clients"><?php foreach ( $groups as $label => $names ) : ?><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"ad-clients__label"} -->
<p class="ad-clients__label"><?php echo $label; ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"ad-clients__list"} -->
<ul class="wp-block-list ad-clients__list"><?php foreach ( $names as $name ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $name ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:column --><?php endforeach; ?></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","className":"ad-spotlight-head","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide ad-spotlight-head"><!-- wp:heading -->
<h2 class="wp-block-heading">Selected work</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ad-kicker"} -->
<p class="ad-kicker">A few favourites</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php foreach ( array_chunk( $work, 3 ) as $row ) : ?>

<!-- wp:columns {"align":"wide","className":"ad-work"} -->
<div class="wp-block-columns alignwide ad-work"><?php foreach ( $row as $item ) : ?><!-- wp:column {"className":"ad-work__item"} -->
<div class="wp-block-column ad-work__item"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","lightbox":{"enabled":true},"className":"ad-img-tall"} -->
<figure class="wp-block-image size-large ad-img-tall"><img src="<?php echo esc_url( $item[0] ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ad-work__cat"} -->
<p class="ad-work__cat"><?php echo $item[2]; ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ad-work__title"} -->
<h3 class="wp-block-heading ad-work__title"><?php echo esc_html( $item[1] ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column --><?php endforeach; ?></div>
<!-- /wp:columns -->
<?php endforeach; ?>

<!-- wp:paragraph {"align":"center","className":"ad-more ad-next"} -->
<p class="has-text-align-center ad-more ad-next"><a href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>">Explore the gallery</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"full","className":"ad-cta","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-cta"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading">Let's work together</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-circle-arrow"} -->
<div class="wp-block-button is-style-circle-arrow"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">→</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
