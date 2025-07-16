<?php
/**
 * ACF block functions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

/** Register gutenberg blocks. */
function addisonlee_acf_block_types() {
	register_block_type( get_template_directory() . '/template-parts/blocks/hero-heading' );
	register_block_type( get_template_directory() . '/template-parts/blocks/hero-text-image' );
	register_block_type( get_template_directory() . '/template-parts/blocks/hero-background-image' );
	register_block_type( get_template_directory() . '/template-parts/blocks/hero-background-video' );
	register_block_type( get_template_directory() . '/template-parts/blocks/image-text-split' );
	register_block_type( get_template_directory() . '/template-parts/blocks/image-text-grid' );
	register_block_type( get_template_directory() . '/template-parts/blocks/image-text-grid-secondary' );
	register_block_type( get_template_directory() . '/template-parts/blocks/image-text-grid-alternate' );
	register_block_type( get_template_directory() . '/template-parts/blocks/image-text-carousel' );
	register_block_type( get_template_directory() . '/template-parts/blocks/image-text-white-card' );
	register_block_type( get_template_directory() . '/template-parts/blocks/image-text-tabs' );
	register_block_type( get_template_directory() . '/template-parts/blocks/key-points' );
	register_block_type( get_template_directory() . '/template-parts/blocks/key-points-simple' );
	register_block_type( get_template_directory() . '/template-parts/blocks/key-points-numbered' );
	register_block_type( get_template_directory() . '/template-parts/blocks/key-points-section' );
	register_block_type( get_template_directory() . '/template-parts/blocks/text-video-split' );
	register_block_type( get_template_directory() . '/template-parts/blocks/text-video-white-card' );
	register_block_type( get_template_directory() . '/template-parts/blocks/full-page-image-text-overlay' );
	register_block_type( get_template_directory() . '/template-parts/blocks/info-cards' );
	register_block_type( get_template_directory() . '/template-parts/blocks/faqs' );
	register_block_type( get_template_directory() . '/template-parts/blocks/faqs-categories-menu' );
	register_block_type( get_template_directory() . '/template-parts/blocks/feedback-carousel' );
	register_block_type( get_template_directory() . '/template-parts/blocks/scrolling-cards' );
	register_block_type( get_template_directory() . '/template-parts/blocks/full-page-video' );
	register_block_type( get_template_directory() . '/template-parts/blocks/image-text-carousel-tabs' );
	register_block_type( get_template_directory() . '/template-parts/blocks/contact-form' );
	register_block_type( get_template_directory() . '/template-parts/blocks/multistep-form' );
	register_block_type( get_template_directory() . '/template-parts/blocks/contact-info' );
	register_block_type( get_template_directory() . '/template-parts/blocks/job-vacancies' );
	register_block_type( get_template_directory() . '/template-parts/blocks/just-call-to-action' );
	register_block_type( get_template_directory() . '/template-parts/blocks/body-text' );
	register_block_type( get_template_directory() . '/template-parts/blocks/body-text-with-nav' );
	register_block_type( get_template_directory() . '/template-parts/blocks/trustpilot-logo' );
	register_block_type( get_template_directory() . '/template-parts/blocks/logo-row' );
	register_block_type( get_template_directory() . '/template-parts/blocks/about-us' );
	register_block_type( get_template_directory() . '/template-parts/blocks/banner-tick-shape' );
	register_block_type( get_template_directory() . '/template-parts/blocks/simple-carousel' );
	register_block_type( get_template_directory() . '/template-parts/blocks/simple-grid-carousel' );
	register_block_type( get_template_directory() . '/template-parts/blocks/testimonial-carousel' );
	register_block_type( get_template_directory() . '/template-parts/blocks/detail-carousel' );
	register_block_type( get_template_directory() . '/template-parts/blocks/awards' );
	register_block_type( get_template_directory() . '/template-parts/blocks/accreditations' );
	register_block_type( get_template_directory() . '/template-parts/blocks/accordion-menus' );
	register_block_type( get_template_directory() . '/template-parts/blocks/roadmap' );
	register_block_type( get_template_directory() . '/template-parts/blocks/tabs-content-split' );
	register_block_type( get_template_directory() . '/template-parts/blocks/featured-videos' );
	register_block_type( get_template_directory() . '/template-parts/blocks/team-grid' );
	register_block_type( get_template_directory() . '/template-parts/blocks/callout-banner' );
	register_block_type( get_template_directory() . '/template-parts/blocks/track-your-job' );
	register_block_type( get_template_directory() . '/template-parts/blocks/table-block' );
	register_block_type( get_template_directory() . '/template-parts/blocks/account-form' );
	register_block_type( get_template_directory() . '/template-parts/blocks/iframe' );
	register_block_type( get_template_directory() . '/template-parts/blocks/add-html' );
	register_block_type( get_template_directory() . '/template-parts/blocks/add-javascript' );
	register_block_type( get_template_directory() . '/template-parts/blocks-blog/blog-content' );
	register_block_type( get_template_directory() . '/template-parts/blocks-blog/blog-content-heading' );
	register_block_type( get_template_directory() . '/template-parts/blocks-blog/blog-content-book-now' );
	register_block_type( get_template_directory() . '/template-parts/blocks-blog/blog-image-text' );
	register_block_type( get_template_directory() . '/template-parts/blocks-blog/blog-video' );
	register_block_type( get_template_directory() . '/template-parts/blocks-blog/blog-gallery' );
	register_block_type( get_template_directory() . '/template-parts/blocks-resources/resources-content' );
	register_block_type( get_template_directory() . '/template-parts/blocks-resources/resources-image' );
	register_block_type( get_template_directory() . '/template-parts/blocks-resources/resources-video' );
	register_block_type( get_template_directory() . '/template-parts/blocks/voucher-list' );
	register_block_type( get_template_directory() . '/template-parts/blocks/quotewidget' );
}

