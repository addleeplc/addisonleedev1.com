<?php
/**
 * Text / Video Split.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white  = get_field( 'heading_white' );
$heading_yellow = get_field( 'heading_yellow' );
$text           = get_field( 'text' );
$cta            = get_field( 'cta' );
$cta_two        = get_field( 'cta_two' );
$video          = get_field( 'video' );
$bg_colour      = get_field( 'background_colour' ); // mk-bg-black / mk-bg-third-grey.
$video_position = get_field( 'video_position' ); // mk-order-1 / mk-order-2.

// Background colour changes.
if ( 'mk-bg-third-grey' === $bg_colour ) {
	$heading_colour = '!mk-text-black';
	$text_colour    = 'mk-prose-grey';
	$cta_colour     = 'btn btn-black';
	$cta_two_colour = 'btn-clear';
	$cta_svg        = 'arrow-right-white';
} else {
	$heading_colour = '';
	$text_colour    = ' mk-prose-light-grey';
	$cta_colour     = 'btn';
	$cta_two_colour = 'btn-clear btn-clear-white';
	$cta_svg        = 'arrow-right';
}

// Image position changes.
if ( 'mk-order-2' === $video_position ) {
	$video_margin    = 'md:mk-ml-auto';
	$content_padding = 'sm:mk-pr-6';
} else {
	$video_margin    = 'md:mk-mr-auto';
	$content_padding = 'sm:mk-pl-6';
}

// Block ID.
$block_id = 'text-video-split';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'text-video-split';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-w-full mk-px-4 mk-py-12 md:mk-py-28 <?php echo esc_html( $bg_colour ); ?>" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-h-full mk-mx-auto sm:mk-flex mk-items-center">
		<div class="sm:mk-w-1/2 mk-mb-8 sm:mk-mb-0 <?php echo esc_html( $video_position ); ?>">
			<video class="autoplay-video mk-w-full md:mk-max-w-[491px] <?php echo esc_html( $video_margin ); ?>" preload="none" playsinline muted controls>
				<source src="<?php echo esc_html( $video['url'] ); ?>" type="video/mp4">
			</video>
		</div>
		<div class="sm:mk-w-1/2 <?php echo esc_html( $content_padding ); ?>">
			<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-mb-4">
				<span class="mk-block mk-text-white <?php echo esc_html( $heading_colour ); ?>"><?php echo esc_html( $heading_white ); ?></span>
				<span class="mk-block mk-text-yellow md:mk-pl-18 <?php echo esc_html( $heading_colour ); ?>"><?php echo esc_html( $heading_yellow ); ?></span>
			</h2>
			<div class="md:mk-pl-18">
				<div class="mk-max-w-md mk-prose mk-text-lg sm:mk-text-xl <?php echo esc_html( $text_colour ); ?>">
					<?php echo wp_kses_post( $text ); ?>
				</div>
				<?php if ( $cta || $cta_two ) { ?>
					<div class="mk-flex mk-flex-wrap mk-gap-x-8 mk-gap-y-4 mk-mt-8 md:mk-mt-12">
						<?php if ( $cta ) { ?>
							<a class="<?php echo esc_html( $cta_colour ); ?>" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( $cta_svg ), allowed_svg_tags() ); ?></a>
						<?php } ?>
						<?php if ( $cta_two ) { ?>
							<a class="<?php echo esc_html( $cta_two_colour ); ?>" href="<?php echo esc_html( $cta_two['url'] ); ?>" target="<?php echo esc_html( $cta_two['target'] ); ?>"><?php echo esc_html( $cta_two['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?></a>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
