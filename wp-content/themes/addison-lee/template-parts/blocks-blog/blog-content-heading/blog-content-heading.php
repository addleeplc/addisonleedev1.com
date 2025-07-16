<?php
/**
 * Blog Content with Heading.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading = get_field( 'heading' );
$content = get_field( 'content' );
$cta     = get_field( 'cta' );

// Block ID.
$block_id = 'blog-content-heading';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'blog-content-heading';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-px-4 mk-pb-14 md:mk-pb-20" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-max-w-site-1sm mk-mx-auto">
		<h2 class="mk-text-1sm-title mk-font-medium mk-uppercase mk-mb-5 mk-mt-0"><?php echo esc_html( $heading ); ?></h2>
		<div class="mk-prose mk-w-full mk-text-lg !mk-text-black/64">
			<?php echo wp_kses_post( $content ); ?>
		</div>
		<?php if ( $cta ) { ?>
			<a class="btn-clear mk-no-underline mk-mt-4 md:mk-mt-5" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?></a>
		<?php } ?>
	</div>
</div>
