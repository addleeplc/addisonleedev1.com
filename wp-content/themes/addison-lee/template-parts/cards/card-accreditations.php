<?php
/**
 * The template for the accreditations card.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$card_id        = $args['id'] ?? null;
$card_title     = get_the_title( $card_id );
$text           = get_field( 'text', $card_id );
$accreditations = get_field( 'accreditation', $card_id );
?>

<div class="sm:mk-w-1/2 md:mk-w-1/3 mk-mb-4 md:mk-mb-12 mk-px-2">
	<div class="mk-h-full mk-flex mk-flex-col mk-justify-between mk-bg-third-grey mk-px-6 mk-py-8">
		<div>
			<h3 class="mk-font-steagal mk-text-xl md:mk-text-2xl mk-font-medium mk-mb-4"><?php echo esc_html( $card_title ); ?></h3>
			<div class="mk-prose mk-prose-grey mk-text-lg">
				<?php echo wp_kses_post( $text ); ?>
			</div>
		</div>
		<div class="mk-flex mk-flex-wrap mk-justify-between mk-gap-4 mk-mt-10">
			<?php
			if ( $accreditations ) {
				foreach ( $accreditations as $accreditation ) {
					$file = $accreditation['pdf'];
					$text = $accreditation['text'];
					?>
					<a class="mk-group mk-font-steagal mk-text-sm mk-font-medium mk-uppercase mk-flex mk-items-center mk-gap-1" href="<?php echo esc_html( $file['url'] ); ?>" target="_blank">
						<span><?php echo esc_html( $text ); ?></span>
						<span class="mk-transition-transform mk-duration-300 mk-ease-bezier group-hover:mk-translate-x-1"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?></span>
					</a>
					<?php
				}
			}
			?>
		</div>
	</div>
</div>
