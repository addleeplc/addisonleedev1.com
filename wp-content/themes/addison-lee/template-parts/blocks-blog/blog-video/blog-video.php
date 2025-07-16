<?php
/**
 * Blog Video.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$video       = get_field( 'video' );
$video_still = get_field( 'video_still' );
$video_type  = get_field( 'video_type' );
$embed_type  = get_field( 'embed_type' );
$embed_url   = get_field( 'embed_url' );

// Block ID.
$block_id = 'blog-video';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'blog-video';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="mk-pb-14 md:mk-pb-20 <?php echo esc_html( $class_name ); ?>" id="<?php echo esc_html( $block_id ); ?>">
	<?php if ($video_type == 'file') { ?>
		<div class="text-video-white-card mk-relative video-field-container">
			<video class="video-field mk-w-full mk-h-image-blog mk-object-cover mk-my-0" poster="<?php echo esc_html( $video_still['url'] ); ?>">
				<source src="<?php echo esc_html( $video['url'] ); ?>" type="video/mp4">
			</video>
			<div class="play-btn play-btn-icon mk-absolute mk-inset-0 mk-w-28 mk-h-28 mk-m-auto mk-cursor-pointer"><?php echo wp_kses( addisonlee_svgs( 'play-btn' ), allowed_svg_tags() ); ?></div>
		</div>
	<?php } else { ?>
		<?php if ($embed_type == 'youtube') { ?>
			<iframe width="100%" height="30.938rem"
			src="<?= $embed_url; ?>"
			title="YouTube video player"
			frameborder="0"
			allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
			referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
			class="mk-h-image-blog mk-outline-none"></iframe>
		<?php } ?>
		<?php if ($embed_type == 'vimeo') { ?>
			<div class="mk-pt-[56.25%] mk-relative">
				<iframe src="<?= $embed_url; ?>"
					frameborder="0"
					allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media"
					style="position:absolute;top:0;left:0;width:100%;height:100%;"
					title="Vimeo Embed"
					class="mk-outline-none"></iframe>
			</div>
		<?php } ?>
	<?php } ?>
</div>
