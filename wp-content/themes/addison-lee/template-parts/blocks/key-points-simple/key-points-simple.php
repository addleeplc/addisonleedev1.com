<?php
/**
 * Key Points Simple.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading           = get_field( 'heading' );
$text              = get_field( 'text' );
$text_bottom       = get_field( 'text_bottom' );
$key_points        = get_field( 'key_points' );
$cta               = get_field( 'cta' );
$add_grey_bg       = get_field( 'add_grey_bg' );
$second_text_field = get_field( 'add_second_text_field' );
$rm_top_padding    = get_field( 'remove_top_padding' );

if ( $add_grey_bg ) {
	$card_bg = 'mk-bg-slate-grey mk-px-8 mk-py-6';
	$layout  = 'mk-gap-y-8';
	$font    = 'mk-prose-light-grey';
} else {
	$card_bg = '';
	$layout  = 'mk-gap-y-8 sm:mk-gap-y-16';
	$font    = 'mk-prose-white';
}

// Block ID.
$block_id = 'key-points-simple';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'key-points-simple';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-px-4 mk-py-10 md:mk-py-28 <?= $rm_top_padding ? "md:mk-pt-0" : ""; ?>" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto">
		<?php if ( $heading ) { ?>
			<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-text-white mk-uppercase mk-text-center"><?php echo wp_kses_post( $heading ); ?></h2>
		<?php } ?>
		<?php if ( $text ) { ?>
			<div class="mk-max-w-[800px] mk-mx-auto mk-mt-7">
				<div class="mk-prose mk-prose-light-grey mk-text-lg mk-text-center">
					<?php echo wp_kses_post( $text ); ?>
				</div>
			</div>
		<?php } ?>
		<?php if ( $key_points ) { ?>
			<div class="mk-overflow-hidden mk-mt-10 md:mk-mt-12 mk-py-8 md:mk-py-12 mk-border-t mk-border-b mk-border-secondary-grey">
				<div class="mk-hidden sm:mk-flex mk-flex-wrap mk-justify-center mk-align-center -mk-mx-2 <?php echo esc_html( $layout ); ?>">
					<?php
					// Desktop.
					foreach ( $key_points as $point ) {
						$icon     = $point['icon'];
						$text     = $point['text'];
						$text_two = $point['text_2'];
						?>
						<div class="mk-w-1/2 lg:mk-w-1/3 mk-px-2">
							<div class="mk-w-full mk-h-full mk-flex mk-items-center <?php echo esc_html( $card_bg ); ?>">
								<?php if ( $icon ) { ?>
									<img class="mk-w-auto mk-h-12 mk-me-3" src="<?php echo esc_html( $icon['url'] ); ?>" alt="<?php echo esc_html( $icon['alt'] ); ?>">
								<?php } ?>
								<div>
									<?php if ( $text ) { ?>
										<div class="mk-prose <?php echo esc_html( $font ); ?> mk-text-lg<?php echo $second_text_field ? ' mk-font-medium' : ''; ?>">
											<?php echo wp_kses_post( $text ); ?>
										</div>
									<?php } ?>
									<?php if ( $text_two ) { ?>
										<div class="mk-prose mk-prose-light-grey mk-text-lg mk-mt-2">
											<?php echo wp_kses_post( $text_two ); ?>
										</div>
									<?php } ?>
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
								$icon     = $point['icon'];
								$text     = $point['text'];
								$text_two = $point['text_2'];
								?>
								<li class="glide__slide">
									<div class="mk-flex mk-items-center mk-gap-3 <?php echo esc_html( $card_bg ); ?>">
										<?php if ( $icon ) { ?>
											<img class="mk-w-auto mk-h-12" src="<?php echo esc_html( $icon['url'] ); ?>" alt="<?php echo esc_html( $icon['alt'] ); ?>">
										<?php } ?>
										<div>
											<?php if ( $text ) { ?>
												<div class="mk-prose <?php echo esc_html( $font ); ?> mk-text-lg<?php echo $second_text_field ? ' mk-font-medium' : ''; ?>">
													<?php echo wp_kses_post( $text ); ?>
												</div>
											<?php } ?>
											<?php if ( $text_two ) { ?>
												<div class="mk-prose mk-prose-light-grey mk-text-lg mk-mt-2">
													<?php echo wp_kses_post( $text_two ); ?>
												</div>
											<?php } ?>
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
		<?php if ( !empty($text_bottom) ) { ?>
			<div class="mk-flex mk-justify-center mk-mt-10 md:mk-mt-16">
				<div class="mk-max-w-[630px]">
					<p class="mk-text-slate-light-grey mk-text-lg mk-text-center mk-pb-3 sm:mk-pb-0">
						<?php echo $text_bottom; ?>
					</p>
				</div>
			</div>
		<?php } ?>
		<?php if ( $cta ) { ?>
			<div class="mk-flex mk-justify-center mk-mt-10 md:mk-mt-16">
				<a class="btn" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'arrow-right' ), allowed_svg_tags() ); ?></a>
			</div>
		<?php } ?>
	</div>
</div>
