<?php
/**
 * Newsletter cta.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$newsletter = get_field( 'newsletter', 'option' );
$heading    = $newsletter['heading'] ?? '';
$text       = $newsletter['text'] ?? '';
$cta        = $newsletter['cta'] ?? array();
$video      = $newsletter['video'] ?? array();
?>

<div class="newsletter-sign-up mk-px-4 mk-py-4 md:mk-py-28">
	<div class="mk-w-full mk-max-w-site mk-h-full mk-mx-auto md:mk-flex">
		<div class="md:mk-w-1/2 md:mk-order-2">
			<?php if ( ! empty( $video ) ) : ?>
				<video class="video-field mk-w-full md:mk-h-536 md:mk-object-cover" autoplay plays-inline muted loop>
					<source src="<?php echo esc_html( $video['url'] ); ?>" type="video/mp4">
				</video>
			<?php endif; ?>
		</div>
		<div class="md:mk-w-1/2 mk-flex mk-flex-col mk-justify-center mk-px-6 md:mk-px-8 mk-py-8 mk-bg-white">
			<div class="md:mk-max-w-sm md:mk-mx-auto">
				<?php if ( $heading ) : ?>
					<h2 class="mk-text-1sm-title md:mk-text-2sm-title mk-font-medium mk-uppercase mk-mb-3"><?php echo esc_html( $heading ); ?></h2>
				<?php endif; ?>
				<div class="mk-max-w-md mk-prose mk-prose-grey mk-text-lg">
					<?php echo wp_kses_post( $text ); ?>
				</div>
				<?php if ( ! empty( $cta['url'] ) ) : ?>
					<a class="btn btn-black mk-mt-8 md:mk-mt-10" href="<?php echo esc_url( $cta['url'] ); ?>" target="<?php echo esc_attr( $cta['target'] ); ?>">
						<?php echo esc_html( $cta['title'] ); ?>
						<?php echo wp_kses( addisonlee_svgs( 'arrow-right-white' ), allowed_svg_tags() ); ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>