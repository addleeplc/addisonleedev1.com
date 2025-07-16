<?php
/**
 * Image Text Carousel with Tabs.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white    = get_field( 'heading_white' );
$heading_yellow   = get_field( 'heading_yellow' );
$carousel         = get_field( 'carousel' );
$gallery_position = get_field( 'gallery_position' );

// Block ID.
$block_id = 'carousel-tabs-over-image';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'carousel-tabs-over-image';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}

if ( $carousel ) { ?>
<div class="<?php echo esc_html( $class_name ); ?> mk-w-full mk-px-4 mk-py-12 md:mk-py-28" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-h-full mk-mx-auto">
		<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-mb-14 md:mk-mb-12">
			<span class="mk-block mk-text-white"><?php echo esc_html( $heading_white ); ?></span>
			<span class="mk-block mk-text-yellow"><?php echo esc_html( $heading_yellow ); ?></span>
		</h2>
		<div class="md:mk-border-t md:mk-border-white">
			<div class="carousel-tabs-over-image-carousel md:mk-flex -mk-mx-8 md:mk-pt-12">
				<div class="md:mk-w-1/2 mk-mb-10 md:mk-mb-0 mk-px-8 <?php echo esc_html( $gallery_position ); ?>">
					<div class="image-tabs-carousel fade-slider !mk-h-auto">
						<div class="mk-flex mk-items-center mk-gap-4 mk-mb-6">
							<div class="slider-controls mk-flex" data-glide-length="<?php echo count( $carousel ); ?>" data-glide-el="controls">
								<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-yellow' ), allowed_svg_tags() ); ?></div>
								<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-yellow' ), allowed_svg_tags() ); ?></div>
							</div>
							<div class="mk-overflow-hidden">
								<div class="glide__bullets mk-transition-all mk-duration-300 mk-flex mk-gap-4" data-glide-el="controls[nav]">
									<?php
									$c = 0;
									foreach ( $carousel as $card ) {
										$card_title = $card['title'];
										?>
											<button class="glide__bullet glide-bullet-tab mk-whitespace-nowrap mk-text-xxxxs-title mk-font-medium mk-text-white mk-uppercase mk-p-4 mk-border mk-border-white mk-rounded-sm" data-glide-dir="=<?php echo esc_html( $c ); ?>"><?php echo esc_html( $card_title ); ?></button>
										<?php
										++$c;
									}
									?>
								</div>
							</div>
						</div>
						<div class="glide__track" data-glide-el="track">
							<?php // Image. ?>
							<ul class="glide__slides">
								<?php
								$slide_num = 1;
								foreach ( $carousel as $slide ) {
									$image = $slide['image'];
									?>
									<li class="glide__slide mk-relative">
										<div class="mk-relative mk-h-image-1sm md:mk-h-image-1md">
											<?php if ( $image ) { ?>
												<img class="mk-w-full mk-h-full mk-object-cover mk-z-20" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
											<?php } ?>
											<div class="mk-absolute mk-bottom-6 mk-right-6 mk-z-30 mk-text-lg mk-font-medium mk-text-yellow">
												<span class="slide-num"><?php echo $slide_num; ?></span>
												<span>/ <?php echo count( $carousel ); ?></span>
											</div>
										</div>
									</li>
								<?php ++$slide_num; } ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="md:mk-w-1/2 mk-px-8">
					<div class="text-carousel fade-slider">
						<div class="glide__track" data-glide-el="track">
							<ul class="glide__slides">
								<?php
								foreach ( $carousel as $slide ) {
									$text        = $slide['text'];
									$title       = $slide['title'];
									$cta         = $slide['cta'];
									$add_details = $slide['add_details'];
									$details     = $slide['details'];
									?>
									<li class="glide__slide">
										<div class="text-carousel-content mk-flex mk-flex-col mk-justify-center">
											<h3 class="mk-text-xxxs-title md:mk-text-xxs-title mk-font-medium mk-text-white mk-uppercase mk-mb-6"><?php echo wp_kses_post( $title ); ?></h3>
											<div class="!mk-max-w-image mk-prose mk-prose-light-grey mk-text-lg">
												<?php echo wp_kses_post( $text ); ?>
											</div>
											<?php if ( $add_details && $details ) { ?>
												<div class="mk-mt-8">
													<?php
													foreach ( $details as $detail ) {
														$text         = $detail['text'];
														$detail_title = $detail['title'];
														$icon         = $detail['icon'];
														?>
													<div class="mk-flex mk-gap-2 mk-mb-4 last:mk-mb-0">
														<div class="mk-max-w-6 mk-min-w-6">
															<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
														</div>
														<p class="mk-max-w-20 mk-min-w-20 mk-text-white/64"><?php echo esc_html( $detail_title ); ?></p>
														<p class="mk-text-white/64"><?php echo esc_html( $text ); ?></p>
													</div>
													<?php } ?>
												</div>
											<?php } ?>
											<?php if ( $cta ) { ?>
												<div class="mk-mt-8 md:mk-mt-12">
													<a class="btn" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'arrow-right' ), allowed_svg_tags() ); ?></a>
												</div>
											<?php } ?>
										</div>
									</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
	.glide-bullet-tab.glide__bullet--active {
		background-color: white;
		color: black;
	}
</style>
<?php } ?>
