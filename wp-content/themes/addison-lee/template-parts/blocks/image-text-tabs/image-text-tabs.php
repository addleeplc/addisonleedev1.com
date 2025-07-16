<?php
/**
 * Image / Text with Tabs.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white    = get_field( 'heading_white' );
$heading_yellow   = get_field( 'heading_yellow' );
$image_text_cards = get_field( 'image_text_cards' );

// Block ID.
$block_id = 'image-text-tabs';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'image-text-tabs';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-w-full  mk-py-12 md:mk-py-28" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-px-4">
		<div class="mk-w-full mk-max-w-site mk-mx-auto mk-tabs-heading">
			<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-mb-8 md:mk-mb-16">
				<span class="mk-inline-block mk-text-white"><?php echo esc_html( $heading_white ); ?></span>
				<span class="mk-inline-block mk-text-yellow"><?php echo esc_html( $heading_yellow ); ?></span>
			</h2>
		</div>
	</div>
	<?php if ( $image_text_cards ) { ?>
		<div class="tabs-carousel-content fade-slider">
			<div class="mk-flex mk-justify-end">
				<div class="scroller-container mk-w-1/2 -mk-mb-16">
					<div class="glide__bullets mk-overflow-auto mk-flex mk-gap-12" data-glide-el="controls[nav]">
						<?php
						$c = 0;
						foreach ( $image_text_cards as $card ) {
							$card_title = $card['title'];
							?>
								<button class="glide__bullet mk-whitespace-nowrap mk-text-sm-title mk-font-medium mk-text-white mk-uppercase" data-glide-dir="=<?php echo esc_html( $c ); ?>"><?php echo esc_html( $card_title ); ?></button>
							<?php
							++$c;
						}
						?>
					</div>
				</div>
			</div>
			<div class="mk-px-4">
				<div class="mk-w-full mk-max-w-site mk-mx-auto mk-mt-7 mk-pt-16 mk-border-t border-secondary-grey">
					<div class="glide__track" data-glide-el="track">
						<ul class="glide__slides">
						<?php
						foreach ( $image_text_cards as $card ) {
							$image      = $card['image'];
							$card_title = $card['title'];
							$text       = $card['text'];
							$cta        = $card['cta'];
							?>
							<li class="glide__slide">
								<div class="md:mk-flex md:mk-flex-row-reverse mk-gap-10">
									<div class="md:mk-w-1/2 mk-mb-12 md:mk-mb-0">
										<img class="mk-w-full mk-h-image-1md mk-object-cover" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
									</div>
									<div class="md:mk-w-1/2 mk-flex mk-flex-col mk-justify-between">
										<div>
											<h3 class="mk-text-sm-title mk-font-medium mk-text-white mk-uppercase mk-mb-4"><?php echo esc_html( $card_title ); ?></h3>
											<div class="mk-max-w-md mk-prose mk-prose-light-grey mk-text-lg">
												<?php echo wp_kses_post( $text ); ?>
											</div>
											<?php if ( $cta ) { ?>
												<a class="btn mk-mt-8" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'arrow-right' ), allowed_svg_tags() ); ?></a>
											<?php } ?>
										</div>
									</div>
								</div>
							</li>
						<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

// Add padding to scroller
function tabsScroll() {
	const scrollCont = document.querySelector('.mk-tabs-heading');
	if (scrollCont) {
	const scrollLeft = scrollCont.getBoundingClientRect().left;
	const bullets = document.querySelector('.glide__bullets');
	if (bullets) {
		bullets.style.paddingLeft = `${scrollLeft}px`;
		bullets.style.paddingRight = `${scrollLeft}px`;
	}
	}
}

tabsScroll();

// Adjust padding on window resize
window.addEventListener('resize', tabsScroll);
});
</script>


<style>
.glide__bullet--active{
	color: #FFD900;
}
.glide__bullets{
	scroll-snap-type: x mandatory;
}
.glide__bullets::-webkit-scrollbar {
	display: none;
}
</style>