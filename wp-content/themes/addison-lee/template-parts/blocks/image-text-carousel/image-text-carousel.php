<?php
/**
 * Image / Text Carousel.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading          = get_field( 'heading' );
$carousel         = get_field( 'carousel' );
$gallery_position = get_field( 'gallery_position' );

// Image position changes.
if ( 'mk-order-2' === $gallery_position ) {
	$image_margin         = 'md:mk-ml-auto';
	$content_padding      = 'md:mk-pl-0';
	$content_wrap_padding = 'md:mk-pr-6';
	$indicators_padding   = 'md:mk-flex-row-reverse';
	$subheading_position  = 'mk-text-left';
} else {
	$image_margin         = 'md:mk-mr-auto';
	$content_padding      = 'md:mk-pl-28';
	$content_wrap_padding = 'md:mk-pl-6';
	$indicators_padding   = '';
	$subheading_position  = 'md:mk-text-right';
}

// Block ID.
$block_id = 'image-text-carousel';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'image-text-carousel';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}

if ( $carousel ) { ?>
<div class="<?php echo esc_html( $class_name ); ?> mk-w-full mk-px-4 mk-py-12 md:mk-py-28" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-h-full mk-mx-auto md:mk-flex mk-items-stretch">
		<div class="md:mk-w-5/12 mk-mb-11 md:mk-mb-0 <?php echo esc_html( $gallery_position ); ?>">
			<div class="image-carousel md:mk-max-w-image mk-h-image-1sm md:mk-h-image-lg <?php echo esc_html( $image_margin ); ?>">
				<div class="glide__track mk-h-full" data-glide-el="track">
					<ul class="glide__slides mk-h-full">
						<?php
						foreach ( $carousel as $slide ) {
							$image			 = $slide['image'];
							$prevent_cropped = $slide['prevent_image_cropping'];
							?>
							<li class="glide__slide">
								<img class="mk-w-full mk-h-full
									<?= $prevent_cropped ? 'mk-object-contain' : 'mk-object-cover'; ?>" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div> 
		<div class="md:mk-w-7/12">
			<div class="mk-h-full <?php echo esc_html( $content_wrap_padding ); ?>">
				<div class="text-carousel mk-h-full mk-flex mk-flex-col mk-justify-between">
					<h3 class="mk-text-xxxs-title md:mk-text-xs-title mk-font-medium mk-text-white mk-uppercase mk-mb-6 md:mk-mb-0 <?php echo esc_html( $subheading_position ); ?>"><?php echo esc_html( $heading ); ?></h3>
					<div class="glide__track <?php echo esc_html( $content_padding ); ?>" data-glide-el="track">
						<ul class="glide__slides">
							<?php
							foreach ( $carousel as $slide ) {
								$heading_white  = $slide['heading_white'];
								$heading_yellow = $slide['heading_yellow'];
								$text           = $slide['text'];
								?>
								<li class="glide__slide">
									<div class="text-carousel-content mk-flex mk-flex-col mk-justify-center">
										<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-mb-4">
											<span class="mk-block mk-text-white"><?php echo esc_html( $heading_white ); ?></span>
											<span class="mk-block mk-text-yellow md:mk-pl-18"><?php echo esc_html( $heading_yellow ); ?></span>
										</h2>
										<div class="!mk-max-w-image mk-prose mk-prose-light-grey mk-text-lg md:mk-pl-18">
											<?php echo wp_kses_post( $text ); ?>
										</div>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="mk-flex mk-justify-between mk-items-center mk-mt-8 <?php echo esc_html( $indicators_padding ); ?>">
						<div class="mk-text-lg mk-font-medium mk-text-yellow">
							<span class="slide-num">1</span>
							<span>/ <?php echo count( $carousel ); ?></span>
						</div>
						<div class="slider-controls mk-flex mk-gap-2" data-glide-el="controls" data-glide-length="<?= count( $carousel ); ?>">
							<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-yellow' ), allowed_svg_tags() ); ?></div>
							<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-yellow' ), allowed_svg_tags() ); ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
