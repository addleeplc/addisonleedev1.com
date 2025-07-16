<?php
/**
 * Resources Content.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$content = get_field( 'content' );

// Block ID.
$block_id = 'resources-content';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'resources-content';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-px-4 mk-py-8 md:mk-py-20" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-max-w-site mk-mx-auto">
		<div class="mk-prose mk-w-full mk-text-lg !mk-text-black/64">
			<?php echo wp_kses_post( $content ); ?>
		</div>
	</div>
</div>
