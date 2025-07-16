<?php
/**
 * Key Points.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white     = get_field( 'heading_white' );
$heading_yellow    = get_field( 'heading_yellow' );
$key_points        = get_field( 'key_points' );
$cta               = get_field( 'cta' );
$kp_text_top       = get_field( 'text_top' );
$kp_text           = get_field( 'text' );
$top_padding       = get_field( 'remove_top_padding' );
$three_columns     = get_field( 'three_columns' );
$heading_one_line  = get_field( 'heading_one_line' );
$keep_grey_card_bg = get_field( 'keep_grey_card_bg' );
$mobile_carousel   = get_field( 'mobile_carousel' );

if ( ! $heading_one_line ) {
	$heading_display = 'mk-block';
} else {
	$heading_display = 'mk-inline-block';
}

// card_style_mobile is only used if mobile carousel is selected
if ( $three_columns ) {
	// Keep grey bg.
	if($keep_grey_card_bg) { // option is only displayed if three columns is selected in CMS
		$card_style = 'mk-bg-slate-grey mk-px-8 mk-py-6 mk-rounded-sm';
		$card_style_mobile = 'mk-bg-slate-grey mk-p-6 mk-rounded-sm';
	} else {
		$card_style = '';
		$card_style_mobile = '';
	}
	
} else {
	$card_style = 'mk-bg-slate-grey mk-px-8 mk-py-6 mk-rounded-sm';
	$card_style_mobile = 'mk-bg-slate-grey mk-p-6 mk-rounded-sm';
}

// Block ID.
$block_id = 'key-points';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'key-points';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-px-4 mk-py-10 md:mk-py-20<?php echo $top_padding ? ' md:mk-pt-0' : ''; ?>" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto mk-overflow-hidden">
		<?php if ( $heading_white || $heading_yellow ) { ?>
			<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-mb-14<?php echo $keep_grey_card_bg ? ' mk-text-center' : ''; ?>">
				<span class="<?php echo esc_html( $heading_display ); ?> mk-text-white"><?php echo esc_html( $heading_white ); ?></span>
				<span class="<?php echo esc_html( $heading_display ); ?> mk-text-yellow"><?php echo esc_html( $heading_yellow ); ?></span>
			</h2>
		<?php } ?>
		<?php if ( !empty($kp_text_top) ) { ?>
			<div class="mk-mb-8 md:mk-mb-12">
				<p class="mk-text-slate-light-grey mk-text-lg mk-pb-3 sm:mk-pb-0 md:mk-w-4/5">
					<?php echo wp_kses_post( $kp_text_top ); ?>
				</p>
			</div>
		<?php } ?>
		<div class="<?= $mobile_carousel ? "mk-hidden sm:mk-block" : ""; ?>">
			<?php if ( $key_points ) { ?>
				<div class="mk-flex mk-flex-wrap mk-justify-center mk-align-center -mk-mx-2 mk-gap-y-4 sm:mk-gap-y-6">
					<?php
					foreach ( $key_points as $point ) {
						$icon        = $point['icon'];
						$point_title = $point['title'];
						$text        = $point['text'];
						?>
						<div class="mk-w-full sm:mk-w-1/2 <?= $three_columns ? "md:mk-w-1/3" : ""; ?>  mk-px-2">
							<div class="key-point mk-h-full <?php echo esc_html( $card_style ); ?>">
								<img class="mk-w-auto mk-h-14 mk-mb-5" src="<?php echo esc_html( $icon['url'] ); ?>" alt="<?php echo esc_html( $icon['alt'] ); ?>">
								<?php if ( $three_columns ) { ?>
									<div class="accordion-wrap mk-overflow-hidden">
										<div class="accordion-toggle mk-flex mk-justify-between mk-items-center mk-mb-4">
											<h3 class="mk-text-xs-title md:mk-text-sm-title mk-font-medium mk-text-white mk-uppercase"><?php echo esc_html( $point_title ); ?></h3>
											<div class="sm:mk-hidden toggle-icon">
												<?php echo wp_kses( addisonlee_svgs( 'chevron-down-white' ), allowed_svg_tags() ); ?>
											</div>
										</div>
										<div class="accordion-body mk-h-0 sm:!mk-h-auto mk-transition-all mk-duration-300 mk-ease-bezier">
											<div class="accordion-inner mk-opacity-0 sm:!mk-opacity-100 mk-transition-all mk-duration-500 mk-ease-bezier">
												<div class="mk-prose mk-prose-light-grey mk-text-lg mk-pb-3 sm:mk-pb-0">
													<?php echo wp_kses_post( $text ); ?>
												</div>
											</div>
										</div>
									</div>
								<?php } else { ?>
									<h3 class="mk-text-xs-title md:mk-text-sm-title mk-font-medium mk-text-white mk-uppercase mk-mb-4"><?php echo esc_html( $point_title ); ?></h3>
									<div class="mk-prose mk-prose-light-grey mk-text-lg">
										<?php echo wp_kses_post( $text ); ?>
									</div>
								<?php } ?>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
		<?php if ($mobile_carousel) { ?>
			<div class="mobile-view-slider sm:mk-hidden">
				<div class="glide__track" data-glide-el="track">
					<ul class="glide__slides mk-flex mk-items-center">
						<?php
						// Mobile.
						foreach ( $key_points as $point ) {
							$icon        = $point['icon'];
							$point_title = $point['title'];
							$text        = $point['text'];
							?>
							<li class="glide__slide">
								<div class="key-point <?php echo esc_html( $card_style ); ?>">
									<img class="mk-w-auto mk-h-14 mk-mb-5" src="<?php echo esc_html( $icon['url'] ); ?>" alt="<?php echo esc_html( $icon['alt'] ); ?>">
									<h3 class="mk-text-xs-title md:mk-text-sm-title mk-font-medium mk-text-white mk-uppercase mk-mb-4"><?php echo esc_html( $point_title ); ?></h3>
									<div class="mk-prose mk-prose-light-grey mk-text-lg">
										<?php echo wp_kses_post( $text ); ?>
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
		<?php } ?>
		<?php if ( !empty($kp_text) ) { ?>
			<div class="mk-flex mk-justify-center mk-mt-10 md:mk-mt-16">
				<div class="mk-max-w-[430px]">
					<p class="mk-text-slate-light-grey mk-text-lg mk-text-center mk-pb-3 sm:mk-pb-0">
						<?php echo wp_kses_post( $kp_text ); ?>
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
