<?php
/**
 * Image / Text Split.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$bg_card    = get_field( 'bg_card' );
$heading    = get_field( 'heading' );
$text       = get_field( 'text' );
$cta        = get_field( 'cta' );
$second_cta = get_field( 'second_cta' );
$image      = get_field( 'image' );

// Block ID.
$block_id = 'image-text-white-card';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'image-text-white-card';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}

// Determine classes based on bg_card value.
$card_bg_class    = 'mk-bg-white';
$text_color_class = 'mk-text-black';
$cta_class        = 'btn btn-black';

if ( 'yellow' === $bg_card ) {
	$card_bg_class    = 'mk-bg-yellow';
	$text_color_class = 'mk-text-black';

}
?>

<div class="<?php echo esc_html( $class_name ); ?> mk-px-4 mk-py-12 md:mk-py-28" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-h-full mk-mx-auto md:mk-flex">
		<div class="md:mk-w-1/2 md:mk-order-2">
			<img class="mk-w-full mk-h-image-1sm md:mk-h-536 mk-object-cover" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
		</div>
		<div class="md:mk-w-1/2 mk-flex mk-flex-col mk-justify-center mk-px-6 md:mk-px-8 mk-py-8 <?php echo esc_html( $card_bg_class ); ?>">
			<div class="md:mk-max-w-sm md:mk-mx-auto">
				<h2 class="mk-text-1sm-title md:mk-text-2sm-title mk-font-medium mk-uppercase mk-mb-3 <?php echo esc_html( $text_color_class ); ?>">
					<?php echo esc_html( $heading ); ?>
				</h2>
				<div class="mk-max-w-md mk-prose mk-prose-grey mk-text-lg <?php echo esc_html( $text_color_class ); ?>">
					<?php echo wp_kses_post( $text ); ?>
				</div>
				<?php if ( $cta && $second_cta ) { ?>
					<div class="mk-flex mk-flex-col md:mk-flex-row md:mk-justify-center md:mk-items-center md:mk-mt-8 mk-gap-4">	
				<?php } ?>
					<?php if ( $cta ) { ?>
						<a class="<?php echo esc_html( $cta_class ); ?> mk-mt-8 md:mk-mt-10" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>">
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
