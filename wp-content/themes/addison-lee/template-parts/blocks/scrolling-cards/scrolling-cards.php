<?php
/**
 * Scrolling cards.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white  = get_field( 'heading_white' );
$heading_yellow = get_field( 'heading_yellow' );
$intro_text     = get_field( 'intro_text' );
$cards          = get_field( 'cards' );

// Settings.
$progress_bar             = get_field( 'display_progress_bar' );
$display_controls_desktop = get_field( 'display_controls_desktop' );
$position_controls_mobile = get_field( 'position_controls_mobile' );
$add_triangle_bg          = get_field( 'add_triangle_bg' );
$card_titles_fs           = get_field( 'card_titles_fs' );

// Calculate progress bar widths.
$num_cards          = count( $cards );
$progress_start     = ( 1 / ( $num_cards - 1 ) ) * 100; // minus 1 because 2 slides per view means the last slide is not navigated to
$progress_indicator = 100 - $progress_start;

if ( $progress_bar ) {
	$display_type = ' progress-bar';
} else {
	$display_type = ' no-progress-bar';
}

// Card titles font size.
if ( $card_titles_fs === 'big' ) {
	$card_titles_font_size = 'mk-text-2sm-title';
} else {
	$card_titles_font_size = 'mk-text-1sm-title';
}

// Controls position.
if ( $position_controls_mobile == 'center' ) {
	$controls_mobile = ' mk-justify-center';
} else {
	$controls_mobile = ' mk-justify-end';
}

// Block ID.
$block_id = 'scrolling-cards';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'scrolling-cards';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}

// Add background class if triangle bg is active.
if ( $add_triangle_bg ) {
	$class_name .= ' with-triangle-bg';
}

if ( $cards ) { ?>
<div class="<?php echo esc_html( $class_name ); ?> mk-w-full mk-px-4 mk-py-12 md:mk-py-28 mk-overflow-hidden mk-relative" id="<?php echo esc_html( $block_id ); ?>" 
	<?php
	if ( $add_triangle_bg ) {
		echo 'style="background: linear-gradient(180deg, #000 53.15%, #111318 100%)"'; }
	?>
>

<div class="mk-w-full mk-max-w-site mk-h-full mk-mx-auto">
	<div class="scrolling-cards-carousel <?php echo esc_html( $display_type ); ?>">
		<div class="mk-mb-8 md:mk-mb-14">
			<?php if ( $display_controls_desktop ) : ?>
			<div class="mk-flex mk-items-align mk-justify-between">
				<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase">
					<span class="mk-text-white"><?php echo esc_html( $heading_white ); ?></span>
					<span class="mk-text-yellow"><?php echo esc_html( $heading_yellow ); ?></span>
				</h2>
				<div class="slider-controls controls-top mk-hidden md:mk-flex mk-justify-end mk-gap-2 " data-glide-el="controls" data-glide-length="<?= count( $cards ); ?>">
					<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-yellow' ), allowed_svg_tags() ); ?></div>
					<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-yellow' ), allowed_svg_tags() ); ?></div>
				</div>
			</div>
			<?php else : ?>
			<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase">
				<span class="mk-text-white"><?php echo esc_html( $heading_white ); ?></span>
				<span class="mk-text-yellow"><?php echo esc_html( $heading_yellow ); ?></span>
			</h2>
			<?php endif; ?>

			<?php if ( $intro_text ) { ?>
				<p class="mk-text-xl md:mk-text-2xl mk-text-white mk-mt-4 md:mk-mt-6"><?php echo esc_html( $intro_text ); ?></p>
			<?php } ?>
		</div>
			<div class="glide__track !mk-overflow-visible" data-glide-el="track">
				<ul class="glide__slides">
					<?php
					foreach ( $cards as $card ) {
						$image      = $card['image'];
						$card_title = $card['title'];
						$text       = $card['text'];
						$cta        = $card['cta'];
						?>
						<li class="glide__slide">
							<?php if ( $cta ) { ?>
								<a class="" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?>
							<?php } ?>
							<div class="mk-group mk-cta-group-element">
								<div class="mk-h-image-1sm md:mk-h-image-md mk-overflow-hidden mk-mb-6">
									<img class="mk-w-full mk-h-full mk-object-cover group-hover:mk-scale-125 mk-transition-transform mk-duration-700 mk-ease-bezier" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
								</div>
								<div class="mk-flex mk-flex-col mk-justify-between">
									<div>
										<h3 class="<?php echo wp_kses_post( $card_titles_font_size ); ?> mk-font-medium mk-text-white mk-uppercase mk-mb-4"><?php echo esc_html( $card_title ); ?></h3>
										<?php if ( $text ) { ?>
											<div class="mk-prose mk-prose-light-grey mk-text-lg mk-mb-4 md:mk-mb-10">
												<?php echo wp_kses_post( $text ); ?>
											</div>
										<?php } ?>
									</div>
									<?php if ( $cta ) { ?>
										<div>
											<button class="btn-clear btn-clear-white group-hover:mk-opacity-60"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?></button>
										</div>
									<?php } ?>
								</div>
							</div>
							<?php if ( $cta ) { ?>
								</a>
							<?php } ?>
						</li>
					<?php } ?>
				</ul>
			</div>
			<?php if ( $progress_bar ) { ?>
				<div class="slider-progress mk-hidden md:mk-flex mk-relative mk-max-w-[998px] mk-h-0.5 mk-mx-auto mk-mt-20 mk-bg-yellow/30 mx-4">
					<div class="mk-h-full mk-bg-yellow" style="width:<?php echo esc_html( $progress_start ); ?>%"></div>
					<div class="progress-bar mk-w-0 mk-h-full mk-bg-yellow mk-transition-all mk-duration-500" data-width="<?php echo esc_html( $progress_indicator ); ?>"></div>
				</div>
			<?php } ?>
			<div class="slider-controls mk-flex md:mk-hidden <?php echo esc_html( $controls_mobile ); ?> mk-gap-2 mk-mt-10" data-glide-el="controls" data-glide-length="<?= count( $cards ); ?>">
				<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-yellow' ), allowed_svg_tags() ); ?></div>
				<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-yellow' ), allowed_svg_tags() ); ?></div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php if ( $add_triangle_bg ) { ?>
	<div class="mk-h-[100px] md:mk-h-[150px] mk-bg-[#111318] mk-inset-0 mk-z-0" 
		style="clip-path: polygon(50% 90%, 0 0, 100% 0);">
	</div>
<?php } ?>
