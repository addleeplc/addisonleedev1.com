<?php
/**
 * Related Resources.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

// Fetch latest 6 posts.
$related = get_posts(
	array(
		'numberposts' => 6,
		'post_status' => 'publish',
		'post_type'   => 'resources',
	)
);
?>

<div class="related-posts-section mk-w-full mk-bg-white mk-px-4 mk-py-12 md:mk-py-28 mk-overflow-hidden">
	<div class="related-posts mk-w-full mk-max-w-site mk-h-full mk-mx-auto">
		<div class="mk-flex mk-justify-between mk-items-center mk-mb-8 md:mk-mb-10">
			<h2 class="mk-text-1sm-title mk-font-medium mk-uppercase">Related resources</h2>
			<div class="slider-controls mk-hidden md:mk-flex mk-justify-end mk-gap-2" data-glide-el="controls">
				<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-md' ), allowed_svg_tags() ); ?></div>
				<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-md' ), allowed_svg_tags() ); ?></div>
			</div>
		</div>
		<div class="glide__track !mk-overflow-visible" data-glide-el="track">
			<ul class="glide__slides !mk-flex">
				<?php
				if ( ! empty( $related ) ) :
					foreach ( $related as $post ) :
						?>
						<li class="glide__slide !mk-h-auto">
							<?php get_template_part( 'template-parts/cards/card', 'resources' ); ?>
						</li>
						<?php
					endforeach;
				endif;
				?>
			</ul>
		</div>
		<div class="slider-controls mk-flex md:mk-hidden mk-justify-center mk-gap-2 mk-mt-8" data-glide-el="controls">
			<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-md' ), allowed_svg_tags() ); ?></div>
			<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-md' ), allowed_svg_tags() ); ?></div>
		</div>
	</div>
</div>

<style>
	.related-posts-section .blog-card{
		height: 100%;
	}
</style>