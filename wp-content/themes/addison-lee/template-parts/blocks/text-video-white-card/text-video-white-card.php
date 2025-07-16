<?php
/**
 * Text / Video White Card.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading     = get_field( 'heading' );
$text        = get_field( 'text' );
$cta         = get_field( 'cta' );
$second_cta  = get_field( 'second_cta' );
$video       = get_field( 'video' );
$video_still = get_field( 'video_still' );
$title_fs    = get_field( 'titles_fs' );

// Card titles font size.
if ( $title_fs === 'big' ) {
	$title_font_size = 'md:mk-text-2sm-title';
} else {
	$title_font_size = 'md:mk-text-1sm-title';
}

// Block ID.
$block_id = 'text-video-white-card';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'text-video-white-card';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-w-full mk-px-4 mk-py-12 md:mk-py-28" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto md:mk-flex">
		<div class="md:mk-w-1/2 md:mk-order-2">
			<div class="video-field-container mk-relative">
				<video class="video-field mk-w-full md:mk-h-536 md:mk-object-cover"
					<?php if (is_array($video_still)) { ?>
						poster="<?php echo esc_html( $video_still['url'] ); ?>"
					<?php } ?>
				>
					<source src="<?php echo esc_html( $video['url'] ); ?>" type="video/mp4">
				</video>
				<div class="play-btn play-btn-icon mk-absolute mk-inset-0 mk-w-28 mk-h-28 mk-m-auto mk-cursor-pointer"><?php echo wp_kses( addisonlee_svgs( 'play-btn' ), allowed_svg_tags() ); ?></div>
			</div>
		</div>
		<div class="md:mk-w-1/2 mk-flex mk-flex-col mk-justify-center mk-px-6 md:mk-px-8 mk-py-8 mk-bg-white">
			<div class="md:mk-max-w-sm mk-mx-auto">
				<h2 class="mk-text-1sm-title 
				<?php
				echo wp_kses_post( $title_font_size );
				?>
				mk-font-medium mk-uppercase mk-mb-3"><?php echo esc_html( $heading ); ?></h2>
				<div class="mk-max-w-md mk-prose mk-text-lg">
					<?php echo wp_kses_post( $text ); ?>
				</div>
				<?php if ( $cta && $second_cta ) { ?>
					<div class="mk-flex mk-flex-col md:mk-flex-row md:mk-justify-center md:mk-items-center md:mk-mt-8 mk-gap-4">	
				<?php } ?>
					<?php if ( $cta ) { ?>
						<a class="btn btn-black mk-mt-8 md:mk-mt-10" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>">
							<?php echo esc_html( $cta['title'] ); ?>
							<?php echo wp_kses( addisonlee_svgs( 'arrow-right-white' ), allowed_svg_tags() ); ?>
						</a>
					<?php } ?>
					<?php if ( $second_cta ) { ?>
						<a class="cta_svg_animation mk-font-steagal mk-text-sm mk-leading-relaxed mk-uppercase mk-inline-block mk-flex mk-items-center mk-mt-8 md:mk-mt-10" href="<?php echo esc_html( $second_cta['url'] ); ?>" target="<?php echo esc_html( $second_cta['target'] ); ?>">
							<?php echo esc_html( $second_cta['title'] ); ?>
							<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?>
						</a>
					<?php } ?>
				<?php if ( $cta && $second_cta ) { ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
