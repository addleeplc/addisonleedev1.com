<?php
/**
 * Middle Resources Template
 *
 * @package AddisonLee
 */

$post_id = get_the_ID();
// variables of the Upper Section
$full_description = get_field( 'full_description', $post_id );
$center_cta       = get_field( 'center_cta', $post_id );
// variables of the Bottom Section
$title    = get_field( 'title', $post_id );
$subtitle = get_field( 'subtitle', $post_id );
$left_cta = get_field( 'left_cta', $post_id );
?>

<?php if ( $full_description || $title ) : ?>
	<section class="middle-resource mk-w-full mk-bg-third-grey ">
		<div class="mk-max-w-site mk-mx-auto mk-h-full mk-flex mk-items-end mk-pb-20">
			<div class="mk-max-w-site-md ">

				<!-- Upper Section -->
				<div class="mk-py-8 md:mk-py-20 mk-border-b-2 mk-border-black/16 mk-mx-4 md:mk-mx-0">

					<?php if ( ! empty( $full_description ) ) : ?>
						<div class="mk-prose mk-w-full mk-text-lg !mk-text-black/64 mk-mt-6">
							<?php echo wp_kses_post( $full_description ); ?>
						</div>
					<?php endif; ?>

					<?php if ( ! empty( $center_cta ) ) : ?>
						<div class="mk-mt-6 mk-flex mk-justify-center ">
							<a class="btn btn-black play-btn mk-mt-8 md:mk-mt-10" href="<?php echo esc_url( $center_cta['url'] ); ?>" target="<?php echo esc_attr( $center_cta['target'] ); ?>">
								<?php echo esc_html( $center_cta['title'] ); ?>
								<?php echo wp_kses( addisonlee_svgs( 'arrow-right-white' ), allowed_svg_tags() ); ?>
							</a>
						</div>
					<?php endif; ?>

				</div>

				<!-- Bottom Section -->
				<div class="mk-py-8 md:mk-py-20 mk-mx-4 md:mk-mx-0">

					<?php if ( ! empty( $title ) ) : ?>
						<h3 class="mk-text-sm-title mk-font-medium mk-text-black mk-mb-4 mk-tracking-normal"><?php echo esc_html( $title ); ?></h3>
					<?php endif; ?>

					<?php if ( ! empty( $subtitle ) ) : ?>
						<p class="mk-prose mk-w-full mk-text-lg !mk-text-black/64"><?php echo esc_html( $subtitle ); ?></p>
					<?php endif; ?>

					<?php if ( ! empty( $left_cta ) ) : ?>
						<div class="mk-mt-6">
							<a class="btn btn-black play-btn mk-mt-4 md:mk-mt-6" href="<?php echo esc_url( $left_cta['url'] ); ?>" target="<?php echo esc_attr( $left_cta['target'] ); ?>">
								<?php echo esc_html( $left_cta['title'] ); ?>
								<?php echo wp_kses( addisonlee_svgs( 'arrow-right-white' ), allowed_svg_tags() ); ?>
							</a>
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
