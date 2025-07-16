<?php
/**
 * Blog highlights carousel.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$resource_highlights = get_field( 'resource_highlights', 'options' );

if ( $resource_highlights ) {
	?>

<div class="blog-highlights-carousel lg:mk-col-span-3 mk-w-full lg:mk-flex mk-items-stretch md:mk-flex-row-reverse">
	<div class="lg:mk-w-1/2">
		<div class="image-carousel">
			<div class="glide__track mk-h-full" data-glide-el="track">
				<ul class="glide__slides mk-h-full">
					<?php
					foreach ( $resource_highlights as $slide ) {
						$image = get_the_post_thumbnail_url( $slide->ID );
						?>
						<li class="glide__slide">
							<img class="mk-w-full mk-h-image-1sm lg:mk-h-536 mk-object-cover" src="<?php echo esc_html( $image ); ?>" alt="">
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div> 
	<div class="lg:mk-w-1/2 mk-bg-third-grey mk-px-4 mk-overflow-hidden">
		<div class="mk-h-full md:mk-max-w-[392px] mk-mx-auto mk-py-8 mk-flex mk-items-center">
			<div class="text-carousel fade-slider mk-w-full md:mk-flex mk-flex-col mk-justify-center">
				<div class="glide__track" data-glide-el="track">
					<ul class="glide__slides">
						<?php
						foreach ( $resource_highlights as $slide ) {
							$post_title = get_the_title( $slide->ID );
							$excerpt    = wp_trim_words(get_the_excerpt( $slide->ID ), 25);
							$cta        = get_the_permalink( $slide->ID );
							$categories = get_the_terms( $slide->ID, 'resource_category' );
							?>
							<li class="glide__slide">
								<div class="text-carousel-content mk-h-full mk-flex mk-flex-col md:mk-justify-end">
									<?php if ( $categories ) { ?>
										<div class="mk-text-lg mk-flex mk-items-center mk-gap-2 mk-mt-1 mk-text-xxxxxs-title mk-text-black/64 mk-mb-4">
											<?php foreach ( $categories as $category ) { ?>
												<div class="mk-uppercase"><?php echo esc_html( $category->name ); ?></div>
												<span class="last:mk-hidden">|</span>
											<?php } ?>
										</div>
									<?php } ?>
									<h2 class="mk-text-1sm-title mk-font-medium mk-uppercase mk-mb-4"><?php echo esc_html( $post_title ); ?></h2>
									<p class="mk-text-lg mk-text-black/64 mk-leading-tight"><?php echo esc_html( $excerpt ); ?></p>
									<?php if ( $cta ) { ?>
										<div class="mk-mt-9">
											<a class="btn btn-black" href="<?php echo esc_html( $cta ); ?>">Find Out More<?php echo wp_kses( addisonlee_svgs( 'arrow-right-white' ), allowed_svg_tags() ); ?></a>
										</div>
									<?php } ?>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>
				<div class="mk-hidden md:mk-flex mk-justify-between mk-items-center mk-mt-8">
					<div class="slider-controls mk-flex mk-gap-2" data-glide-el="controls" data-glide-length="<?php echo count( $resource_highlights ); ?>">
						<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-md' ), allowed_svg_tags() ); ?></div>
						<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-md' ), allowed_svg_tags() ); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="mk-flex md:mk-hidden mk-justify-between mk-items-center mk-mt-4">
		<div class="mk-text-lg mk-font-medium ">
			<span class="slide-num">1</span>
			<span>/<?php echo count( $resource_highlights ); ?></span>
		</div>
		<div class="slider-controls mk-flex mk-gap-2" data-glide-el="controls">
			<div id="blog-prev" class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-md' ), allowed_svg_tags() ); ?></div>
			<div id="blog-next" class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-md' ), allowed_svg_tags() ); ?></div>
		</div>
	</div>
</div>

	<?php
}
