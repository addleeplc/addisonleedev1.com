<?php
/**
 * The template for displaying all post archives
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

get_header();

while ( have_posts() ) :
	the_post();
	echo esc_html( get_post_type() );
	get_template_part( 'template-parts/archive/archive', get_post_type() );

endwhile;

get_footer();
