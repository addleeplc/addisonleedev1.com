<?php
/**
 * Key Points Section.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$large_heading   = get_field( 'large_heading' );
$section_heading = get_field( 'heading' );
$key_points      = get_field( 'key_points' );
$cta             = get_field( 'cta' );
$bottom_padding  = get_field( 'remove_bottom_padding' );

if ( $bottom_padding ) {
	$padding = 'mk-pt-10 md:mk-pt-28';
} else {
	$padding = 'mk-py-10 md:mk-py-28';
}
// Block ID.
$block_id = 'key-points-section';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'key-points-section';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-px-4 <?php echo esc_html( $padding ); ?>" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto">
		<?php if ( $large_heading ) { ?>
			<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-text-white mk-uppercase mk-mb-16"><?php echo esc_html( $large_heading ); ?></h2>
		<?php } ?>
		<div class="mk-border-t mk-border-secondary-grey">
			<?php if ( $section_heading ) { ?>
				<h3 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-text-yellow mk-uppercase mk-mt-16"><?php echo esc_html( $section_heading ); ?></h3>
			<?php } ?>
			<?php if ( $key_points ) { ?>
				<div class="mk-pt-12 md:mk-pt-16">
					<div class="mk-hidden sm:mk-grid mk-grid-cols-2 lg:mk-grid-cols-3 mk-gap-12 sm:mk-gap-y-20">
						<?php
						// Desktop.
						foreach ( $key_points as $point ) {
							$icon        = $point['icon'];
							$point_title = $point['title'];
							$text        = $point['text'];
							?>
							<div class="mk-flex mk-items-center mk-gap-3">
								<?php if ( $icon ) { ?>
									<img class="mk-w-auto mk-h-12" src="<?php echo esc_html( $icon['url'] ); ?>" alt="<?php echo esc_html( $icon['alt'] ); ?>">
								<?php } ?>
								<div>
									<h4 class="mk-text-lg mk-font-medium mk-text-white mk-uppercase mk-mb-2 mk-title-link"><?php echo strip_tags($point_title, '<a>'); ?></h4>
									<div class="mk-prose mk-prose-light-grey mk-text-lg">
										<?php echo wp_kses_post( $text ); ?>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="mobile-view-slider sm:mk-hidden">
						<div class="glide__track" data-glide-el="track">
							<ul class="glide__slides mk-flex mk-items-center">
								<?php
								// Mobile.
								foreach ( $key_points as $point ) {
									$icon = $point['icon'];
									$text = $point['text'];
									$title = $point['title'];
									?>
									<li class="glide__slide">
										<div class="mk-flex mk-items-center mk-gap-3">
											<?php if ( $icon ) { ?>
												<img class="mk-w-auto mk-h-12" src="<?php echo esc_html( $icon['url'] ); ?>" alt="<?php echo esc_html( $icon['alt'] ); ?>">
											<?php } ?>
											<div>
												<h3 class="mk-text-lg mk-font-medium mk-text-white mk-uppercase mk-mb-2"><?php echo strip_tags( $title, '<a>' ); ?></h3>
												<div class="mk-prose mk-prose-light-grey mk-text-lg">
													<?php echo wp_kses_post( $text ); ?>
												</div>
											</div>
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
			<?php } ?>
		</div>
	</div>
</div>
