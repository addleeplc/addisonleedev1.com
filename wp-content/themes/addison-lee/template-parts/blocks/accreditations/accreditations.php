<?php
/**
 * Accreditations.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading        = get_field( 'heading' );
$accreditations = get_field( 'accreditations' );
$cta            = get_field( 'cta' );

// Block ID.
$block_id = 'accreditations-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'accreditations-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-bg-white mk-px-4 mk-pt-12 md:mk-pt-28" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto mk-pb-12 md:mk-pb-28 mk-border-b mk-border-secondary-grey">
		<?php if ( $heading ) { ?>
			<h2 class="mk-text-1sm-title mk-font-medium mk-uppercase"><?php echo esc_html( $heading ); ?></h2>
		<?php } ?>
		<?php if ( $accreditations ) { ?>

			<div class="mk-flex mk-flex-wrap -mk-mx-2 mk-mt-8">
				<?php
				foreach ( $accreditations as $card ) {
					$card_args = array(
						'id' => $card->ID,
					);
					get_template_part( 'template-parts/cards/card', 'accreditations', $card_args );
				}
				?>
			</div>
		<?php } ?>
		<?php if ( $cta ) { ?>
			<div class="mk-text-center mk-mt-4">
				<a class="btn-clear" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?></a>
			</div>
		<?php } ?>
	</div>
</div>
