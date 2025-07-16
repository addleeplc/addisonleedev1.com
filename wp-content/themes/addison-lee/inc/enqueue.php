<?php
/**
 * Enqueue scripts and styles.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

/**
 * Frontend scripts and styles.
 */
function addison_lee_scripts() {
	wp_enqueue_style( 'addisonlee-style', get_template_directory_uri() . '/assets/dist/css/app.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'addisonlee-selectric', get_template_directory_uri() . '/assets/dist/css/selectric.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'addisonlee-selectric', get_template_directory_uri() . '/assets/dist/js/jquery.selectric.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
	wp_enqueue_script( 'addisonlee-js', get_template_directory_uri() . '/assets/dist/js/app.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );

	// Glide js.
	wp_enqueue_style( 'glide_css', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'glide-js', 'https://cdn.jsdelivr.net/npm/@glidejs/glide', array(), wp_get_theme()->get( 'Version' ), true );
	wp_enqueue_script( 'sliders-js', get_template_directory_uri() . '/assets/dist/js/sliders.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );

	// Filters js.
	if ( ( is_home() && ! is_front_page() ) || is_post_type_archive( 'resources' ) ) {
		wp_enqueue_script( 'filters-js', get_template_directory_uri() . '/assets/dist/js/filters.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );

		// Localize events filter.
		wp_enqueue_script( 'filters-js' );
		wp_localize_script(
			'filters-js',
			'post_ajax_filter',
			array(
				'ajax_url' => admin_url( 'admin-ajax.php' ),
				'nonce'    => wp_create_nonce( 'fetch_posts_nonce' ),
			)
		);
	}

	if (has_block('acf/trustpilot-logo')) {
		wp_enqueue_script( 'trustpilot-js', '//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js', array(), wp_get_theme()->get( 'Version' ), true );
	}
	if (has_block('acf/blog-video') || has_block('acf/resources-video')) {
		wp_enqueue_script( 'vimeo-js', 'https://player.vimeo.com/api/player.js', array(), wp_get_theme()->get( 'Version' ), true );
	}

	// Calendly.
	wp_enqueue_style( 'calendly-css', 'https://assets.calendly.com/assets/external/widget.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'calendly-js', 'https://assets.calendly.com/assets/external/widget.js', array(), wp_get_theme()->get( 'Version' ), true );

	// UTM tracking.
	wp_enqueue_script( 'utm-tracking', get_template_directory_uri() . '/assets/dist/js/utm-tracker.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'addison_lee_scripts' );


/**
 * Enqueue backend scripts and styles.
 */
function addisonlee_backend_scripts() {

	wp_enqueue_style( 'addisonlee-admin-style', get_template_directory_uri() . '/assets/dist/css/admin.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'admin_enqueue_scripts', 'addisonlee_backend_scripts' );
