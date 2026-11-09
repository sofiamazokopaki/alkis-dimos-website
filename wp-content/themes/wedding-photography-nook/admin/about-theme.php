<?php
/**
 * Reusable theme dashboard and premium theme promotions.
 *
 * @package Wedding_Photography_Nook
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Wedding_Photography_Nook_Theme_Admin_Page' ) ) :
	/**
	 * Register and render the Wedding Photography Nook dashboard and welcome notice.
	 */
	class Wedding_Photography_Nook_Theme_Admin_Page {

		/**
		 * Theme-specific dashboard configuration.
		 *
		 * @var array
		 */
		private $config;

		/**
		 * Set up WordPress hooks.
		 *
		 * @param array $config Theme-specific dashboard configuration.
		 */
		public function __construct( array $config ) {
			$this->config = $config;

			add_action( 'admin_menu', array( $this, 'add_page' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_assets' ) );
			add_action( 'admin_notices', array( $this, 'show_notice' ) );
			add_action( 'wp_ajax_' . $this->config['prefix'] . '_dismiss_notice', array( $this, 'dismiss_notice' ) );
			add_action( 'after_switch_theme', array( $this, 'reset_notice' ) );
		}

		/**
		 * Add the dashboard under Appearance.
		 */
		public function add_page() {
			add_theme_page(
				sprintf( __( '%s Dashboard', 'wedding-photography-nook' ), $this->config['name'] ),
				$this->config['name'],
				$this->config['capability'],
				$this->config['slug'] . '-about',
				array( $this, 'render_page' )
			);
		}

		/**
		 * Enqueue dashboard and notice assets.
		 */
		public function enqueue_assets() {
			$version = wp_get_theme()->get( 'Version' );

			wp_enqueue_style(
				$this->config['prefix'] . '-admin-css',
				$this->config['admin_css'],
				array(),
				$version
			);

			wp_enqueue_script(
				$this->config['prefix'] . '-admin-js',
				$this->config['admin_js'],
				array( 'jquery' ),
				$version,
				true
			);

			wp_localize_script(
				$this->config['prefix'] . '-admin-js',
				'themeAdminNotice',
				array(
					'ajax_url' => admin_url( 'admin-ajax.php' ),
					'nonce'    => wp_create_nonce( $this->config['prefix'] . '_notice_nonce' ),
					'action'   => $this->config['prefix'] . '_dismiss_notice',
				)
			);
		}

		/**
		 * Determine whether a child theme may display the parent notice.
		 *
		 * @return bool
		 */
		private function should_show_notice() {
			if ( ! is_child_theme() ) {
				return true;
			}

			/**
			 * Filters whether the Wedding Photography Nook admin notice should show for a child theme.
			 *
			 * @param bool     $show_notice Whether to show the notice.
			 * @param string   $stylesheet  Active child theme stylesheet.
			 * @param WP_Theme $theme       Active child theme object.
			 */
			return (bool) apply_filters(
				'wedding_photography_nook_show_admin_notice',
				false,
				wp_get_theme()->get_stylesheet(),
				wp_get_theme()
			);
		}

		/**
		 * Output the dismissible welcome notice.
		 */
		public function show_notice() {
			if ( ! $this->should_show_notice() || ! current_user_can( $this->config['capability'] ) ) {
				return;
			}

			$screen = get_current_screen();
			if ( $screen && 'appearance_page_' . $this->config['slug'] . '-about' === $screen->id ) {
				return;
			}

			$dismissed_users = get_option( $this->config['prefix'] . '_dismissed_users', array() );
			if ( in_array( get_current_user_id(), $dismissed_users, true ) ) {
				return;
			}

			$about_url = admin_url( 'themes.php?page=' . $this->config['slug'] . '-about' );
			?>
			<div id="<?php echo esc_attr( $this->config['prefix'] ); ?>-notice" class="notice theme-about-notice wedding-photography-nook-admin-notice" data-prefix="<?php echo esc_attr( $this->config['prefix'] ); ?>">
				<div class="wedding-photography-nook-admin-notice__content">
					<p class="wedding-photography-nook-admin-notice__greeting">
						<?php printf( esc_html__( 'Hello, %s 👋', 'wedding-photography-nook' ), esc_html( wp_get_current_user()->display_name ) ); ?>
					</p>
					<h3><?php echo esc_html( $this->config['notice']['title'] ); ?></h3>
					<p class="wedding-photography-nook-admin-notice__message"><?php echo esc_html( $this->config['notice']['message'] ); ?></p>
					<p class="wedding-photography-nook-admin-notice__actions">
						<a href="<?php echo esc_url( $about_url ); ?>" class="button button-primary">
							<?php echo esc_html( $this->config['notice']['button'] ); ?>
						</a>
					</p>
				</div>

				<button type="button" class="notice-dismiss">
					<span class="screen-reader-text"><?php esc_html_e( 'Dismiss this notice.', 'wedding-photography-nook' ); ?></span>
				</button>
			</div>
			<?php
		}

		/**
		 * Save the current user's notice dismissal.
		 */
		public function dismiss_notice() {
			check_ajax_referer( $this->config['prefix'] . '_notice_nonce', 'nonce' );

			if ( ! current_user_can( $this->config['capability'] ) ) {
				wp_send_json_error( array( 'message' => __( 'Unauthorized', 'wedding-photography-nook' ) ) );
			}

			$user_id         = get_current_user_id();
			$dismissed_users = get_option( $this->config['prefix'] . '_dismissed_users', array() );

			if ( ! in_array( $user_id, $dismissed_users, true ) ) {
				$dismissed_users[] = $user_id;
				update_option( $this->config['prefix'] . '_dismissed_users', $dismissed_users );
			}

			wp_send_json_success();
		}

		/**
		 * Show the notice again after theme activation.
		 */
		public function reset_notice() {
			delete_option( $this->config['prefix'] . '_dismissed_users' );
		}

		/**
		 * Add consistent tracking parameters to a Theme Nook URL.
		 *
		 * @param string $url    Destination URL.
		 * @param string $medium Campaign medium.
		 * @return string
		 */
		private function campaign_url( $url, $medium ) {
			return add_query_arg(
				array(
					'utm_source'   => 'wpadmin',
					'utm_medium'   => $medium,
					'utm_campaign' => sanitize_title( wp_get_theme()->get_stylesheet() ),
				),
				$url
			);
		}

		/**
		 * Render a configured product card.
		 *
		 * @param array $product Product configuration.
		 */
		private function render_product( array $product ) {
			$product_url = $this->campaign_url( $product['product_url'], 'upgrade' );
			?>
			<article class="wedding-photography-nook-product-card">
				<a class="wedding-photography-nook-product-card__image" href="<?php echo esc_url( $product_url ); ?>" target="_blank" rel="noopener noreferrer">
					<img src="<?php echo esc_url( $this->config['image_dir'] . '/' . $product['image'] ); ?>" alt="<?php echo esc_attr( $product['image_alt'] ); ?>">
				</a>
				<div class="wedding-photography-nook-product-card__body">
					<div class="wedding-photography-nook-product-card__title-row">
						<h2><?php echo esc_html( $product['title'] ); ?></h2>
						<?php if ( ! empty( $product['badge'] ) ) : ?>
							<span class="wedding-photography-nook-badge wedding-photography-nook-badge--new"><?php echo esc_html( $product['badge'] ); ?></span>
						<?php endif; ?>
					</div>
					<p><?php echo esc_html( $product['description'] ); ?></p>
					<div class="wedding-photography-nook-product-card__actions">
						<a href="<?php echo esc_url( $product['demo_url'] ); ?>" class="button button-secondary" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'View demo', 'wedding-photography-nook' ); ?></a>
						<a href="<?php echo esc_url( $product_url ); ?>" class="button button-primary" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $product['button'] ); ?></a>
					</div>
				</div>
			</article>
			<?php
		}

		/**
		 * Render the theme dashboard.
		 */
		public function render_page() {
			$brand_url = $this->campaign_url( $this->config['brand_url'], 'topbar' );
			?>
			<div class="wedding-photography-nook-about-wrap">
				<header class="wedding-photography-nook-top-bar">
					<div class="wedding-photography-nook-top-bar__logo">
						<img src="<?php echo esc_url( $this->config['image_dir'] . '/ttn_logo.png' ); ?>" alt="<?php esc_attr_e( 'The Theme Nook', 'wedding-photography-nook' ); ?>" class="wedding-photography-nook-top-bar__logo-img">
						<span class="wedding-photography-nook-top-bar__brand"><?php esc_html_e( 'The Theme Nook', 'wedding-photography-nook' ); ?></span>
					</div>
					<a href="<?php echo esc_url( $brand_url ); ?>" target="_blank" rel="noopener noreferrer">
						<?php esc_html_e( 'Visit The Theme Nook', 'wedding-photography-nook' ); ?> <span aria-hidden="true">↗</span>
					</a>
				</header>

				<section class="wedding-photography-nook-hero">
					<p class="wedding-photography-nook-eyebrow"><?php echo esc_html( $this->config['hero']['eyebrow'] ); ?></p>
					<h1><?php echo esc_html( $this->config['hero']['title'] ); ?></h1>
					<p><?php echo esc_html( $this->config['hero']['description'] ); ?></p>
				</section>

				<div class="wedding-photography-nook-dashboard-grid">
					<main class="wedding-photography-nook-products">
						<?php
						foreach ( $this->config['products'] as $product ) {
							$this->render_product( $product );
						}
						?>
					</main>

					<aside class="wedding-photography-nook-sidebar">
						<section class="wedding-photography-nook-sidebar-card">
							<h2><?php echo esc_html( $this->config['premium']['title'] ); ?></h2>
							<ul class="wedding-photography-nook-check-list">
								<?php foreach ( $this->config['premium']['features'] as $feature ) : ?>
									<li><?php echo esc_html( $feature ); ?></li>
								<?php endforeach; ?>
							</ul>
						</section>

						<section class="wedding-photography-nook-sidebar-card">
							<div class="wedding-photography-nook-stars" aria-label="<?php esc_attr_e( 'Five stars', 'wedding-photography-nook' ); ?>">★★★★★</div>
							<h2><?php echo esc_html( $this->config['review']['title'] ); ?></h2>
							<p><?php echo esc_html( $this->config['review']['description'] ); ?></p>
							<a href="<?php echo esc_url( $this->config['review']['url'] ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $this->config['review']['button'] ); ?> <span aria-hidden="true">→</span></a>
						</section>

						<section class="wedding-photography-nook-sidebar-card">
							<h2><?php echo esc_html( $this->config['support']['title'] ); ?></h2>
							<p><?php echo esc_html( $this->config['support']['description'] ); ?></p>
							<a href="<?php echo esc_url( $this->config['support']['url'] ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $this->config['support']['button'] ); ?> <span aria-hidden="true">→</span></a>
						</section>
					</aside>
				</div>
			</div>
			<?php
		}
	}
