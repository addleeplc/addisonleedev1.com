<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

get_header();

get_template_part( 'template-parts/content/content', 'page' );

get_footer();
