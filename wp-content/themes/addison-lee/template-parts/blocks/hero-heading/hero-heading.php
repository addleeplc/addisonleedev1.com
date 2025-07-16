<?php
/**
 * Hero Heading Block.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading        = get_field( 'heading' );
$text           = get_field( 'text' );
$white_cta      = get_field( 'cta' );
$reduce_padding = get_field( 'reduce_padding' );

// Block ID.
$block_id = 'hero-heading';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'hero-heading';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_html( $class_name ); ?>  mk-px-4 mk-bg-black" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-max-w-site mk-mx-auto">
		<div class="mk-max-w-[534px] mk-py-12 <?= $reduce_padding ? 'md:mk-py-16' : 'md:mk-py-[155px]'; ?>">
			<h1 class="mk-text-2sm-title md:mk-text-lg-title mk-font-medium mk-text-white mk-uppercase"><?php echo esc_html( $heading ); ?></h1>
			<?php if ( $text ) { ?>
				<div class="mk-prose mk-prose-light-grey mk-text-lg mk-mt-3">
					<?php echo wp_kses_post( $text ); ?>
				</div>
			<?php } ?>
			<?php if ( $white_cta ) { ?>
				<a class="btn-clear btn-clear-white mk-mt-4 mk-uppercase mk-font-steagal mk-text-white mk-text-xxxxs-title mk-inline-block mk-flex mk-items-center" 
				href="<?php echo esc_html( $white_cta['url'] ); ?>" 
				target="<?php echo esc_html( $white_cta['target'] ); ?>">
					<?php echo esc_html( $white_cta['title'] ); ?> 
					<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm-white' ), allowed_svg_tags() ); ?>
				</a>	
			<?php } ?>
		</div>
	</div>
</div>