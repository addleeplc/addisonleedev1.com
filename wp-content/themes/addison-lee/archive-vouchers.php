<?php 

/**
 * Vouchers Archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */ 


get_header();

$items = new WP_Query(
	array(
		'post_type' => 'vouchers',
		'post_status' => 'publish',
		'posts_per_page' => -1,

	)
	
);

while($items->have_posts() ) : $items->the_post();
?>
	<h1 style="color: #fff"><a href="<?php echo the_permalink();?>"><?php echo the_title(); ?></a></h1>;

<?php
endwhile;
?>