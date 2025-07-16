<?php
/**
 * Resources Image.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

// Get fields.
$image    = get_field( 'image' );
$location = get_field( 'location' );

// Block ID.
$block_id = 'resources-image';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'resources-image';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}

// Check if image exists.
if ( $image ) {
	$image_url     = $image['url'] ?? '';
	$image_alt     = $image['alt'] ?? '';
	$image_preview = $image['sizes']['medium'] ?? $image_url;
}

// Tailwind class for location.
$tailwind_location_class = '';
if ( $location === 'center' ) {
	$tailwind_location_class = 'mk-flex mk-justify-center';
} elseif ( $location === 'start' ) {
	$tailwind_location_class = 'mk-flex mk-justify-start';
}
?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?> resources-image--<?php echo esc_attr( $location ); ?> <?php echo esc_attr( $tailwind_location_class ); ?>">
	<?php if ( $image ) : ?>
		<div class="resources-image__wrapper">
			<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>" class="resources-image__image" />
		</div>
	<?php endif; ?>
</div>