endif;

new Wedding_Photography_Nook_Theme_Admin_Page(
	array(
		'name'       => __( 'Wedding Photography Nook', 'wedding-photography-nook' ),
		'slug'       => 'wedding-photography-nook',
		'prefix'     => 'wedding_photography_nook',
		'capability' => 'edit_theme_options',
		'admin_css'  => get_template_directory_uri() . '/admin/about-theme.css',
		'admin_js'   => get_template_directory_uri() . '/admin/admin-notice.js',
		'image_dir'  => get_template_directory_uri() . '/admin/images',
		'brand_url'  => 'https://thethemenook.com/',
		'notice'     => array(
			'title'   => __( 'Wedding Photography Nook is ready ✨', 'wedding-photography-nook' ),
			'message' => __( 'Now take your site further with a premium photography theme — polished layouts, flexible styles, and more ways to showcase your work.', 'wedding-photography-nook' ),
			'button'  => __( 'Explore premium themes', 'wedding-photography-nook' ),
		),
		'hero'       => array(
			'eyebrow'    => __( 'Premium photography themes', 'wedding-photography-nook' ),
			'title'      => __( 'Give your photography the website it deserves.', 'wedding-photography-nook' ),
			'description' => __( 'Move beyond the starter theme with complete page designs, portfolio-focused layouts, curated styles, and thoughtful details made for photographers.', 'wedding-photography-nook' ),
		),
		'products'   => array(
			array(
				'title'       => __( 'Chateau', 'wedding-photography-nook' ),
				'badge'       => __( 'New', 'wedding-photography-nook' ),
				'description' => __( 'A romantic WordPress theme for wedding photographers who want an elegant, timeless presence shaped by old-world charm and editorial storytelling.', 'wedding-photography-nook' ),
				'image'       => 'chateau_featured.jpg',
				'image_alt'   => __( 'Chateau website preview', 'wedding-photography-nook' ),
				'demo_url'    => 'https://thethemenook.com/chateau-demo/',
				'product_url' => 'https://thethemenook.com/products/chateau/',
				'button'      => __( 'Explore Chateau', 'wedding-photography-nook' ),
			),
			array(
				'title'       => __( 'Maison', 'wedding-photography-nook' ),
				'badge'       => '',
				'description' => __( 'An editorial WordPress theme for wedding photographers and creative studios who want a refined, modern presence with striking visual storytelling.', 'wedding-photography-nook' ),
				'image'       => 'maison_featured.jpg',
				'image_alt'   => __( 'Maison website preview', 'wedding-photography-nook' ),
				'demo_url'    => 'https://thethemenook.com/maison-photo/',
				'product_url' => 'https://thethemenook.com/products/maison/',
				'button'      => __( 'Explore Maison', 'wedding-photography-nook' ),
			),
			array(
				'title'       => __( 'Photo Nook Pro', 'wedding-photography-nook' ),
				'badge'       => '',
				'description' => __( 'A soft, timeless theme for wedding photographers who want an elegant portfolio and a polished client experience without starting from scratch.', 'wedding-photography-nook' ),
				'image'       => 'photo_nook_featured.jpg',
				'image_alt'   => __( 'Photo Nook Pro website preview', 'wedding-photography-nook' ),
				'demo_url'    => 'https://thethemenook.com/photo-nook-pro/',
				'product_url' => 'https://thethemenook.com/products/photo-nook-pro/',
				'button'      => __( 'Explore Photo Nook Pro', 'wedding-photography-nook' ),
			),
		),
		'premium'    => array(
			'title'    => __( 'Why go premium?', 'wedding-photography-nook' ),
			'features' => array(
				__( 'Finished page layouts that save setup time', 'wedding-photography-nook' ),
				__( 'More patterns for portfolios and services', 'wedding-photography-nook' ),
				__( 'Coordinated typography and colour options', 'wedding-photography-nook' ),
				__( 'Updates and direct setup support', 'wedding-photography-nook' ),
			),
		),
		'review'     => array(
			'title'       => __( 'Enjoying Wedding Photography Nook?', 'wedding-photography-nook' ),
			'description' => __( 'A quick WordPress.org review helps other photographers discover the theme.', 'wedding-photography-nook' ),
			'button'      => __( 'Leave a review', 'wedding-photography-nook' ),
			'url'         => 'https://wordpress.org/support/theme/wedding-photography-nook/reviews/#new-post',
		),
		'support'    => array(
			'title'       => __( 'Need help?', 'wedding-photography-nook' ),
			'description' => __( 'Questions about choosing a theme or getting your site set up? Get in touch.', 'wedding-photography-nook' ),
			'button'      => __( 'Contact support', 'wedding-photography-nook' ),
			'url'         => 'https://thethemenook.com/contact/',
		),
	)
);
