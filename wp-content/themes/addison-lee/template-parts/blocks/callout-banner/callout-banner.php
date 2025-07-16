<?php
/**
 * Callout Banner.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading = get_field( 'heading' );
$text    = get_field( 'text' );
$cta     = get_field( 'cta' );

// Block ID.
$block_id = 'callout-banner';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'callout-banner';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_html( $class_name ); ?> mk-px-4 mk-py-28 mk-text-center" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site-xs mk-mx-auto">
		<?php if ( $heading ) { ?>
			<h2 class="mk-text-2sm-title md:mk-text-lg-title mk-font-medium mk-text-white mk-uppercase mk-mb-11"><?php echo esc_html( $heading ); ?></h2>
		<?php } ?>
		<div class="mk-prose mk-prose-light-grey">
			<?php echo wp_kses_post( $text ); ?>
		</div>
		<?php if ( $cta ) { ?>
			<div class="mk-flex mk-justify-center mk-mt-12 md:mk-mt-14">
				<a class="btn" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'arrow-right' ), allowed_svg_tags() ); ?></a>
			</div>
		<?php } ?>
	</div>
</div>
