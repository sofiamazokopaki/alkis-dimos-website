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
// Contact Form 7: χωρίς αυτόματα <p>/<br>, για να δουλεύει το δικό μας layout της φόρμας.
add_filter( 'wpcf7_autop_or_not', '__return_false' );

// Εφέ: εμφάνιση στο scroll, κίνηση στο hero, hover στις φωτογραφίες (μόνο στο site).
add_action( 'wp_enqueue_scripts', function () {
	$dir = get_stylesheet_directory();
	$uri = get_stylesheet_directory_uri();
	wp_enqueue_style( 'alkis-dimos-effects', $uri . '/assets/css/effects.css', array( 'alkis-dimos-pages' ), filemtime( $dir . '/assets/css/effects.css' ) );
	wp_enqueue_script( 'alkis-dimos-effects', $uri . '/assets/js/effects.js', array(), filemtime( $dir . '/assets/js/effects.js' ), array( 'in_footer' => true, 'strategy' => 'defer' ) );
} );

// Διακόπτης γλώσσας «ΕΛ / EN» (TranslatePress). Χρήση: [ad_lang_switch]
add_shortcode( 'ad_lang_switch', function () {
	if ( ! function_exists( 'trp_custom_language_switcher' ) ) {
		return '';
	}
	$labels  = array( 'el' => 'ΕΛ', 'en_US' => 'EN' );
	$current = get_locale();
	$links   = array();
	foreach ( trp_custom_language_switcher() as $code => $lang ) {
		$label = isset( $labels[ $code ] ) ? $labels[ $code ] : strtoupper( $lang['short_language_name'] );
		if ( $code === $current ) {
			$links[] = '<span class="ad-lang__item is-current" aria-current="true">' . esc_html( $label ) . '</span>';
		} else {
			$links[] = '<a class="ad-lang__item" href="' . esc_url( $lang['current_page_url'] ) . '" hreflang="' . esc_attr( str_replace( '_', '-', $code ) ) . '" lang="' . esc_attr( str_replace( '_', '-', $code ) ) . '">' . esc_html( $label ) . '</a>';
		}
	}
	return '<nav class="ad-lang" aria-label="Language" data-no-translation>' . implode( '<span class="ad-lang__sep" aria-hidden="true">/</span>', $links ) . '</nav>';
} );

// Contact Form 7: τα μηνύματα της φόρμας στα αγγλικά όταν στέλνεται από το /en/.
// Κρυφό πεδίο με τη γλώσσα της σελίδας (το _wpcf7_locale είναι η γλώσσα της φόρμας, όχι της σελίδας).
add_filter( 'wpcf7_form_hidden_fields', function ( $fields ) {
	$fields['_ad_lang'] = get_locale();
	return $fields;
} );
add_filter( 'wpcf7_display_message', function ( $message, $status ) {
	$locale = isset( $_POST['_ad_lang'] ) ? sanitize_text_field( wp_unslash( $_POST['_ad_lang'] ) ) : get_locale(); // phpcs:ignore WordPress.Security.NonceVerification
	if ( 0 !== strpos( $locale, 'en' ) ) {
		return $message;
	}
	$en = array(
		'mail_sent_ok'      => 'Thank you for your message! I will get back to you soon.',
		'mail_sent_ng'      => 'Something went wrong and your message was not sent. Please try again in a moment.',
		'validation_error'  => 'Some fields need your attention. Please check them and try again.',
		'spam'              => 'Something went wrong and your message was not sent. Please try again in a moment.',
		'invalid_required'  => 'Please fill out this field.',
		'invalid_too_long'  => 'This text is too long.',
		'invalid_too_short' => 'This text is too short.',
		'invalid_email'     => 'Please enter a valid email address.',
		'invalid_tel'       => 'Please enter a valid phone number.',
	);
	return isset( $en[ $status ] ) ? $en[ $status ] : $message;
}, 10, 2 );

// Δεν χρησιμοποιούμε τον διακόπτη του TranslatePress (έχουμε δικό μας): δεν φορτώνουμε τα αρχεία του.
add_action( 'wp_enqueue_scripts', function () {
	wp_dequeue_style( 'trp-language-switcher-v2' );
	wp_dequeue_script( 'trp-language-switcher-js-v2' );
}, 100 );

// Contact Form 7: η φόρμα δηλώνει τη γλώσσα της σελίδας (σωστά κεφαλαία & αναγνώστες οθόνης).
add_filter( 'do_shortcode_tag', function ( $output, $tag ) {
	if ( 'contact-form-7' !== $tag ) {
		return $output;
	}
	$lang = str_replace( '_', '-', get_locale() );
	return preg_replace( '/(<div class="wpcf7[^"]*"[^>]*?\s)lang="[^"]*"/', '$1lang="' . esc_attr( $lang ) . '"', $output, 1 );
}, 10, 2 );

// Menu: οι υποκατηγορίες ανοίγουν μόνο με κλικ.
add_action( 'wp_enqueue_scripts', function () {
	$file = get_stylesheet_directory() . '/assets/js/menu.js';
	wp_enqueue_script( 'alkis-dimos-menu', get_stylesheet_directory_uri() . '/assets/js/menu.js', array(), filemtime( $file ), array( 'in_footer' => true, 'strategy' => 'defer' ) );
} );
