<?php
/**
 * Logo row.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading            = get_field( 'heading' );
$logos              = get_field( 'logos' );
$cta                = get_field( 'cta' );
$remove_top_padding = get_field( 'remove_top_padding' );
$reduce_sizes       = get_field( 'reduce_logo_sizes' );
$background         = get_field( 'background' );

if ( $background === 'white' ) {
	$background = 'mk-bg-white';
	$text_color = 'mk-text-black';
} elseif ( $background === 'grey' ) {
	$background = 'mk-bg-third-grey';
	$text_color = 'mk-text-black';
} else {
	$background = 'mk-bg-black';
	$text_color = 'mk-text-white';
}

// Block ID.
$block_id = 'logo-row';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'logo-row';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_html( $class_name ); ?> mk-px-4 <?php echo $remove_top_padding ? 'mk-pb-28' : 'mk-py-28'; ?> <?php echo $background; ?>" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto">
		<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-text-center mk-mb-14 <?php echo $text_color; ?>"><?php echo esc_html( $heading ); ?></h2>
		<?php if ( count($logos) < 6 ) { ?>
			<div class="mk-flex mk-flex-wrap mk-justify-center">
				<?php
				foreach ( $logos as $logo ) {
					$image = $logo['logo'];
					?>
					<div class="mk-w-1/2 md:mk-w-1/3 lg:mk-w-1/5 mk-px-4 sm:mk-px-0">
						<img class="<?= $reduce_sizes ? "mk-h-12" : "mk-h-24"; ?> mk-w-auto mk-object-contain mk-mx-auto" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
					</div>
				<?php } ?>
			</div>
		<?php } else { ?>
			<div class="logo-row-slider">
				<div class="glide__track" data-glide-el="track">
					<ul class="glide__slides">
						<?php
						// Mobile.
						foreach ( $logos as $logo ) {
							$image = $logo['logo'];
							?>
							<li class="glide__slide">
								<img class="<?= $reduce_sizes ? "mk-h-12" : "mk-h-24"; ?> mk-w-auto mk-object-contain mk-mx-auto" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
							</li>
						<?php } ?>
					</ul>
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
