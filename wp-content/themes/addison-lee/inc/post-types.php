<?php
/**
 * Custom post type functions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

/**
 * Post types function.
 */
function addisonlee_custom_post_type() {

	// // Add lib (deprecated, all under default posts now).
	// $addlib_labels = array(
	// 	'name'           => _x( 'Add Lib', 'Post Type General Name', 'addisonlee' ),
	// 	'singular_name'  => _x( 'Add Lib', 'Post Type Singular Name', 'addisonlee' ),
	// 	'menu_name'      => __( 'Add Lib', 'addisonlee' ),
	// 	'name_admin_bar' => __( 'Add Lib', 'addisonlee' ),
	// 	'add_new'        => __( 'Add New Add Lib', 'addisonlee' ),
	// 	'view_item'      => __( 'View Add Lib', 'addisonlee' ),
	// 	'view_items'     => __( 'View Add Lib', 'addisonlee' ),
	// 	'all_items'      => __( 'All Add Lib', 'addisonlee' ),
	// );
	// $addlib_args   = array(
	// 	'label'               => __( 'Add Lib', 'addisonlee' ),
	// 	'description'         => __( 'Add Lib', 'addisonlee' ),
	// 	'labels'              => $addlib_labels,
	// 	'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	// 	'taxonomies'          => array( 'addlib_category' ),
	// 	'hierarchical'        => true,
	// 	'public'              => true,
	// 	'show_ui'             => true,
	// 	'show_in_menu'        => true,
	// 	'menu_position'       => 20,
	// 	'menu_icon'           => 'dashicons-admin-generic',
	// 	'show_in_admin_bar'   => true,
	// 	'show_in_nav_menus'   => true,
	// 	'can_export'          => true,
	// 	'has_archive'         => true,
	// 	'exclude_from_search' => true,
	// 	'publicly_queryable'  => true,
	// 	'capability_type'     => 'post',
	// 	'show_in_rest'        => true,
	// );
	// register_post_type( 'addlib', $addlib_args );


	// Resources.
	$resources_labels = array(
		'name'           => _x( 'Resources', 'Post Type General Name', 'addisonlee' ),
		'singular_name'  => _x( 'Resource', 'Post Type Singular Name', 'addisonlee' ),
		'menu_name'      => __( 'Resources', 'addisonlee' ),
		'name_admin_bar' => __( 'Resources', 'addisonlee' ),
		'add_new'        => __( 'Add New Resource', 'addisonlee' ),
		'view_item'      => __( 'View Resource', 'addisonlee' ),
		'view_items'     => __( 'View Resources', 'addisonlee' ),
		'all_items'      => __( 'All Resources', 'addisonlee' ),
	);
	$resources_args   = array(
		'label'               => __( 'Resources', 'addisonlee' ),
		'description'         => __( 'Resources', 'addisonlee' ),
		'labels'              => $resources_labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		'taxonomies'          => array( 'resource_category' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-admin-generic',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'resources', 'with_front' => false ),
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
	);
	register_post_type( 'resources', $resources_args );

	// Accreditations.
	$accreditations_labels = array(
		'name'           => _x( 'Accreditations', 'Post Type General Name', 'addisonlee' ),
		'singular_name'  => _x( 'Accreditation', 'Post Type Singular Name', 'addisonlee' ),
		'menu_name'      => __( 'Accreditations', 'addisonlee' ),
		'name_admin_bar' => __( 'Accreditations', 'addisonlee' ),
		'add_new'        => __( 'Add New Accreditation', 'addisonlee' ),
		'view_item'      => __( 'View Accreditation', 'addisonlee' ),
		'view_items'     => __( 'View Accreditations', 'addisonlee' ),
		'all_items'      => __( 'All Accreditations', 'addisonlee' ),
	);
	$accreditations_args   = array(
		'label'               => __( 'Accreditations', 'addisonlee' ),
		'description'         => __( 'Accreditations', 'addisonlee' ),
		'labels'              => $accreditations_labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-star-filled',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => false,
	);
	register_post_type( 'accreditations', $accreditations_args );

	// Register FAQs custom post type.
	$faqs_labels = array(
		'name'           => _x( 'FAQs', 'Post Type General Name', 'addisonlee' ),
		'singular_name'  => _x( 'FAQ', 'Post Type Singular Name', 'addisonlee' ),
		'menu_name'      => __( 'FAQs', 'addisonlee' ),
		'name_admin_bar' => __( 'FAQs', 'addisonlee' ),
		'add_new'        => __( 'Add New FAQ', 'addisonlee' ),
		'view_item'      => __( 'View FAQ', 'addisonlee' ),
		'view_items'     => __( 'View FAQs', 'addisonlee' ),
		'all_items'      => __( 'All FAQs', 'addisonlee' ),
	);
	$faqs_args   = array(
		'label'               => __( 'FAQs', 'addisonlee' ),
		'description'         => __( 'FAQs', 'addisonlee' ),
		'labels'              => $faqs_labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-editor-help',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => false,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => false,
	);
	register_post_type( 'faqs', $faqs_args );

	// Register Vouchers Categories taxonomy

	/*$vouchers_labels = array(
		'name'           => _x( 'Vouchers', 'Post Type General Name', 'addisonlee' ),
		'singular_name'  => _x( 'Voucher', 'Post Type Singular Name', 'addisonlee' ),
		'menu_name'      => __( 'Vouchers', 'addisonlee' ),
		'name_admin_bar' => __( 'Vouchers', 'addisonlee' ),
		'add_new'        => __( 'Add New ', 'addisonlee' ),
		'view_item'      => __( 'View Voucher', 'addisonlee' ),
		'view_items'     => __( 'View Vouchers', 'addisonlee' ),
		'all_items'      => __( 'All Vouchers', 'addisonlee' ),

	);

	$vouchers_args = array(
		'label'               => __( 'Vouchers', 'addisonlee' ),
		'description'         => __( 'Vouchers', 'addisonlee' ),
		'labels'              => $vouchers_labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		'taxonomies'          => array( 'clublee-tier' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-admin-generic',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'supports'          => array( 'title', 'editor', 'thumbnail', 'author' ),
		'has_archive'         => true,
		'rewrite'           => array( 'slug' => 'clublee/vouchers', 'with_front' => false ),
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
	);

	register_post_type('vouchers', $vouchers_args );
	
	*/
	// Register FAQ Categories taxonomy.
	$faq_category_labels = array(
		'name'              => _x( 'FAQ Categories', 'taxonomy general name', 'addisonlee' ),
		'singular_name'     => _x( 'FAQ Category', 'taxonomy singular name', 'addisonlee' ),
		'search_items'      => __( 'Search FAQ Categories', 'addisonlee' ),
		'all_items'         => __( 'All FAQ Categories', 'addisonlee' ),
		'parent_item'       => __( 'Parent Category', 'addisonlee' ),
		'parent_item_colon' => __( 'Parent Category:', 'addisonlee' ),
		'edit_item'         => __( 'Edit FAQ Category', 'addisonlee' ),
		'update_item'       => __( 'Update FAQ Category', 'addisonlee' ),
		'add_new_item'      => __( 'Add New FAQ Category', 'addisonlee' ),
		'new_item_name'     => __( 'New FAQ Category Name', 'addisonlee' ),
		'menu_name'         => __( 'FAQ Categories', 'addisonlee' ),
	);
	$faq_category_args   = array(
		'hierarchical'      => true,
		'labels'            => $faq_category_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'show_in_rest'      => true,
		'rewrite'           => array( 'slug' => 'faq-category' ),
	);
	register_taxonomy( 'faq_category', array( 'faqs' ), $faq_category_args );

	// Register Resource Categories taxonomy.
	$resource_category_labels = array(
		'name'              => _x( 'Resource Categories', 'taxonomy general name', 'addisonlee' ),
		'singular_name'     => _x( 'Resource Category', 'taxonomy singular name', 'addisonlee' ),
		'search_items'      => __( 'Search Resource Categories', 'addisonlee' ),
		'all_items'         => __( 'All Resource Categories', 'addisonlee' ),
		'parent_item'       => __( 'Parent Category', 'addisonlee' ),
		'parent_item_colon' => __( 'Parent Category:', 'addisonlee' ),
		'edit_item'         => __( 'Edit Resource Category', 'addisonlee' ),
		'update_item'       => __( 'Update Resource Category', 'addisonlee' ),
		'add_new_item'      => __( 'Add New Resource Category', 'addisonlee' ),
		'new_item_name'     => __( 'New Resource Category Name', 'addisonlee' ),
		'menu_name'         => __( 'Resource Categories', 'addisonlee' ),
	);
	$resource_category_args   = array(
		'hierarchical'      => true,
		'labels'            => $resource_category_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'show_in_rest'      => true,
		'rewrite'           => array( 'slug' => 'resource-category' ),
	);
	register_taxonomy( 'resource_category', array( 'resources' ), $resource_category_args );

	// Register Clublee Tiers Categories taxonomy
	/*$clublee_category_labels = array(
		'name'              => _x( 'Clublee Tiers', 'taxonomy general name', 'addisonlee' ),
		'singular_name'     => _x( 'Clublee Tiers', 'taxonomy singular name', 'addisonlee' ),
		'search_items'      => __( 'Search Clublee Categories', 'addisonlee' ),
		'all_items'         => __( 'All Clublee Categories', 'addisonlee' ),
		'parent_item'       => __( 'Parent Category', 'addisonlee' ),
		'parent_item_colon' => __( 'Parent Category:', 'addisonlee' ),
		'edit_item'         => __( 'Edit Clublee Category', 'addisonlee' ),
		'update_item'       => __( 'Update Clublee Category', 'addisonlee' ),
		'add_new_item'      => __( 'Add New Clublee Category', 'addisonlee' ),
		'new_item_name'     => __( 'New Clublee Category Name', 'addisonlee' ),
		'menu_name'         => __( 'Clublee Tiers', 'addisonlee' ),
	);
	$clublee_category_args   = array(
		'hierarchical'      => true,
		'labels'            => $clublee_category_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'show_in_rest'      => true,
		'rewrite'           => array( 'slug' => 'clublee/vouchers' ),
	);
	register_taxonomy( 'vouchers', array( 'vouchers' ), $clublee_category_args );
	*/

}
add_action( 'init', 'addisonlee_custom_post_type', 0 );
