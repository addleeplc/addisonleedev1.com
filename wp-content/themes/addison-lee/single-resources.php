<?php
/**
 * Template for displaying Resources custom posts type.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

get_header();

get_template_part( 'template-parts/content/content', 'resources' );

get_template_part( 'template-parts/parts/middle-resources' );

get_template_part( 'template-parts/parts/related-resources' );
?>


<?php
get_footer();
