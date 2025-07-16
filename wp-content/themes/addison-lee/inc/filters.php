<?php
/**
 * Blog Post Listings filter functions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

/**
 * Fetch blog posts.
 */
function fetch_posts() {
	check_ajax_referer( 'fetch_posts_nonce', 'security' );
	$post_type = isset( $_POST['post_type'] ) ? sanitize_text_field( wp_unslash( $_POST['post_type'] ) ) : '';
	$filter    = isset( $_POST['filter'] ) ? sanitize_text_field( wp_unslash( $_POST['filter'] ) ) : '';
	$sort      = isset( $_POST['sort'] ) ? sanitize_text_field( wp_unslash( $_POST['sort'] ) ) : '';
	$search    = isset( $_POST['search'] ) ? sanitize_text_field( wp_unslash( $_POST['search'] ) ) : '';
	$page      = isset( $_POST['page'] ) ? intval( $_POST['page'] ) : '';

	// Get posts.
	$args = array(
		'post_type'      => $post_type,
		'posts_per_page' => 9,
		'paged'          => $page,
		'orderby'        => 'date',
		'order'          => 'DESC',
		'post_status'    => 'publish',
	);

	// Category filter.
	if ( 'all' !== $filter ) {
		if ( 'resources' === $post_type ) {
			// For resources, filter by the resource_category taxonomy
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'resource_category',
					'field'    => 'ID', // Use 'term_id' if $filter is the term ID
					'terms'    => $filter,
				),
			);
		} elseif ( 'post' === $post_type ) {
			// For posts, filter by the category taxonomy
			$args['cat'] = $filter; // Assumes $filter is a category ID
		}
	}

	// Sort filter.
	switch ( $sort ) {
		case 'date_asc':
			$args['orderby'] = 'date';
			$args['order']   = 'ASC';
			break;
		case 'date_desc':
			$args['orderby'] = 'date';
			$args['order']   = 'DESC';
			break;
		case 'title_asc':
			$args['orderby'] = 'title';
			$args['order']   = 'ASC';
			break;
		case 'title_desc':
			$args['orderby'] = 'title';
			$args['order']   = 'DESC';
			break;
		default:
			$args['orderby'] = 'date';
			$args['order']   = 'DESC';
			break;
	}

	// Search query.
	if ( $search ) {
		$args['s'] = $search;
	}

	// Get posts.
	$query      = new WP_Query( $args );
	$cards      = '';
	$post_count = 0;
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			++$post_count;
			ob_start();
			get_template_part( 'template-parts/cards/card', $post_type );
			$cards .= ob_get_clean();

			if ( 3 === $post_count && 1 === $page ) {
				// Insert the additional template after the third post.
				ob_start();
				get_template_part( 'template-parts/parts/highlights', $post_type );
				$cards .= ob_get_clean();
			}
		}
		wp_reset_postdata();
	}

	$response = array(
		'cards'       => $cards,
		'total_posts' => $query->found_posts,
		'has_more'    => $query->max_num_pages > $page,
	);

	wp_send_json( $response );
}
add_action( 'wp_ajax_fetch_posts', 'fetch_posts' );
add_action( 'wp_ajax_nopriv_fetch_posts', 'fetch_posts' );
