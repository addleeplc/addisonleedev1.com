<?php
/**
 * ACF functions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

/**
 * Save ACF json.
 *
 * @param array $path Path to save ACF json.
 */
function acf_json_save_point( $path ) {
	$path = get_stylesheet_directory() . '/acf-json';
	return $path;
}
add_filter( 'acf/settings/save_json', 'acf_json_save_point' );

/**
 * Load ACF json.
 *
 * @param array $paths Path to load ACF json.
 */
function acf_json_load_point( $paths ) {
	unset( $paths[0] );
	$paths[] = get_stylesheet_directory() . '/acf-json';
	return $paths;
}
add_filter( 'acf/settings/load_json', 'acf_json_load_point' );

/** Options Page. */
if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page(
		array(
			'page_title' => 'Theme Settings',
			'menu_title' => 'Theme Settings',
			'menu_slug'  => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect'   => false,
		)
	);

	// Archives Options.
	acf_add_options_sub_page(
		array(
			'page_title'  => __( 'Archives' ),
			'menu_title'  => __( 'Archives' ),
			'parent_slug' => 'theme-general-settings',
		)
	);
}
