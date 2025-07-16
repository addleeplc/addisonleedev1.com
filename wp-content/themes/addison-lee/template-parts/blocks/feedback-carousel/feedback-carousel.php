<?php
/**
 * Feedback Carousel.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading = get_field( 'heading' );
$cards   = get_field( 'cards' );

// Block ID.
$block_id = 'feedback-carousel';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'feedback-carousel';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-px-4 mk-py-10 md:mk-py-28" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto mk-pb-10 md:mk-pb-16 mk-border-b mk-border-secondary-grey">
		<?php if ( $heading ) { ?>
			<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-text-white mk-uppercase mk-text-center mk-mb-10 md:mk-mb-16"><?php echo esc_html( $heading ); ?></h2>
		<?php } ?>
		<?php if ( $cards ) { ?>
			<div class="feedback-slider">
				<div class="glide__track" data-glide-el="track">
					<ul class="glide__slides mk-flex mk-items-center">
						<?php
						foreach ( $cards as $card ) {
							$card_title = $card['title'];
							$text       = $card['text'];
							?>
							<li class="glide__slide">
								<div class="mk-h-full mk-bg-slate-grey mk-p-8 mk-rounded-sm">
									<p class="mk-text-xl md:mk-text-2xl mk-font-medium mk-text-white mk-mb-5"><?php echo esc_html( $card_title ); ?></p>
									<div class="mk-prose mk-prose-light-grey mk-text-lg">
										<?php echo wp_kses_post( $text ); ?>
									</div>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>
				<?php if ( count( $cards ) > 3 ) { ?>
					<div class="slider-controls mk-flex mk-justify-center mk-gap-2 mk-mt-8 md:mk-mt-12" data-glide-el="controls" data-glide-length="<?= count( $cards ); ?>">
						<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-yellow' ), allowed_svg_tags() ); ?></div>
						<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-yellow' ), allowed_svg_tags() ); ?></div>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</div>
