<?php
/**
 * Simple carousel.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading         = get_field( 'heading' );
$intro_text      = get_field( 'intro_text' );
$cards           = get_field( 'cards' );
$cta             = get_field( 'cta' );
$basic_cta       = get_field( 'basic_cta' );
$slides_per_view = get_field( 'slides_per_view' ); // 2 or 3

// Block ID.
$block_id = 'simple-carousel-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'simple-carousel-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr( $class_name ); ?> mk-w-full mk-bg-white mk-px-4 mk-py-12 md:mk-py-28 mk-overflow-hidden" id="<?php echo esc_attr( $block_id ); ?>">
	<div class="simple-carousel-<?php echo esc_html( $slides_per_view ); ?> mk-w-full mk-max-w-site mk-h-full mk-mx-auto">
		<div class="mk-flex mk-justify-between mk-mb-8 md:mk-mb-10">
			<div>
				<h2 class="mk-text-1sm-title mk-font-medium mk-uppercase"><?php echo esc_html( $heading ); ?></h2>
				<?php if ( $intro_text ) : ?>
					<p class="mk-text-lg mk-text-black/64 mk-mt-4"><?php echo esc_html( $intro_text ); ?></p>
				<?php endif; ?>
			</div>
			<div class="slider-controls mk-hidden md:mk-flex mk-justify-end mk-gap-2 mk-mt-2" data-glide-el="controls">
				<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-md' ), allowed_svg_tags() ); ?></div>
				<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-md' ), allowed_svg_tags() ); ?></div>
			</div>
		</div>
		<div class="glide__track !mk-overflow-visible" data-glide-el="track">
			<ul class="glide__slides">
				<?php
				if ( ! empty( $cards ) ) :
					foreach ( $cards as $card ) :
						$image       = $card['image'];
						$card_title  = $card['title'];
						$description = $card['description'];
						$cta_link    = $card['cta'];
						?>
						<li class="glide__slide">
							<?php if ( $cta_link ) { ?>
								<a href="<?php echo esc_html( $cta_link['url'] ); ?>" target="<?php echo esc_html( $cta_link['target'] ); ?>">
							<?php } ?>
							<div class="mk-group mk-cta-group-element">
								<img class="mk-w-full mk-h-image-1sm mk-object-cover" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
								<div class="mk-h-[calc(100%-355px)] mk-px-6 mk-py-8 mk-border-b mk-border-r mk-border-l mk-border-black/16">
									<h3 class="mk-text-xl md:mk-text-2xl mk-font-medium"><?php echo esc_html( $card_title ); ?></h3>
									<?php if ( $description ) : ?>
										<p class="mk-text-text-grey mk-text-lg mk-mt-2 mk-min-h-[85px]"><?php echo esc_html( $description ); ?></p>
									<?php endif; ?>
									<?php if ( $cta_link ) { ?>
									<button class="cta_svg_animation mk-font-steagal mk-text-sm mk-leading-relaxed mk-font-bold mk-uppercase mk-inline-block mk-flex mk-items-center mk-mt-8 md:mk-mt-10">
										<?php echo esc_html( $cta_link['title'] ); ?>
										<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?>
									</button>
									<?php } ?>
								</div>
							</div>
							<?php if ( $cta_link ) { ?>
								</a>
							<?php } ?>
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
		<?php if ( $cta || is_array($basic_cta) ) : ?>
			<div class="mk-text-center mk-my-20 mk-block md:mk-flex mk-justify-center mk-items-center">
				<?php if ($basic_cta['link']) : ?>
					<p class="mk-text-lg mk-text-black/64 mk-mb-4 md:mk-mb-0 <?= $cta ? 'md:mk-mr-4' : ''; ?>">
						<?= esc_html($basic_cta['text']); ?>
						<a href="<?= esc_url( $basic_cta['link']['url'] ); ?>" class="mk-font-medium mk-underline hover:mk-no-underline" target="<?= esc_attr( $basic_cta['link']['target'] ); ?>">
							<?= esc_html( $basic_cta['link']['title'] ); ?>
						</a>
					</p>
				<?php endif; ?>
				<?php if ( $cta ): ?>
					<a href="<?php echo esc_url( $cta['url'] ); ?>" class="btn btn-black" target="<?php echo esc_attr( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?></a>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</div>
