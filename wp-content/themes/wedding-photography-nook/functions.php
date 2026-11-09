<?php
/**
 * Wedding Photography Nook functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wedding Photography Nook
 * @since Wedding Photography Nook 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'wedding_photography_nook_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Wedding Photography Nook 1.0
	 *
	 * @return void
	 */
	function wedding_photography_nook_setup() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Register the theme dashboard and welcome notice.
		require get_theme_file_path( '/admin/about-theme.php' );
	}

endif;

add_action( 'after_setup_theme', 'wedding_photography_nook_setup' );

if ( ! function_exists( 'wedding_photography_nook_styles' ) ) :
	/**
	 * Enqueue styles.
	 *
	 * @since Wedding Photography Nook 1.0
	 *
	 * @return void
	 */
	function wedding_photography_nook_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'wedding-photography-nook-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'wedding-photography-nook-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'wedding_photography_nook_styles' );

// Registers custom block styles.
if ( ! function_exists( 'wedding_photography_nook_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since Wedding Photography Nook 1.0
	 *
	 * @return void
	 */
	function wedding_photography_nook_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'wedding-photography-nook' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);

		$image_blocks = array(
			'core/image',
			'core/featured-image',
		);

		foreach ( $image_blocks as $block ) {
			register_block_style(
				$block,
				array(
					'name'         => 'with-border',
					'label'        => __( 'With border', 'wedding-photography-nook' ),
					'inline_style' => '
					.is-style-with-border {
						padding: 10px;
						background: #ffffff;
						border: 1px solid #E6E4E0;
					}'
				)
			);
		}

		register_block_style(
			'core/separator',
			array(
				'name'         => 'double-line',
				'label'        => __( 'Double line', 'wedding-photography-nook' ),
				'inline_style' => '
				.is-style-double-line {
					height: 4px;
					border-top: 3px double rgba(0,0,0,.25) !important;
				}'
			)
		);
	}
endif;
add_action( 'init', 'wedding_photography_nook_block_styles' );
