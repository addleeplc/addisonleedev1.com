<?php
/**
 * Full Page Video.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$video = get_field( 'video' );

// Block ID.
$block_id = 'full-page-video';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'full-page-video';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-relative mk-h-[calc(100vh-108px)] mk-w-full" id="<?php echo esc_html( $block_id ); ?>">
	<?php if ( $video ) { ?>
		<video class="mk-w-full mk-h-full mk-object-cover" preload="none" playsinline autoplay loop muted>
			<source src="<?php echo esc_html( $video['url'] ); ?>" type="video/mp4">
		</video>
	<?php } ?>
</div>
