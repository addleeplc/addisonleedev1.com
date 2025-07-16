<?php
/**
 * Info Cards.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white  = get_field( 'heading_white' );
$heading_yellow = get_field( 'heading_yellow' );
$info_cards     = get_field( 'info_cards' );
$bg_colour      = get_field( 'background_colour' );
$two_columns    = get_field( 'two_columns' );

// Background colour changes.
if ( 'mk-bg-third-grey' === $bg_colour ) {
	$heading_colour    = '!mk-text-black';
	$card_title_colour = 'mk-text-black';
	$text_colour       = '';
	$border_colour     = 'mk-border-black/30';
	$arrow_left_svg    = 'chevron-left-lg';
	$arrow_right_svg   = 'chevron-right-lg';
} else {
	$heading_colour    = '';
	$card_title_colour = 'mk-text-white';
	$text_colour       = ' mk-prose-light-grey';
	$border_colour     = 'mk-border-white/30';
	$arrow_left_svg    = 'chevron-left-yellow';
	$arrow_right_svg   = 'chevron-right-yellow';
}

if ( $two_columns ) {
	$desktop_cols = 'md:mk-w-1/2';
} else {
	$desktop_cols = 'md:mk-w-1/2 lg:mk-w-1/3';
}

// Block ID.
$block_id = 'info-cards';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'info-cards';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-w-full mk-px-4 mk-py-12 md:mk-py-28 <?php echo esc_html( $bg_colour ); ?>" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto">
		<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-mb-8 md:mk-mb-12">
			<span class="mk-block mk-text-white <?php echo esc_html( $heading_colour ); ?>"><?php echo esc_html( $heading_white ); ?></span>
			<span class="mk-block mk-text-yellow  <?php echo esc_html( $heading_colour ); ?>"><?php echo esc_html( $heading_yellow ); ?></span>
		</h2>
		<?php if ( $info_cards ) { ?>
			<div class="mk-overflow-hidden">
				<div class="mk-hidden md:mk-flex mk-flex-wrap mk-justify-center mk-align-center -mk-mx-4 mk-gap-y-12">
					<?php
					foreach ( $info_cards as $card ) {
						$image       = $card['image'];
						$block_title = $card['title'];
						$text        = $card['text'];
						$cta         = $card['cta'];
						?>
						<div class="<?php echo esc_html( $desktop_cols ); ?> mk-px-4">
							<?php if ( $cta ) { ?>
								<a class="" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>">
							<?php } ?>
							<div class="mk-h-full mk-group mk-cta-group-element">
								<?php if ( $image ) { ?>
									<img class="mk-w-full mk-h-image-1sm mk-object-cover" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
								<?php } ?>
								<div class="mk-h-[calc(100%-355px)] mk-px-6 mk-py-8 mk-border-b mk-border-r mk-border-l <?php echo esc_html( $border_colour ); ?>">
									<h3 class="mk-text-2xl mk-font-medium <?php echo esc_html( $card_title_colour ); ?> mk-mb-4"><?php echo esc_html( $block_title ); ?></h3>
									<div class="mk-prose<?php echo esc_html( $text_colour ); ?> mk-text-lg">
										<?php echo wp_kses_post( $text ); ?>
									</div>
									<?php if ( $cta ) { ?>
										<div class="mk-mt-6">
											<button class="btn-clear
											<?= 'mk-bg-third-grey' !== $bg_colour ? "btn-clear-white" : ""; ?>
											group-hover:mk-opacity-60"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?></button>
										</div>
									<?php } ?>
								</div>
							</div>
							<?php if ( $cta ) { ?>
								</a>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="mobile-view-slider md:mk-hidden">
				<div class="glide__track !mk-overflow-visible" data-glide-el="track">
					<ul class="glide__slides">
						<?php
						// Mobile.
						foreach ( $info_cards as $card ) {
							$image       = $card['image'];
							$block_title = $card['title'];
							$text        = $card['text'];
							$cta         = $card['cta'];
							?>
							<li class="glide__slide">
								<div class="mk-h-full">
									<?php if ( $image ) { ?>
										<img class="mk-w-full mk-h-image-1sm mk-object-cover" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
									<?php } ?>
									<div class="mk-h-[calc(100%-355px)] mk-px-6 mk-py-8 mk-border-b mk-border-r mk-border-l <?php echo esc_html( $border_colour ); ?>">
										<h3 class="mk-text-xl mk-font-medium <?php echo esc_html( $card_title_colour ); ?> mk-mb-4"><?php echo esc_html( $block_title ); ?></h3>
										<div class="mk-prose<?php echo esc_html( $text_colour ); ?> mk-text-lg">
											<?php echo wp_kses_post( $text ); ?>
										</div>
										<?php if ( $cta ) { ?>
											<div class="mk-mt-4">
												<button class="btn-clear
												<?php 'mk-bg-third-grey' == $bg_colour ? "btn-clear-white" : ""; ?>
												group-hover:mk-opacity-60"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?></button>
											</div>
										<?php } ?>
									</div>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>
				<div class="slider-controls mk-flex mk-justify-end mk-gap-2 mk-mt-8" data-glide-el="controls">
					<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( $arrow_left_svg ), allowed_svg_tags() ); ?></div>
					<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( $arrow_right_svg ), allowed_svg_tags() ); ?></div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
