<?php
/**
 * Hero with Background Image.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white  = get_field( 'heading_white' );
$heading_yellow = get_field( 'heading_yellow' );
$text           = get_field( 'text' );
$cta            = get_field( 'cta' );
$image          = get_field( 'image' );
$bg_gradient    = get_field( 'background_gradient' );

// Block ID.
$block_id = 'full-page-image-text-overlay';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'full-page-image-text-overlay';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-relative mk-h-screen mk-w-full" id="<?php echo esc_html( $block_id ); ?>">
	<img class="mk-w-full mk-h-full mk-object-cover" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
	<div class="mk-absolute mk-inset-0 mk-w-full mk-h-full mk-px-4 mk-py-24
		<?= $bg_gradient === 'mk-bg-full-image-alternate' ? 'mk-bg-full-image-alternate' : 'mk-bg-full-image'; ?>">
		<div class="mk-w-full mk-max-w-site mk-mx-auto mk-sticky mk-top-32">
			<h1 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-mb-4">
				<span class="mk-block mk-text-white"><?php echo esc_html( $heading_white ); ?></span>
				<span class="mk-block mk-text-yellow"><?php echo esc_html( $heading_yellow ); ?></span>
			</h1>
			<div class="mk-max-w-md">
				<p class="mk-text-lg mk-text-white !mk-leading-tight"><?php echo wp_kses_post( $text ); ?></p>
			</div>
			<?php if ( $cta ) { ?>
				<a class="btn mk-mt-8 md:mk-mt-12" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'arrow-right' ), allowed_svg_tags() ); ?></a>
			<?php } ?>
		</div>
	</div>
</div>