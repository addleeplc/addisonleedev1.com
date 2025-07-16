<?php
/**
 * Contact Info Block.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

// Retrieve ACF fields
$heading          = get_field( 'heading' );
$subheading       = get_field( 'subheading' );
$contact_info     = get_field( 'contact_info' );
$background_theme = get_field( 'background_theme' );
$grid_data        = get_field( 'grid_data' );
$padding_top      = get_field( 'padding_top' );

// Ensure $block exists, or set it as an empty array to avoid errors
$block = $block ?? array();

// Block ID
$block_id = 'contact-info-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes
$class_name = 'contact-info-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}

// Apply background theme classes
$background_class = $background_theme === 'dark' ? 'mk-bg-black mk-text-white' : 'mk-bg-white mk-text-black';
$hr_class         = $background_theme === 'dark' ? 'mk-border-gray-500 mk-opacity-60' : 'mk-border';
$text_color	      = $background_theme === 'dark' ? 'mk-text-white' : 'mk-text-black/64';

// Grid classes based on selected option
$grid_class = $grid_data === 'three' ? 'md:mk-grid-cols-3' : 'md:mk-grid-cols-2';

// Padding top classes
$padding_top = $padding_top === 'none' ? 'md-pt-16 mk-pb-16 md:md-pt-0 md:mk-pb-28' : 'mk-py-16 md:mk-py-28';
?>

<div class="<?php echo esc_attr( "$class_name $background_class" ); ?> mk-px-4 <?php echo esc_html( $padding_top ); ?>" id="<?php echo esc_attr( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto">
		<?php if ( $heading ) : ?>
			<h2 class="mk-text-2sm-title mk-font-medium mk-uppercase mk-mb-8"><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>
		
		<?php if ( $subheading ) : ?>
			<div class="mk-text-base <?= $text_color; ?> mk-mb-12 contact-info-subheading"><?php echo wp_kses_post( $subheading ); ?></div>
		<?php endif; ?>
		
		<hr class="<?php echo esc_attr( $hr_class ); ?> mk-mb-8" />

		<?php if ( is_array( $contact_info ) ) : // Check if contact_info is an array ?>
			<div class="mk-grid mk-gap-4 <?php echo esc_attr( $grid_class ); ?> mk-gap-y-8 mk-text-left mk-mt-16">
				<?php foreach ( $contact_info as $info ) : ?>
					<div class="mk-flex-1 mk-mb-4">
						<p class="mk-font-medium mk-mb-4"><?php echo esc_html( $info['label'] ); ?></p>
						<p class="<?= $text_color; ?>"><?php echo esc_html( $info['data'] ); ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</div>