if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'addisonlee_acf_block_types' );
}

/**
 * Set allowed block types.
 *
 * @param array $allowed_blocks array to allow blocks.
 * @param array $editor_context array for location.
 */
function addisonlee_allowed_block_types( $allowed_blocks, $editor_context ) {

	$allowed_blocks = array(
		'acf/hero-heading',
		'acf/hero-text-image',
		'acf/hero-background-image',
		'acf/hero-background-video',
		'acf/image-text-split',
		'acf/image-text-grid',
		'acf/image-text-grid-alternate',
		'acf/image-text-grid-secondary',
		'acf/image-text-carousel',
		'acf/image-text-white-card',
		'acf/image-text-tabs',
		'acf/key-points',
		'acf/key-points-simple',
		'acf/key-points-numbered',
		'acf/key-points-section',
		'acf/text-video-split',
		'acf/text-video-white-card',
		'acf/full-page-image-text-overlay',
		'acf/info-cards',
		'acf/faqs',
		'acf/faqs-categories-menu',
		'acf/feedback-carousel',
		'acf/scrolling-cards',
		'acf/full-page-video',
		'acf/image-text-carousel-tabs',
		'acf/contact-form',
		'acf/multistep-form',
		'acf/contact-info',
		'acf/job-vacancies',
		'acf/just-call-to-action',
		'acf/body-text',
		'acf/body-text-with-nav',
		'acf/trustpilot-logo',
		'acf/logo-row',
		'acf/about-us',
		'acf/simple-carousel',
		'acf/simple-grid-carousel',
		'acf/testimonial-carousel',
		'acf/detail-carousel',
		'acf/awards',
		'acf/accreditations',
		'acf/accordion-menus',
		'acf/banner-tick-shape',
		'acf/roadmap',
		'acf/tabs-content-split',
		'acf/featured-videos',
		'acf/team-grid',
		'acf/callout-banner',
		'acf/track-your-job',
		'acf/table-block',
		'acf/account-form',
		'acf/iframe',
		'acf/add-html',
		'acf/add-javascript',
		'acf/voucher-list',
		'acf/quotewidget',
	);

	if ( 'post' === $editor_context->post->post_type ) {
		$allowed_blocks = array(
			'acf/blog-content',
			'acf/blog-content-heading',
			'acf/blog-content-book-now',
			'acf/blog-image-text',
			'acf/blog-video',
			'acf/blog-gallery',
		);
	}

	if ( 'resources' === $editor_context->post->post_type ) {
		$allowed_blocks = array(
			'acf/resources-content',
			'acf/resources-image',
			'acf/resources-video',
			'acf/iframe',
		);
	}

	/** Return allowed blocks. */
	return $allowed_blocks;
}
add_filter( 'allowed_block_types_all', 'addisonlee_allowed_block_types', 25, 2 );

/** Enqueue admin script. */
function enqueue_admin_scripts_and_styles() {
	wp_enqueue_script( 'admin-scripts', get_template_directory_uri() . '/assets/src/js/admin.js', array( 'wp-blocks', 'wp-element', 'wp-hooks' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'admin_enqueue_scripts', 'enqueue_admin_scripts_and_styles' );
