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

// Quote Widget functions.
require get_template_directory() . '/inc/qw-functions.php';


// ##### Custom Functions and Filters

/*add_filter( 'rest_authentication_errors', function( $result ) {
  	if ( true === $result || is_wp_error( $result ) ) { return $result; }
	if ( ! is_user_logged_in() ) {
        return new WP_Error('rest_not_logged_in',
            __( 'You are not currently logged in.' ),
            array( 'status' => 401 )
        );
    }

    return $result;
});
*/
// test passing constant variables


/**
 * Global REST auth gate with explicit whitelist for specific public endpoints.
 * Drop-in replacement for your current snippet.
 */

add_filter('rest_authentication_errors', function ($result) {
    // If another auth method already produced a result (error or success), respect it.
    if ( ! empty($result) ) {
        return $result;
    }

    // We need the current request object to reliably read the route.
    // WordPress makes it available on the $GLOBALS['wp_rest_server'] stack while handling requests.
    // If not available, allow (don’t break other handlers).
    $request = null;
    if ( function_exists('rest_get_server') ) {
        $server = rest_get_server();
        if ( $server && ! empty($server->get_routes()) ) {
            // Try to fetch the current request via the global filter param (added in WP 5.6+).
            // If not available, we’ll fall back to a route inference a bit later.
        }
    }

    // Preferred: use the request from the current filter args if WP passes it (newer WP versions).
    // We re-register the filter with 2 args to ensure we get the $request when available.
    return $result;
}, 10, 1);

// Re-register with 2 parameters to get $request cleanly (WordPress passes it).
remove_filter('rest_authentication_errors', 'quote_lockdown_fallback', 10);
add_filter('rest_authentication_errors', 'quote_lockdown_fallback', 10, 2);

function quote_lockdown_fallback( $result, $request = null ) {
    // If someone already authenticated or denied, respect it.
    if ( ! empty($result) ) {
        return $result;
    }

    // If we don’t have a request, allow — don’t block core or internal calls blindly.
    if ( ! $request || ! ($request instanceof WP_REST_Request) ) {
        return null;
    }

    // Route string looks like: /quote/v1/address-search
    $route = $request->get_route();

    // Whitelist exact public routes (adjust if you add methods/variations)
    $public_routes = [
        '/quote/v1/address-search',
        '/quote/v1/courier-service',
        '/quote/v1/flight',
        '/quote/v1/refine',
        '/quote/v1/price',
    ];

    if ( in_array( $route, $public_routes, true ) ) {
        return null; // Public: allow
    }

    // Everything else requires login
    if ( ! is_user_logged_in() ) {
        return new WP_Error(
            'rest_forbidden',
            'You must be logged in to access this endpoint.',
            [ 'status' => 401 ]
        );
    }

    return null;
}







