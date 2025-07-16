<?php
/**
 * Roadmap.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white         = get_field( 'heading_white' );
$heading_yellow        = get_field( 'heading_yellow' );
$heading_one_line      = get_field( 'heading_one_line' );
$text                  = get_field( 'text' );
$subheading            = get_field( 'subheading' );
$roadmap               = get_field( 'roadmap' );
$cta                   = get_field( 'cta' );
$display_larger_image  = get_field( 'display_larger_image' );
$remove_bottom_padding = get_field( 'remove_bottom_padding' );
// Calculate roadmap array to display in rows.
$roadmap_sections = array_chunk( $roadmap, 3 );
$total_sections   = count( $roadmap_sections );
$half_section     = ceil( $total_sections / 2 ); // Calculate half and rounded up if odd.
$rows             = array_slice( $roadmap_sections, 0, $half_section ); // Loop through first half.
$rows_num         = count( $rows );
$i                = 0;
$n                = 0;
$count_rows       = count( $roadmap_sections );

if ( $display_larger_image ) {
	$image_size  = 'mk-w-full';
	$text_colour = 'mk-text-white';
} else {
	$image_size  = 'mk-h-10 mk-w-auto mk-max-w-24 mk-max-h-10 mk-object-contain';
	$text_colour = 'mk-text-white/64';
}

// Block ID.
$block_id = 'roadmap-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'roadmap-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_html( $class_name ); ?> mk-px-4 mk-bg-black <?php echo $remove_bottom_padding ? 'mk-pt-12 md:mk-pt-28' : 'mk-py-12 md:mk-py-28'; ?>" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site-lg mk-mx-auto">
		<div class="mk-w-full mk-max-w-site-1sm mk-mx-auto mk-mb-14">
			<?php if ( $heading_white || $heading_yellow ) { ?>
				<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-text-center md:mk-text-left">
					<span class="<?php echo $heading_one_line ? '' : 'mk-block '; ?>mk-text-white"><?php echo esc_html( $heading_white ); ?></span>
					<span class="<?php echo $heading_one_line ? '' : 'mk-block '; ?>mk-text-yellow"><?php echo esc_html( $heading_yellow ); ?></span>
				</h2>
			<?php } ?>		
			<?php if ( $text ) { ?>
				<div class="mk-prose mk-prose-light-grey mk-text-lg mk-mt-6 mk-mb-20 ">
					<?php echo wp_kses_post( $text ); ?>
				</div>
			<?php } ?>
			<?php if ( $subheading ) { ?>
				<h3 class="mk-text-1md-title md:mk-text-2sm-title mk-font-medium mk-text-white mk-uppercase mk-mb-11 mk-mt-8"><?php echo wp_kses_post( $subheading ); ?></h3>
			<?php } ?>
		</div>
		<?php
		if ( $roadmap ) {
			// Roadmap desktop.
			?>
			<div class="mk-gap-y-8 mk-hidden xl:mk-flex">
				<div class="mk-flex mk-flex-col mk-gap-y-16 mk-w-[174px]">
					<?php
					foreach ( $rows as $section ) {
						++$i;
						if ( $i == 1 ) {
							?>
							<div class="roadmap-item mk-h-[260px] mk-flex mk-justify-end mk-items-center mk-gap-4">
								<div>
									<?php echo wp_kses( addisonlee_svgs( 'map-pin' ), allowed_svg_tags() ); ?>
								</div>
								<span class="mk-block mk-w-full mk-h-1.5 mk-bg-yellow mk-rounded"></span>
							</div>
						<?php } else { ?>
							<div class="roadmap-graphic mk-h-[584px] mk-flex mk-items-center">
								<div class="mk-w-full mk-h-full mk-relative mk-flex mk-items-center">
									<div class="mk-w-full mk-h-[calc(50%+44px)] mk-border-8 mk-border-yellow mk-border-r-0 mk-relative mk-rounded-[150px_0_0_150px] mk-mr-2">
										<span class="mk-w-4 mk-h-4 mk-bg-yellow mk-rounded-full mk-absolute -mk-top-3 -mk-right-1"></span>
										<span class="mk-w-4 mk-h-4 mk-bg-yellow mk-rounded-full mk-absolute -mk-bottom-3 -mk-right-1"></span>
									</div>
								</div>
							</div>
							<?php
						}
					}
					?>
				</div>
				<div class="mk-flex mk-flex-col mk-gap-y-16 mk-max-w-5xl mk-w-full mk-mx-auto">
					<?php
					$count = 0;
					foreach ( $roadmap_sections as $section ) {
						if ( $count % 2 === 0 ) {
							$reverse = '';
						} else {
							$reverse = 'mk-rotate-180';
						}
						++$count;
						?>
						<div class="mk-flex mk-flex-wrap even:mk-flex-row-reverse">
							<?php
							foreach ( $section as $cards ) {
								$logo       = $cards['logo'];
								$card_title = $cards['title'];
								$text       = $cards['text'];
								?>
									<div class="roadmap-item mk-w-[26%] mk-px-6">
										<?php if ( $logo ) { ?>
											<div class="mk-flex mk-items-center mk-mb-6">
												<img class="<?php echo esc_html( $image_size ); ?>" src="<?php echo esc_html( $logo['url'] ); ?>" alt="<?php echo esc_html( $logo['alt'] ); ?>">
											</div>
										<?php } ?>
										<p class="mk-text-xxs-title mk-font-medium mk-text-white mk-uppercase"><?php echo esc_html( $card_title ); ?></p>
										<p class="<?php echo esc_html( $text_colour ); ?>"><?php echo esc_html( $text ); ?></p>
									</div>
									<div class="mk-w-[11%] mk-flex mk-items-center last:mk-hidden <?php echo $reverse; ?>">
										<span class="mk-block mk-w-full mk-h-1.5 mk-bg-yellow mk-rounded"></span>
										<span class="mk-max-w-4 mk-min-w-4 mk-h-4 mk-bg-yellow mk-rounded-full -mk-ml-2 "></span>
									</div>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
				<div class="mk-flex mk-flex-col mk-gap-y-16 mk-w-[174px]">
					<?php
					foreach ( $rows as $section ) {
						++$n;
						if ( $rows_num === $n && $count_rows & 1 ) {
						} else {
							?>
						<div class="roadmap-graphic mk-h-[584px] mk-flex mk-items-center">
							<div class="mk-w-full mk-h-full mk-relative mk-flex mk-items-center">
								<div class="mk-w-full mk-h-[calc(50%+44px)] mk-border-8 mk-border-yellow mk-border-l-0 mk-relative mk-rounded-[0_150px_150px_0] mk-ml-2">
									<span class="mk-w-4 mk-h-4 mk-bg-yellow mk-rounded-full mk-absolute -mk-top-3 -mk-left-1"></span>
									<span class="mk-w-4 mk-h-4 mk-bg-yellow mk-rounded-full mk-absolute -mk-bottom-3 -mk-left-1"></span>
								</div>
							</div>
						</div>
							<?php
						}
					}
					?>
				</div>
			</div>
			<div class="roadmap-slider xl:mk-hidden">
				<div class="glide__track" data-glide-el="track">
					<ul class="glide__slides mk-flex">
						<?php
						// Mobile.
						foreach ( $roadmap as $card ) {
							$logo           = $card['logo'];
								$card_title = $card['title'];
								$text       = $card['text'];
							?>
							<li class="glide__slide !mk-h-[unset]">
								<div class="mk-h-full mk-bg-slate-grey mk-p-8">
									<div class="mk-flex mk-items-center mk-mb-6">
										<?php if ( $logo ) { ?>
											<img class="<?php echo esc_html( $image_size ); ?>" src="<?php echo esc_html( $logo['url'] ); ?>" alt="<?php echo esc_html( $logo['alt'] ); ?>">
										<?php } ?>
									</div>
									<p class="mk-text-xxs-title mk-font-medium mk-text-white mk-uppercase"><?php echo esc_html( $card_title ); ?></p>
									<p class="<?php echo esc_html( $text_colour ); ?>"><?php echo esc_html( $text ); ?></p>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>
				<div class="slider-controls mk-flex mk-justify-center mk-gap-2 mk-mt-8" data-glide-el="controls">
					<div class="slider-arrow slider-prev mk-cursor-pointer" data-glide-dir="&lt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-left-yellow' ), allowed_svg_tags() ); ?></div>
					<div class="slider-arrow slider-next mk-cursor-pointer" data-glide-dir="&gt;"><?php echo wp_kses( addisonlee_svgs( 'chevron-right-yellow' ), allowed_svg_tags() ); ?></div>
				</div>
			</div>
		<?php } ?>
		<?php if ( $cta ) { ?>
			<div class="mk-flex mk-justify-center mk-mt-10 md:mk-mt-16">
				<a class="btn" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'arrow-right' ), allowed_svg_tags() ); ?></a>
			</div>
		<?php } ?>
	</div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
	// Adjust roadmap card heights.
	function adjustRoadmapHeights() {
	const items = document.querySelectorAll(".roadmap-item");
	const graphics = document.querySelectorAll(".roadmap-graphic");

	if (!items.length) return;

	// Reset heights to auto.
	items.forEach(item => {
		item.style.height = "auto";
	});

	graphics.forEach(item => {
		item.style.height = "auto";
	});

	// Find the tallest item.
	let maxHeight = 0;
	items.forEach(item => {
		maxHeight = Math.max(maxHeight, item.offsetHeight);
	});

	// Apply the tallest height to all items.
	items.forEach(item => {
		item.style.height = `${maxHeight}px`;
	});

	graphics.forEach(item => {
		let graphic_height = maxHeight * 2 + 64;
		item.style.height = `${graphic_height}px`;
	});

	}

	// Run the function on load.
	adjustRoadmapHeights();

	// Run the function on window resize.
	window.addEventListener("resize", adjustRoadmapHeights);
});
</script>