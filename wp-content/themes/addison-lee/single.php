<?php
/**
 * Template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

get_header();

get_template_part( 'template-parts/content/content', get_post_type() );

get_template_part( 'template-parts/parts/related-posts' );

get_footer();
