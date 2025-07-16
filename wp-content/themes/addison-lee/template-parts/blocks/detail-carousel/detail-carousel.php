<?php
/**
 * Detail carousel.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white  = get_field( 'heading_white' );
$heading_yellow = get_field( 'heading_yellow' );
$cards          = get_field( 'cards' );

// Block ID.
$block_id = 'detail-carousel-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'detail-carousel-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_html( $class_name ); ?> mk-w-full mk-px-4 mk-py-12 md:mk-py-28 mk-overflow-hidden" id="<?php echo esc_html( $block_id ); ?>">
	<div class="detail-carousel mk-w-full mk-max-w-site mk-h-full mk-mx-auto">
		<div class="mk-flex mk-justify-between mk-mb-8 md:mk-mb-14">
			<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase">
				<span class="mk-text-white"><?php echo esc_html( $heading_white ); ?></span>
				<span class="mk-text-yellow"><?php echo esc_html( $heading_yellow ); ?></span>
			</h2>
			<div class="slider-controls mk-hidden md:mk-flex mk-justify-end mk-gap-2 mk-mt-2" data-glide-el="controls">
				<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-yellow' ), allowed_svg_tags() ); ?></div>
				<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-yellow' ), allowed_svg_tags() ); ?></div>
			</div>
		</div>
		<div class="glide__track !mk-overflow-visible" data-glide-el="track">
			<ul class="glide__slides">
				<?php
				foreach ( $cards as $card ) {
					$image      = $card['image'];
					$subtitle   = $card['subtitle'];
					$card_title = $card['title'];
					$text       = $card['text'];
					$cta        = $card['cta'];
					?>
					<li class="glide__slide">
						<img class="mk-w-full mk-h-image mk-object-cover mk-mb-9" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
						<div class="mk-h-[calc(100%-355px)]">
							<?php if ( $subtitle ) { ?>
								<p class="mk-text-xxxxxs-title mk-text-white/64 mk-uppercase mk-mb-5"><?php echo esc_html( $subtitle ); ?></p>
							<?php } ?>
							<?php if ( $card_title ) { ?>
								<h3 class="mk-text-1sm-title md:mk-text-2sm-title mk-font-medium mk-text-white mk-uppercase mk-mb-3"><?php echo esc_html( $card_title ); ?></h3>
							<?php } ?>
							<?php if ( $text ) { ?>
								<div class="mk-prose mk-prose-light-grey mk-text-lg">
									<?php echo wp_kses_post( $text ); ?>
								</div>
							<?php } ?>
							<?php if ( $cta ) { ?>
								<div class="mk-mt-4">
									<a class="btn-clear btn-clear-white" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?></a>
								</div>
							<?php } ?>
						</div>
					</li>
				<?php } ?>
			</ul>
		</div>
		<div class="slider-controls mk-flex md:mk-hidden mk-justify-center mk-gap-2 mk-mt-8" data-glide-el="controls">
			<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-yellow' ), allowed_svg_tags() ); ?></div>
			<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-yellow' ), allowed_svg_tags() ); ?></div>
		</div>
	</div>
</div>
