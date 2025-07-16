<?php
/**
 * Testimonial Carousel.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading       = get_field( 'heading' );
$testimonials  = get_field( 'testimonials' );
$cards         = get_field( 'cards' );
$cards_format  = get_field( 'cards_format' );
$add_separator = get_field( 'add_separator' );

// Block ID.
$block_id = 'testimonial-carousel-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'testimonial-carousel-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_html( $class_name ); ?> mk-w-full  mk-overflow-hidden " id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-h-full mk-mx-auto mk-px-4 mk-py-12 md:mk-py-28 <?php echo $add_separator ? 'mk-border-b mk-border-b-2 mk-border-slate-grey' : ''; ?>">
		<?php if ( $heading ) { ?>
			<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-text-white mk-uppercase mk-text-center"><?php echo esc_html( $heading ); ?></h2>
		<?php } ?>
		<div class="testimonial-carousel mk-mt-8 md:mk-mt-16">
			<div class="glide__track" data-glide-el="track">
				<ul class="glide__slides mk-flex">
					<?php
					foreach ( $testimonials as $testimonial ) {
						$image      = $testimonial['image'];
						$name       = $testimonial['name'];
						$card_title = $testimonial['title'];
						$quote      = $testimonial['quote'];
						?>
						<li class="glide__slide !mk-h-auto">
							<div class="mk-h-full mk-flex mk-flex-col mk-justify-between mk-bg-slate-grey mk-p-8 mk-pb-12 mk-rounded-sm">
								<?php if ( $cards_format === 'format_a' ) { ?>
								<div class="mk-prose mk-prose-light-grey mk-text-lg">
									<?php echo wp_kses_post( $quote ); ?>
								</div>
								<div class="mk-flex mk-items-center mk-gap-4 mk-mt-12">
									<img class="mk-w-16 mk-h-16 mk-rounded-full mk-object-contain" src="<?php echo esc_html( $image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
									<div>
										<h3 class="mk-text-xl md:mk-text-2xl mk-text-white mk-font-medium mk-mb-2"><?php echo esc_html( $name ); ?></h3>
										<p class="mk-text-xxxxxs-title mk-text-white/64 mk-uppercase"><?php echo esc_html( $card_title ); ?></p>
									</div>
								</div>
								<?php } else { ?>
								<div>
									<h3 class="mk-text-xl md:mk-text-2xl mk-text-white mk-font-medium mk-mb-2"><?php echo esc_html( $name ); ?></h3>
									<p class="mk-text-xxxxxs-title mk-text-white/64 mk-uppercase mk-mb-6"><?php echo esc_html( $card_title ); ?></p>
								</div>
								<div class="mk-prose mk-prose-light-grey mk-text-lg">
									<?php echo wp_kses_post( $quote ); ?>
								</div>
								<div class="mk-flex mk-items-center mk-gap-4 mk-mt-12">
									<img class="mk-w-16 mk-h-16 mk-rounded-full mk-object-contain" src="<?php echo esc_html( $image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
								</div>
								<?php } ?>

							</div>
						</li>
					<?php } ?>
				</ul>
			</div>
			<div class="slider-controls mk-flex mk-justify-center mk-gap-2 mk-mt-8" data-glide-el="controls">
				<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-yellow' ), allowed_svg_tags() ); ?></div>
				<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-yellow' ), allowed_svg_tags() ); ?></div>
			</div>
		</div>
	</div>
</div>
