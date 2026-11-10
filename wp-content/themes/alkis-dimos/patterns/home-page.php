<?php
/**
 * Title: Αρχική σελίδα – ολόκληρη
 * Slug: alkis-dimos/home-page
 * Categories: alkis-dimos
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Description: Αρχική: φωτογραφία με parallax, εισαγωγή, τρία κουτιά, υπηρεσίες σε μαύρο, λωρίδα φωτογραφιών, Trusted by, Meet Alkis, Deep Focus και κλείσιμο με parallax.
 */

$img   = get_stylesheet_directory_uri() . '/assets/images/';
$photo = function ( $id, $fallback, $size = 'large' ) use ( $img ) {
	$url = wp_get_attachment_image_url( $id, $size );
	return $url ? $url : $img . $fallback;
};
$hero  = $photo( 67, 'hero.jpg', 'full' );
$final = $photo( 53, 'hero.jpg', 'full' );

$tiles = array(
	array( 'Photography', '/gallery/photography/', $photo( 35, 'tall.jpg' ) ),
	array( 'Videography', '/gallery/videography/', $photo( 53, 'tall.jpg' ) ),
	array( 'About me', '/about-me/', $photo( 39, 'tall.jpg' ) ),
);

$strip = array( $photo( 35, 'tall.jpg' ), $img . 'tall.jpg', $photo( 67, 'tall.jpg' ), $img . 'tall.jpg', $photo( 39, 'tall.jpg' ) );
?>
<!-- wp:cover {"url":"<?php echo esc_url( $hero ); ?>","hasParallax":true,"dimRatio":30,"overlayColor":"theme-2","minHeight":50,"minHeightUnit":"vw","align":"full","className":"ad-parallax ad-parallax--hero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax ad-parallax ad-parallax--hero" style="min-height:50vw"><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( $hero ); ?>)"></div><span aria-hidden="true" class="wp-block-cover__background has-theme-2-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"className":"ad-hero__title"} -->
<h1 class="wp-block-heading has-text-align-center ad-hero__title">Bring your vision to life</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"ad-hero__subtitle"} -->
<p class="has-text-align-center ad-hero__subtitle">Music videos, commercials &amp; branded content</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ad-hero__buttons","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons ad-hero__buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>">See my work</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get in touch</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"ad-home-intro","layout":{"type":"constrained"}} -->
<div class="wp-block-group ad-home-intro"><!-- wp:paragraph {"className":"ad-kicker"} -->
<p class="ad-kicker">Photographer &amp; videographer in Athens</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Stories worth watching</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>I'm Alkis Dimos, and I turn ideas into visuals with rhythm, emotion and a cinematic eye. From music videos for some of Greece's best-known artists to campaigns for international brands, every project starts with one question: what's the story?</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"ad-home-tiles"} -->
<div class="wp-block-columns alignwide ad-home-tiles"><?php foreach ( $tiles as $t ) : ?><!-- wp:column {"className":"ad-home-tile"} -->
<div class="wp-block-column ad-home-tile"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"ad-home-tile__img"} -->
<figure class="wp-block-image size-large ad-home-tile__img"><a href="<?php echo esc_url( home_url( $t[1] ) ); ?>"><img src="<?php echo esc_url( $t[2] ); ?>" alt=""/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"ad-home-tile__title"} -->
<h3 class="wp-block-heading ad-home-tile__title"><a href="<?php echo esc_url( home_url( $t[1] ) ); ?>"><?php echo esc_html( $t[0] ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<?php endforeach; ?></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","className":"ad-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-dark"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"ad-dark__cols"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center ad-dark__cols"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ad-img-tall"} -->
<figure class="wp-block-image size-large ad-img-tall"><img src="<?php echo esc_url( $photo( 53, 'tall.jpg' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"ad-kicker"} -->
<p class="ad-kicker">What I do</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">From the first idea to the final cut</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Music videos</strong> shaped around the rhythm and mood of the track.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Commercials &amp; brand films</strong> that show what makes a brand worth noticing.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Social media content</strong>: reels and TikToks, sharp, fast and made for each platform.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Photography</strong>: portraits, products and places, with a cinematic eye.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/gallery/videography/' ) ); ?>">Watch the films</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:gallery {"columns":5,"linkTo":"none","sizeSlug":"large","align":"full","className":"ad-strip"} -->
<figure class="wp-block-gallery alignfull has-nested-images columns-5 is-cropped ad-strip"><?php foreach ( $strip as $src ) : ?><!-- wp:image {"sizeSlug":"large","linkDestination":"none","lightbox":{"enabled":true}} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $src ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php endforeach; ?></figure>
<!-- /wp:gallery -->

<!-- wp:group {"className":"ad-trusted","layout":{"type":"constrained"}} -->
<div class="wp-block-group ad-trusted"><!-- wp:paragraph {"className":"ad-names__kicker"} -->
<p class="ad-names__kicker">Trusted by</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-trusted__list"} -->
<p class="ad-trusted__list">Anna Vissi, Antonis Remos, Elena Paparizou, Tonis Sfinos, Guy Laroche, Lonsdale, Belvedere, Jose Cuervo, Monkey Shoulder, Allou Fun Park</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ad-more"} -->
<p class="ad-more"><a href="<?php echo esc_url( home_url( '/collaborations/' ) ); ?>">All collaborations</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"ad-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ad-dark"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"ad-dark__cols"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center ad-dark__cols"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"ad-kicker"} -->
<p class="ad-kicker">About me</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Meet Alkis</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Born in Athens and trained in sound before falling for the image, I've spent years creating visuals for artists, brands and agencies.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Today I work as a freelancer across music, sports, showbiz and hospitality, in Greece and on international projects.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/about-me/' ) ); ?>">Read my story</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ad-img-tall"} -->
<figure class="wp-block-image size-large ad-img-tall"><img src="<?php echo esc_url( $photo( 39, 'tall.jpg' ) ); ?>" alt="Alkis Dimos behind the camera"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"ad-spotlight-head","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide ad-spotlight-head"><!-- wp:heading -->
<h2 class="wp-block-heading">Deep Focus</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ad-kicker"} -->
<p class="ad-kicker">Latest from the blog</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ad-posts ad-posts--home","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide ad-posts ad-posts--home"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
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

<!-- wp:paragraph {"align":"center","className":"ad-more ad-next"} -->
<p class="has-text-align-center ad-more ad-next"><a href="<?php echo esc_url( home_url( '/deep-focus/' ) ); ?>">All stories</a></p>
<!-- /wp:paragraph -->

<!-- wp:cover {"url":"<?php echo esc_url( $final ); ?>","hasParallax":true,"dimRatio":50,"overlayColor":"theme-2","minHeight":35,"minHeightUnit":"vw","align":"full","className":"ad-parallax ad-parallax--cta","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax ad-parallax ad-parallax--cta" style="min-height:35vw"><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( $final ); ?>)"></div><span aria-hidden="true" class="wp-block-cover__background has-theme-2-background-color has-background-dim-50 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Let's create something together</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get in touch</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
