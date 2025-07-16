<?php
/**
 * Block: Banner Tick Shape
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$title_white = get_field( 'title_white' );
$title_grey  = get_field( 'title_grey' );
$title_pink  = get_field( 'title_pink' );
$subtitle    = get_field( 'subtitle' );

// Block ID.
$block_id = 'banner-tick-shape';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'banner-tick-shape';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_html( $class_name ); ?> mk-bg-dark mk-px-4 mk-py-16 md:mk-py-28 mk-relative" id="<?php echo esc_html( $block_id ); ?> ">
	<!-- Background tick shape -->
	<div class="mk-absolute mk-inset-0 mk-bg-slate-grey mk-z-0" style="clip-path: polygon(44% 13%, 100% 0, 100% 84%, 34% 100%, 0 89%, 0 4%);"></div>
		<div class="mk-w-full mk-max-w-site mk-mx-auto mk-text-center">
			<div class="mk-relative mk-z-10">
				<div class="mk-py-16 md:mk-py-28">
					<div class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-text-white mk-mb-6 ">
					<?php if ( $title_white ) { ?>
						<h3><span><?php echo esc_html( $title_white ); ?></span></h3>
					<?php } ?>
					<h3>
					<?php if ( $title_grey ) { ?>
						<span class="mk-text-secondary-grey"><?php echo esc_html( $title_grey ); ?></span>
					<?php } ?>
					<?php if ( $title_pink ) { ?>
						<span class="mk-text-pink"><?php echo esc_html( $title_pink ); ?></span>
					<?php } ?>
					</h3>
					</div>
					<?php if ( $subtitle ) { ?>
						<div class="mk-mx-auto mk-max-w-site-sm mk-text-base md:mk-text-lg mk-text-slate-light-grey mk-mt-4">
							<?php echo wp_kses_post( nl2br( $subtitle ) ); ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

