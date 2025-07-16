<?php
/**
 * Blog Gallery.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$image_one   = get_field( 'image_one' );
$image_two   = get_field( 'image_two' );
$image_three = get_field( 'image_three' );

// Block ID.
$block_id = 'blog-gallery';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'blog-gallery';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="mk-pb-14 md:mk-pb-20 <?php echo esc_html( $class_name ); ?>" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-flex mk-h-[640px]">
		<div class="mk-w-1/2">
			<?php if ( $image_one ) { ?>
				<img class="mk-w-full mk-h-1/2 mk-object-cover mk-my-0" src="<?php echo esc_html( $image_one['url'] ); ?>" alt="<?php echo esc_html( $image_one['alt'] ); ?>">
			<?php } ?>
			<?php if ( $image_two ) { ?>
				<img class="mk-w-full mk-h-1/2 mk-object-cover mk-my-0" src="<?php echo esc_html( $image_two['url'] ); ?>" alt="<?php echo esc_html( $image_two['alt'] ); ?>">
			<?php } ?>
		</div>
		<div class="mk-w-1/2">
			<?php if ( $image_three ) { ?>
				<img class="mk-w-full mk-h-full mk-object-cover mk-my-0" src="<?php echo esc_html( $image_three['url'] ); ?>" alt="<?php echo esc_html( $image_three['alt'] ); ?>">
			<?php } ?>
		</div>
	</div>
</div>
