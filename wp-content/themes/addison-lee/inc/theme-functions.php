<?php
/**
 * Theme functions.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

/**
 * Theme setup.
 */
if ( ! function_exists( 'addisonlee_setup' ) ) :
	/**
	 * Theme setup.
	 */
	function addisonlee_setup() {

		add_theme_support( 'custom-logo' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'main-menu'         => esc_html__( 'Main Menu', 'addisonlee' ),
				'footer-menu-one'   => esc_html__( 'Footer Menu One', 'addisonlee' ),
				'footer-menu-two'   => esc_html__( 'Footer Menu Two', 'addisonlee' ),
				'footer-menu-three' => esc_html__( 'Footer Menu Three', 'addisonlee' ),
				'footer-menu-four'  => esc_html__( 'Footer Menu Four', 'addisonlee' ),
				'footer-menu-five'  => esc_html__( 'Footer Menu Five', 'addisonlee' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'gallery',
				'caption',
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'addisonlee_setup' );

/**
 * Remove comments from admin.
 */
function my_remove_admin_menus() {
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'my_remove_admin_menus' );

/**
 * Remove comment support.
 */
function remove_comment_support() {
	remove_post_type_support( 'post', 'comments' );
	remove_post_type_support( 'page', 'comments' );
}
add_action( 'init', 'remove_comment_support', 100 );

/**
 * Add class option to menu items.
 *
 * @param array $classes menu classes.
 * @param array $item menu items.
 * @param array $args menu arguments.
 */
function add_additional_class_on_li( $classes, $item, $args ) {
	if ( isset( $args->add_li_class ) ) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'add_additional_class_on_li', 1, 3 );

/**
 * Load styles only for rendered blocks in a page.
 */
add_filter( 'should_load_separate_core_block_assets', '__return_true' );
