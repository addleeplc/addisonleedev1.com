<?php
/**
 * File for make_twentytwentytwo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

// Scripts and Styles.
require get_template_directory() . '/inc/enqueue.php';

// ACF related functions.
require get_template_directory() . '/inc/acf-functions.php';

// ACF blocks.
require get_template_directory() . '/inc/acf-blocks.php';

// Custom Post Type related functions.
require get_template_directory() . '/inc/post-types.php';

// Rename 'post' type in WP Admin.
require get_template_directory() . '/inc/rename-posts.php';

// Extra functions.
require get_template_directory() . '/inc/theme-functions.php';

// SVG Icons class.
require get_template_directory() . '/inc/svgs.php';

// Admin functions.
require get_template_directory() . '/inc/admin.php';

// Filter functions.
require get_template_directory() . '/inc/filters.php';

// WPForms functions.
require get_template_directory() . '/inc/wpforms.php';


// ##### Custom Functions and Filters

add_filter( 'rest_authentication_errors', function( $result ) {
  	if ( true === $result || is_wp_error( $result ) ) { return $result; }
	if ( ! is_user_logged_in() ) {
        return new WP_Error('rest_not_logged_in',
            __( 'You are not currently logged in.' ),
            array( 'status' => 401 )
        );
    }

    return $result;
});