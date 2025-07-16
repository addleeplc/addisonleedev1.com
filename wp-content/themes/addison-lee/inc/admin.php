<?php
/**
 * Admin functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

/** Remove items from admin bar. */
function mollies_remove_admin_bar() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu( 'new-content' );
	$wp_admin_bar->remove_node( 'customize' );
	$wp_admin_bar->remove_node( 'updates' );
	$wp_admin_bar->remove_node( 'comments' );
	$wp_admin_bar->remove_node( 'wpseo-menu' );
}
add_action( 'wp_before_admin_bar_render', 'mollies_remove_admin_bar' );
