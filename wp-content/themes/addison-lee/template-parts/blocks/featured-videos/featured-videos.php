<?php
/**
 * Featured Videos.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading = get_field( 'heading' );
$videos  = get_field( 'videos' );

// Block ID.
$block_id = 'featured-videos';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'featured-videos';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-w-full mk-px-4" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-h-full mk-mx-auto">
		<?php if ( $heading ) { ?>
			<h2 class="mk-text-2sm-title md:mk-text-lg-title mk-text-white mk-font-medium mk-uppercase"><?php echo wp_kses_post( $heading ); ?></h2>
		<?php } ?>
		<?php
		if ( $videos ) {
			foreach ( $videos as $video ) {
				$video_title = $video['title'];
				$video_file  = $video['video'];
				$poster      = $video['video_poster'];
				$text        = $video['text'];
				$cta         = $video['cta'];
				?>
				<div class="mk-py-12 md:mk-py-28">
					<?php if ( $video_title ) { ?>
						<h3 class="mk-text-sm-title mk-font-medium mk-text-white mk-uppercase mk-mb-11"><?php echo esc_html( $video_title ); ?></h3>
					<?php } ?>
					<div class="mk-relative video-field-container">
						<video class="video-field mk-w-full md:mk-h-image-1md" poster="<?php echo esc_html( $poster['url'] ); ?>">
							<source src="<?php echo esc_html( $video_file['url'] ); ?>" type="video/mp4">
						</video>
						<div class="play-btn play-btn-icon mk-absolute mk-inset-0 mk-w-28 mk-h-28 mk-m-auto mk-cursor-pointer"><?php echo wp_kses( addisonlee_svgs( 'play-btn' ), allowed_svg_tags() ); ?></div>
					</div>
					<?php if ( $text ) { ?>
						<div class="mk-prose mk-prose-light-grey mk-text-lg mk-mt-10">
							<?php echo wp_kses_post( $text ); ?>
						</div>
					<?php } ?>
					<?php if ( $cta ) { ?>
						<a class="btn-clear btn-clear-white mk-mt-6" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>">
							<?php echo esc_html( $cta['title'] ); ?>
							<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?>
						</a>
					<?php } ?>
				</div>
				<?php
			}
		}
		?>
	</div>
</div>
