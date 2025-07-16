<?php
/**
 * Simple grid carousel.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading    = get_field( 'heading' );
$intro_text = get_field( 'intro_text' );
$cards      = get_field( 'cards' );
$cta        = get_field( 'cta' );

$odd     = array();
$even    = array();
$counter = 0; // Counter to track the group

foreach ( $cards as $k => $v ) {
	// Determine the group based on the counter (2 items per group)
	if ( floor( $counter / 2 ) % 2 == 0 ) {
		$even[] = $v; // Add to $even if in an even group
	} else {
		$odd[] = $v; // Add to $odd if in an odd group
	}

	++$counter; // Increment the counter
}

if ( count( $odd ) < count( $even ) ) {
	$odd[] = array(
		'title' => '',
		'image' => array(),
	);
}

// Block ID.
$block_id = 'simple-grid-carousel-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'simple-grid-carousel-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr( $class_name ); ?> mk-w-full mk-bg-white mk-px-4 mk-py-12 md:mk-py-28 mk-overflow-hidden" id="<?php echo esc_attr( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-h-full mk-mx-auto">
		<div class="simple-grid-carousel-top">
			<div class="mk-flex mk-justify-between mk-mb-8 md:mk-mb-10">
				<div>
					<h2 class="mk-text-1sm-title mk-font-medium mk-uppercase"><?php echo esc_html( $heading ); ?></h2>
					<?php if ( $intro_text ) : ?>
						<p class="mk-text-lg mk-text-black/64 mk-mt-4"><?php echo esc_html( $intro_text ); ?></p>
					<?php endif; ?>
				</div>
				<?php if ( count( $cards ) > 4 ) { ?>
					<div class="slider-controls mk-hidden md:mk-flex mk-justify-end mk-gap-2 mk-mt-2" data-glide-el="controls">
						<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-md' ), allowed_svg_tags() ); ?></div>
						<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-md' ), allowed_svg_tags() ); ?></div>
					</div>
				<?php } ?>
			</div>
			<div class="glide__track mk-hidden md:mk-block" data-glide-el="track">
				<ul class="glide__slides">
					<?php
					if ( ! empty( $even ) ) :
						foreach ( $even as $card ) :
							$card_args = array(
								'card' => $card,
							);
							?>
							<li class="glide__slide">
								<?php get_template_part( 'template-parts/blocks/simple-grid-carousel/simple-grid', 'card', $card_args ); ?>
							</li>
							<?php
						endforeach;
					endif;
					?>
				</ul>
			</div>
		</div>
		<div class="simple-grid-carousel-bottom mk-mt-12 mk-hidden md:mk-block">
			<div class="glide__track" data-glide-el="track">
					<ul class="glide__slides">
						<?php
						if ( ! empty( $odd ) ) :
							foreach ( $odd as $card ) :
								$card_args = array(
									'card' => $card,
								);
								?>
								<li class="glide__slide">
									<?php get_template_part( 'template-parts/blocks/simple-grid-carousel/simple-grid', 'card', $card_args ); ?>
								</li>
								<?php
							endforeach;
						endif;
						?>
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-view-slider md:mk-hidden">
			<div class="glide__track !mk-overflow-visible" data-glide-el="track">
				<ul class="glide__slides">
				<?php
				if ( ! empty( $cards ) ) :
					foreach ( $cards as $card ) :
						$card_args = array(
							'card' => $card,
						);
						?>
							<li class="glide__slide">
							<?php get_template_part( 'template-parts/blocks/simple-grid-carousel/simple-grid', 'card', $card_args ); ?>
							</li>
							<?php
						endforeach;
					endif;
				?>
				</ul>
			</div>
			<div class="slider-controls mk-flex md:mk-hidden mk-justify-center mk-gap-2 mk-mt-8" data-glide-el="controls">
				<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-md' ), allowed_svg_tags() ); ?></div>
				<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-md' ), allowed_svg_tags() ); ?></div>
			</div>
		</div>
	</div>
</div>
