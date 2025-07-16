<?php
/**
 * About us.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading            = get_field( 'heading' );
$text               = get_field( 'text' );
$key_info           = get_field( 'key_information' );
$cta_button         = get_field( 'cta_button' );
$environmental_info = get_field( 'environmental_information' );
$cta                = get_field( 'cta' );

// Block ID.
$block_id = 'about-us';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'about-us';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-bg-white mk-px-4 mk-py-16 md:mk-py-28" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto">
		<?php if ( $heading ) { ?>
			<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-mb-10 mk-text-center"><?php echo esc_html( $heading ); ?></h2>
		<?php } ?>
		<?php if ( !empty($text) ) { ?>
			<div class="mk-prose mk-prose-grey !mk-max-w-[880px] mk-mx-auto mk-text-lg mk-text-center">
				<?php echo wp_kses_post( $text ); ?>
			</div>
		<?php } ?>
		<?php if ( $key_info ) { ?>
			<div class="mk-flex mk-flex-wrap mk-justify-center mk-gap-x-16 mk-gap-y-6">
				<?php
				foreach ( $key_info as $item ) {
					$bold_text = $item['bold_text'];
					$text      = $item['text'];
					?>
					<div class="mk-text-2xl mk-flex mk-gap-3">
						<span class="mk-font-medium"><?php echo esc_html( $bold_text ); ?></span>
						<span class="mk-text-black/64"><?php echo esc_html( $text ); ?></span>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
		<?php if ( $cta_button ) { ?>
			<div class="mk-text-center mk-mt-8">
				<a class="btn btn-black" href="<?php echo esc_html( $cta_button['url'] ); ?>" target="<?php echo esc_html( $cta_button['target'] ); ?>"><?php echo esc_html( $cta_button['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'arrow-right-white' ), allowed_svg_tags() ); ?></a>
			</div>
		<?php } ?>
		<?php if ( $environmental_info ) { ?>
			<div class="mk-mt-16 mk-border-t mk-border-b mk-border-black">
				<div class="mk-flex mk-flex-wrap mk-justify-center -mk-mx-8 mk-py-12">
					<?php
					foreach ( $environmental_info as $item ) {
						$icon = $item['icon'];
						$text = $item['text'];
						?>
						<div class="md:mk-w-1/3 mk-flex mk-items-center mk-gap-2 mk-px-8 mk-mb-16 md:mk-mb-0 last:mk-mb-0">
							<div>
								<img class="mk-min-w-14 mk-max-w-14" src="<?php echo esc_html( $icon['url'] ); ?>" alt="<?php echo esc_html( $icon['alt'] ); ?>">
							</div>
							<div class="mk-prose mk-prose-grey">
								<?php echo wp_kses_post( $text ); ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		<?php } ?>

		<?php if ( $cta ) { ?>
			<div class="mk-text-center mk-mt-14">
				<a class="btn-clear" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?></a>
			</div>
		<?php } ?>

	</div>
</div>
