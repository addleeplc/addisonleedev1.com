<?php
/**
 * Blog Image / Text.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$image          = get_field( 'image' );
$heading        = get_field( 'heading' );
$text           = get_field( 'text' );
$cta            = get_field( 'cta' );
$image_position = get_field( 'image_position' );

// Image position styling.
if ( $image_position ) {
	$flex_reverse    = ' mk-flex-row-reverse';
	$content_margin  = ' mk-ml-auto';
	$content_padding = ' md:mk-pr-12';
	$column_padding  = ' mk-pl-4 mk-pr-4 md:mk-pr-0';
} else {
	$flex_reverse    = '';
	$content_margin  = '';
	$content_padding = ' md:mk-pl-12';
	$column_padding  = ' mk-pl-4 md:mk-pl-0 mk-pr-4';
}

// Block ID.
$block_id = 'blog-content';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'blog-content';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="mk-pb-14 md:mk-pb-20 <?php echo esc_html( $class_name ); ?>" id="<?php echo esc_html( $block_id ); ?>">
	<div class="md:mk-flex<?php echo esc_html( $flex_reverse ); ?>">
		<div class="md:mk-w-1/2">
			<img class="mk-h-image-md md:mk-h-full md:mk-min-h-image-blog mk-object-cover mk-my-0" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
		</div>
		<div class="md:mk-w-1/2 mk-py-8<?php echo esc_html( $column_padding ); ?>">
			<div class="md:mk-max-w-site-half mk-h-full mk-flex mk-justify-center mk-items-center<?php echo esc_html( $content_margin ); ?>">
				<div class="<?php echo esc_html( $content_padding ); ?>">
					<h2 class="mk-text-1sm-title mk-font-medium mk-uppercase mk-mb-5"><?php echo esc_html( $heading ); ?></h2>
					<div class="mk-prose mk-w-full mk-text-lg !mk-text-black/64">
						<?php echo wp_kses_post( $text ); ?>
					</div>
					<?php if ( $cta ) { ?>
						<a class="btn-clear mk-no-underline mk-mt-4 md:mk-mt-5" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?></a>
					<?php } ?>
				</div>
			</div>
		</div>	
	</div>
</div>
