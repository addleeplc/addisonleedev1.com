<?php
/**
 * Key Points Numbered.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading    = get_field( 'heading' );
$key_points = get_field( 'key_points' );

// Block ID.
$block_id = 'key-points-numbered';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'key-points-numbered';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-bg-white mk-px-4 mk-py-10 md:mk-py-20" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto">
		<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-mb-14 mk-text-center"><?php echo esc_html( $heading ); ?></h2>
		<?php if ( $key_points ) { ?>
			<div class="mk-hidden sm:mk-grid sm:mk-grid-cols-2 lg:mk-grid-cols-3 mk-gap-4 sm:mk-gap-y-6">
				<?php
				$c = 0;
				foreach ( $key_points as $point ) {
					++$c;
					$point_title = $point['title'];
					$text        = $point['text'];
					?>
					<div class="mk-bg-third-grey mk-px-6 mk-py-8 mk-rounded-sm mk-mb-4">
						<div class="mk-text-2xl mk-font-medium mk-mb-2"><?php echo esc_html( $c ); ?></div>
						<h3 class="mk-text-2xl mk-font-medium mk-mb-4"><?php echo esc_html( $point_title ); ?></h3>
						<div class="mk-prose mk-prose-grey mk-text-lg">
							<?php echo wp_kses_post( $text ); ?>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="key-points-container sm:mk-hidden">
				<div class="glide__track" data-glide-el="track">
					<ul class="glide__slides mk-items-stretch">
						<?php
						// Mobile.
						$cm = 0;
						foreach ( $key_points as $point ) {
							++$cm;
							$point_title = $point['title'];
							$text        = $point['text'];
							?>
							<li class="glide__slide">
							<div class="mk-h-full mk-bg-third-grey mk-px-6 mk-py-8 mk-rounded-sm">
								<div class="mk-text-xl mk-font-medium mk-mb-2"><?php echo esc_html( $cm ); ?></div>
								<h3 class="mk-text-xl mk-font-medium mk-mb-4"><?php echo esc_html( $point_title ); ?></h3>
								<div class="mk-prose mk-prose-grey mk-text-lg">
									<?php echo wp_kses_post( $text ); ?>
								</div>
							</div>
							</li>
						<?php } ?>
					</ul>
				</div>
				<div class="mk-flex mk-justify-between mk-items-center mk-mt-8">
					<div class="mk-text-lg mk-font-medium">
						<span class="slide-num">1</span>
						<span>/<?php echo count( $key_points ); ?></span>
					</div>
					<div class="slider-controls mk-flex mk-justify-center mk-gap-2" data-glide-el="controls">
						<div class="slider-arrow slider-prev mk-opacity-35 mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-md' ), allowed_svg_tags() ); ?></div>
						<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-md' ), allowed_svg_tags() ); ?></div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
