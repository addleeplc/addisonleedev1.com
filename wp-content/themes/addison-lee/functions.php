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

// test passing constant variables

function enqueue_pickup_script() {
    wp_enqueue_script('pickup-search', get_template_directory_uri() . '/template-parts/blocks/quotewidget/quote-widget.js', [], null, true);
    wp_localize_script('pickup-search', 'pickupSearchData', [
        'apiEndpoint' => SHAMROCK_QWKEY,
        'searchUrl' => SHAMROCK_ADDRESS_SEARCH_URL,
        'flightSearchUrl' => SHAMROCK_FLIGHT_SEARCH_URL,
        'productCatalogue' => SHAMROCK_PRODUCT_CATALOGUE_SERVICE,
        'productCatalogueCouriers' => SHAMROCK_PRODUCT_CATALOGUE_SERVICE_COURIER,
        'bycycleId' => SHAMROCK_PRODUCT_CATALOGUE_SERVICE_COURIER_BYCYCLE_ID
        // ⚠️ Do NOT pass the API key unless it's safe to expose
        // 'apiKey' => MY_API_KEY, // Only if it's a public key
    ]);
}
add_action('wp_enqueue_scripts', 'enqueue_pickup_script');






