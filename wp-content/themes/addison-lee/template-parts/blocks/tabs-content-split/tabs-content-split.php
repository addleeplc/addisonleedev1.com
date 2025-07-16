<?php
/**
 * Testimonial Carousel.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white  = get_field( 'heading_white' );
$heading_yellow = get_field( 'heading_yellow' );
$subheading     = get_field( 'subheading' );
$text           = get_field( 'text' );
$tabs_content   = get_field( 'tabs_content' );

// Block ID.
$block_id = 'tabs-content-split';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'tabs-content-split';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_html( $class_name ); ?> mk-w-full mk-px-4 mk-py-12 md:mk-py-28" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-h-full mk-mx-auto">
		<div class="md:mk-flex mk-mb-12 md:mk-mb-14">
			<div class="md:mk-w-7/12 md:mk-pr-4">
				<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-mb-6 md:mk-mb-0">
					<span class="mk-text-white"><?php echo esc_html( $heading_white ); ?></span>
					<span class="mk-text-yellow"><?php echo esc_html( $heading_yellow ); ?></span>
				</h2>
			</div>
			<div class="md:mk-w-5/12">
				<h3 class="mk-text-1sm-title md:mk-text-sm-title mk-text-white mk-font-medium mk-uppercase mk-mb-2"><?php echo esc_html( $subheading ); ?></h3>
				<div class="mk-prose mk-prose-lighter-grey">
					<?php echo wp_kses_post( $text ); ?>
				</div>
			</div>
		</div>

		<?php
		if ( $tabs_content ) {
			// Desktop.
			?>
			<div class="mk-hidden md:mk-flex">
				<div class="mk-w-7/12 mk-pr-4">
					<?php
					$c = 0;
					foreach ( $tabs_content as $heading ) {
						$tab_title     = $heading['title'];
						$active_colour = $heading['active_colour'];
						// Record classes in tailwind
						// group-[.active]:mk-text-green group-[.active]:mk-text-yellow group-[.active]:mk-text-pink group-[.active]:mk-text-purple group-[.active]:mk-text-blue
						$id = sanitize_title( $tab_title );
						++$c;
						if ( $c === 1 ) {
							$active = ' active';
						} else {
							$active = '';
						}
						?>
						<div class="tab-btn mk-group mk-mb-8 mk-pb-2<?php echo esc_html( $active ); ?>" data-slug="<?php echo esc_html( $id ); ?>">
							<button class="mk-text-1sm-title mk-text-prism-grey mk-font-medium mk-uppercase mk-text-left group-[.active]:mk-text-<?php echo esc_html( $active_colour ); ?>"><?php echo esc_html( $tab_title ); ?></button>
						</div>
					<?php } ?>
				</div>
				<div class="content-container mk-w-5/12 mk-border-l mk-border-prism-grey mk-overflow-y-auto no-scrollbar">
					<?php
					foreach ( $tabs_content as $content ) {
						$tab_title = $content['title'];
						$text      = $content['text'];
						$icon      = $content['icon'];
						$image     = $content['image'];
						$id        = sanitize_title( $tab_title );
						?>
						<div id="<?php echo esc_html( $id ); ?>" class="content-section mk-flex mk-mb-12">
							<div class="mk-max-w-11 mk-min-w-11 mk-h-px mk-mt-5 mk-bg-prism-grey"></div>
							<div class="mk-pl-4">
								<div class="mk-flex mk-items-center mk-gap-4 mk-mb-2">
									<?php if ( $icon ) { ?>
										<div class="mk-max-w-12 mk-min-w-12">
											<img src="<?php echo esc_html( $icon['url'] ); ?>" alt="<?php echo esc_html( $icon['alt'] ); ?>">
										</div>
									<?php } ?>
									<h3 class="mk-text-sm-title mk-text-white mk-font-medium mk-uppercase"><?php echo esc_html( $tab_title ); ?></h3>
								</div>
								<div class="mk-prose mk-prose-lighter-grey">
									<?php echo wp_kses_post( $text ); ?>
								</div>
								<?php if ( $image ) { ?>
									<div class="mk-mt-8">
										<img src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
									</div>
								<?php } ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<?php // Mobile. ?>
			<div class="md:mk-hidden">
				<?php
				foreach ( $tabs_content as $content ) {
					$tab_title     = $content['title'];
					$text          = $content['text'];
					$icon          = $content['icon'];
					$active_colour = $content['active_colour'];
					?>
					<div class="accordion-section-wrap mk-group mk-mb-4 mk-overflow-hidden">
						<div class="accordion-toggle mk-mb-3">
							<div class="mk-max-w-12 mk-min-w-12">
								<img src="<?php echo esc_html( $icon['url'] ); ?>" alt="<?php echo esc_html( $icon['alt'] ); ?>">
							</div>
							<div class="mk-flex mk-justify-between mk-items-center">
								<h3 class="mk-text-1sm-title mk-font-medium mk-text-white mk-uppercase group-[.active]:mk-text-<?php echo esc_html( $active_colour ); ?>"><?php echo esc_html( $tab_title ); ?></h3>
								<div class="md:mk-hidden toggle-icon">
									<?php echo wp_kses( addisonlee_svgs( 'chevron-down-white' ), allowed_svg_tags() ); ?>
								</div>
							</div>
						</div>
						<div class="accordion-body mk-h-0 md:!mk-h-auto mk-transition-all mk-duration-300 mk-ease-bezier">
							<div class="accordion-inner mk-opacity-0 sm:!mk-opacity-100 mk-transition-all mk-duration-500 mk-ease-bezier">
								<div class="mk-prose mk-prose-light-grey mk-text-lg mk-pb-3 sm:mk-pb-0">
									<?php echo wp_kses_post( $text ); ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</div>

<style>
	.tab-btn.active button{
		font-style: italic;
	}
</style>

<script>
var tab_buttons = document.querySelectorAll( '.tab-btn' );
var container = document.querySelector('.content-container');
var sections = Array.from(container.querySelectorAll('.content-section'));

// Update active button on scroll.
let is_scrolling = false;
function updateActiveButton() {
	if (is_scrolling) return; // Skip updates if scrolling is manual.

	const containerTop = container.scrollTop;

	sections.forEach(function (section, index) {
		const section_top = section.offsetTop - container.offsetTop;
		const section_bottom = section_top + section.offsetHeight;

		// Check if the section is at the top of the container
		if (containerTop >= section_top && containerTop < section_bottom) {
			tab_buttons.forEach(function (tab) {
				tab.classList.remove('active');
			});

			tab_buttons[index].classList.add('active'); // Activate the corresponding button
		}
	});
}

tab_buttons.forEach(function (tab) {
	const btn = tab.querySelector('button');

	btn.addEventListener('click', function () {
		is_scrolling = true;

		// Remove active class from all buttons.
		tab_buttons.forEach(function (all_tabs) {
			all_tabs.classList.remove('active');
		});

		// Add active class to the clicked tab.
		tab.classList.add('active');

		// Scroll to the section
		const section_id = tab.getAttribute('data-slug');
		const target_section = document.getElementById(section_id);

		if (target_section) {
			container.scrollTo({
				top: target_section.offsetTop - container.offsetTop,
				behavior: 'smooth'
			});

			// Re-enable scroll-based updates after scrolling finishes.
			setTimeout(() => {
				is_scrolling = false;
			}, 800);
		}
	});
});

container.addEventListener('scroll', updateActiveButton);

// Update heights of container and sections.
function adjustHeights() {
	const container = document.querySelector('.content-container');
	const sections = Array.from(container.querySelectorAll('.content-section'));

	// Get the tallest section.
	const tallestHeight = Math.max(...sections.map(section => section.offsetHeight));

	// Apply the tallest height to the container and all sections.
	container.style.height = `${tallestHeight}px`;
	sections.forEach(section => {
		section.style.height = `${tallestHeight}px`;
	});
}

window.addEventListener('load', adjustHeights); // update heights on load.
window.addEventListener('resize', adjustHeights); // update heights on resize.


// Mobile accordions.
var accordion_wrap = document.querySelectorAll( '.accordion-section-wrap' );
accordion_wrap.forEach(
	function ( accordion) {
		const question =  accordion.querySelector( '.accordion-toggle' );
		question.addEventListener(
			'click',
			function () {
				let accordion_inner   =  accordion.querySelector( '.accordion-inner' );
				let accordion_body        =  accordion.querySelector( '.accordion-body' );
				let accordion_height = accordion_inner.offsetHeight;
				let toggle_icon   =  accordion.querySelector( '.toggle-icon' );

				if ( accordion.classList.contains( 'active' )) {
					accordion_body.style.height = '0px';
					accordion.classList.remove( 'active' );
					accordion_inner.classList.remove( 'mk-opacity-100' );
					toggle_icon.classList.remove( '-mk-rotate-180' );
				} else {
					accordion_body.style.height = accordion_height + 'px';
					accordion.classList.add( 'active' );
					accordion_inner.classList.add( 'mk-opacity-100' );
					toggle_icon.classList.add( '-mk-rotate-180' );
				}
			}
		);
	}
);
</script>