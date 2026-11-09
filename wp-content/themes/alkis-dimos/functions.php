<?php
/**
 * Alkis Dimos – child theme functions.
 * Εδώ καταχωρούμε τα δικά μας «στυλ μπλοκ» που εμφανίζονται στον επεξεργαστή.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', function () {

	// Κουμπί: κόκκινος κύκλος με λευκό βελάκι (γράψε → ως κείμενο του κουμπιού).
	register_block_style(
		'core/button',
		array(
			'name'         => 'circle-arrow',
			'label'        => 'Κύκλος με βελάκι',
			'inline_style' => '
				.wp-block-button.is-style-circle-arrow .wp-block-button__link {
					display: inline-flex; align-items: center; justify-content: center;
					width: 7.5rem; height: 7.5rem; padding: 0; border-radius: 50%;
					background: var(--wp--preset--color--accent); color: #fff;
					font-size: 2rem; letter-spacing: 0; line-height: 1;
					box-shadow: inset 0 0 0 2px var(--wp--preset--color--accent);
					transition: transform .35s ease, background-color .35s ease, color .35s ease;
				}
				.wp-block-button.is-style-circle-arrow .wp-block-button__link:hover,
				.wp-block-button.is-style-circle-arrow .wp-block-button__link:focus-visible {
					background: #fff; color: var(--wp--preset--color--accent); transform: scale(1.08);
				}
				@media (prefers-reduced-motion: reduce) {
					.wp-block-button.is-style-circle-arrow .wp-block-button__link { transition: none; }
					.wp-block-button.is-style-circle-arrow .wp-block-button__link:hover { transform: none; }
				}
			',
		)
	);

	// Κουμπί: περίγραμμα κόκκινο, γεμίζει κόκκινο στο hover.
	register_block_style(
		'core/button',
		array(
			'name'         => 'red-outline',
			'label'        => 'Κόκκινο περίγραμμα',
			'inline_style' => '
				.wp-block-button.is-style-red-outline .wp-block-button__link {
					background: transparent; color: var(--wp--preset--color--accent);
					box-shadow: inset 0 0 0 2px var(--wp--preset--color--accent);
				}
				.wp-block-button.is-style-red-outline .wp-block-button__link:hover {
					background: var(--wp--preset--color--accent); color: #fff;
				}
			',
		)
	);

	// Τίτλος με κόκκινη γραμμή από κάτω.
	register_block_style(
		'core/heading',
		array(
			'name'         => 'red-line',
			'label'        => 'Κόκκινη γραμμή',
			'inline_style' => '
				.wp-block-heading.is-style-red-line {
					text-decoration: underline;
					text-decoration-color: var(--wp--preset--color--accent);
					text-decoration-thickness: 0.08em;
					text-underline-offset: 0.18em;
				}
			',
		)
	);
} );
// Φόρτωση του style.css του child theme στο site και στον επεξεργαστή.
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'alkis-dimos-style',
		get_stylesheet_uri(),
		array(),
		filemtime( get_stylesheet_directory() . '/style.css' )
	);
} );

add_action( 'after_setup_theme', function () {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
} );
// Εσωτερικές σελίδες: δικό μας CSS και κατηγορία μοτίβων «Alkis Dimos».
add_action( 'wp_enqueue_scripts', function () {
	$file = get_stylesheet_directory() . '/assets/css/pages.css';
	if ( file_exists( $file ) ) {
		wp_enqueue_style(
			'alkis-dimos-pages',
			get_stylesheet_directory_uri() . '/assets/css/pages.css',
			array( 'alkis-dimos-style' ),
			filemtime( $file )
		);
	}
} );

add_action( 'after_setup_theme', function () {
	add_editor_style( 'assets/css/pages.css' );
} );

add_action( 'init', function () {
	register_block_pattern_category( 'alkis-dimos', array( 'label' => 'Alkis Dimos' ) );
} );