<?php


function enqueue_pickup_script() {
    wp_enqueue_script('pickup-search', get_template_directory_uri() . '/template-parts/blocks/quotewidget/quote-widget.js', [], null, true);
    wp_localize_script('pickup-search', 'pickupSearchData', [
        'apiEndpoint' => SHAMROCK_QWKEY,
        'searchUrl' => SHAMROCK_ADDRESS_SEARCH_URL,
        'flightSearchUrl' => SHAMROCK_FLIGHT_SEARCH_URL,
        'productCatalogue' => SHAMROCK_PRODUCT_CATALOGUE_SERVICE,
        'productCatalogueCouriers' => SHAMROCK_PRODUCT_CATALOGUE_SERVICE_COURIER,
        'bycycleId' => SHAMROCK_PRODUCT_CATALOGUE_SERVICE_COURIER_BYCYCLE_ID
        // Do NOT pass the API key unless it's safe to expose
        // 'apiKey' => MY_API_KEY, // Only if it's a public key
    ]);
}
add_action('wp_enqueue_scripts', 'enqueue_pickup_script');



// address search request
add_action('rest_api_init', function () {
    register_rest_route('quote/v1', '/address-search', [
        'methods' => 'GET',
        'permission_callback' => '__return_true', // REQUIRED
        'callback' => function (WP_REST_Request $request) {
            // Get query parameter from JS
            $search_string = sanitize_text_field($request->get_param('search_string'));

            // Build external API URL dynamically
            $api_url = SHAMROCK_ADDRESS_SEARCH_URL . urlencode($search_string);

            // Make the request
            $response = wp_remote_get($api_url, [
                'headers' => [
                    'x-api-key' => SHAMROCK_QWKEY // Replace with actual key
                ]
            ]);

            if (is_wp_error($response)) {
                return new WP_Error('api_error', 'Failed to fetch API', ['status' => 500]);
            }

            $body = wp_remote_retrieve_body($response);
            $data = json_decode($body, true);

            return $data ?: ['raw' => $body];
        }
    ]);
});


// get flight search request 
add_action('rest_api_init', function () {
    register_rest_route('quote/v1', '/flight', [
        'methods' => 'GET',
        'permission_callback' => '__return_true',
        'callback' => function (WP_REST_Request $request) {
            $date = sanitize_text_field($request->get_param('date'));
            $flight_no = sanitize_text_field($request->get_param('flight_no'));
            $exact_match = sanitize_text_field($request->get_param('exact_match')) ?: 'true';

            if (empty($date) || empty($flight_no)) {
                return wp_send_json_error(['message' => 'date and flight_no are required'], 400);
            }

            $api_url = SHAMROCK_FLIGHT_SEARCH_URL . "?date={$date}&exact_match={$exact_match}&flight_no={$flight_no}";

            $response = wp_remote_get($api_url, [
                'headers' => [
                    'x-api-key' => SHAMROCK_QWKEY
                ],
                'timeout' => 15
            ]);

            if (is_wp_error($response)) {
                return wp_send_json_error(['message' => $response->get_error_message()], 500);
            }

            $body = wp_remote_retrieve_body($response);
            $data = json_decode($body, true);

            return wp_send_json($data ?: ['raw' => $body], 200);
        }
    ]);
});


// get courier catalogue request 
add_action('rest_api_init', function () {
    register_rest_route('quote/v1', '/courier-service', [
        'methods' => 'POST',
        'permission_callback' => '__return_true', // Required
        'callback' => function (WP_REST_Request $request) {
            $payload = $request->get_json_params();

            if (empty($payload)) {
                return wp_send_json_error(['message' => 'Payload is required'], 400);
            }

            $api_url = SHAMROCK_PRODUCT_CATALOGUE_SERVICE_COURIER;

            $response = wp_remote_post($api_url, [
                'headers' => [
                    'x-api-key' => SHAMROCK_QWKEY,
                    'Content-Type' => 'application/json'
                ],
                'body' => wp_json_encode($payload),
                'timeout' => 15
            ]);

            if (is_wp_error($response)) {
                return wp_send_json_error(['message' => $response->get_error_message()], 500);
            }

            $body = wp_remote_retrieve_body($response);
            $data = json_decode($body, true);

            return wp_send_json($data ?: ['raw' => $body], 200);
        }
    ]);
});


// refined to get full address inc location
add_action('rest_api_init', function() {
    register_rest_route('quote/v1', '/refine', [
        'methods' => 'POST',
        'permission_callback' => '__return_true',
        'callback' => function (WP_REST_Request $request) {
            $payload = $request->get_json_params();

            if (empty($payload)) {
                return wp_send_json_error(['message' => 'Payload is required'], 400);
            }

            $api_url = SHAMROCK_ADDRESS_SEARCH_URL_REFINED;

            $response = wp_remote_post($api_url, [
                'headers' => [
                    'x-api-key' => SHAMROCK_QWKEY,
                    'Content-Type' => 'application/json'
                ],
                'body' => wp_json_encode($payload),
                'timeout' => 15
            ]);

            if (is_wp_error($response)) {
                return wp_send_json_error(['message' => $response->get_error_message()], 500);
            }

            $body = wp_remote_retrieve_body($response);
            $data = json_decode($body, true);

            return wp_send_json($data ?: ['raw' => $body], 200);

        }

    ]);
});


// get price request 
add_action('rest_api_init', function () {
    register_rest_route('quote/v1', '/price', [
        'methods'  => 'POST',
        'permission_callback' => '__return_true', // REQUIRED
        'callback' => function (WP_REST_Request $request) {

            // Get full JSON payload from JS
            $payload = $request->get_json_params();

            if (empty($payload)) {
                return new WP_Error('missing_payload', 'Payload is required', ['status' => 400]);
            }

            // External API URL
            $api_url = SHAMROCK_PRODUCT_CATALOGUE_SERVICE;

            // Forward entire payload to external API
            $response = wp_remote_post($api_url, [
                'headers' => [
                    'x-api-key' => SHAMROCK_QWKEY,
                    'Content-Type'  => 'application/json'
                ],
                'body' => wp_json_encode($payload)
            ]);

            if (is_wp_error($response)) {
                return new WP_Error('api_error', 'Failed to fetch API', ['status' => 500]);
            }

            $body = wp_remote_retrieve_body($response);
            $data = json_decode($body, true);

            // Return full API response or raw body if decoding fails
            return $data ?: ['raw' => $body];
        }
    ]);
});