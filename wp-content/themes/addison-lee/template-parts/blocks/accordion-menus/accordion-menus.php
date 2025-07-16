<?php
/**
 * Accordion Menus
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$title                 = get_field( 'title' );
$subtitle              = get_field( 'subtitle' );
$menus                 = get_field( 'menus' );
$accordion_bottom_text = get_field( 'text' );

// Block ID.
$block_id = 'accordion-menus';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'accordion-menus';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-px-4 mk-py-10 md:mk-py-28" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto">
		<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-text-white mk-uppercase mk-text-center"><?php echo esc_html( $title ); ?></h2>
		<div class="mk-max-w-[800px] mk-mx-auto mk-mt-7">
			<p class="mk-text-secondary-grey mk-text-lg mk-text-center"><?php echo esc_html( $subtitle ); ?></p>
		</div>
		<div class="mk-mt-10 md:mk-mt-16">
			<?php if ( $menus ) { ?>
				<div class="accordion-container">
					<?php foreach ( $menus as $menu ) : ?>
						<div class="accordion-item mk-mb-8 mk-pb-8">
							<!-- Accordion header -->
							<div class="accordion-header mk-flex mk-justify-between mk-items-center">
								<p class="menu-title mk-text-white mk-uppercase mk-font-bold mk-text-1sm-title"><?php echo esc_html( $menu['menu_title'] ); ?></p>
								<span class="md:mk-hidden"><?php echo wp_kses( addisonlee_svgs( 'chevron-down-white' ), allowed_svg_tags() ); ?></span>
							</div>

							<!-- Accordion content (submenus) -->
							<div class="accordion-content mk-pt-4">
								<?php if ( isset( $menu['submenu'] ) && is_array( $menu['submenu'] ) ) : ?>
									<div class="submenu-container">
										<?php foreach ( $menu['submenu'] as $submenu ) : ?>
											<hr class="submenu-divider mk-mt-4 mk-mb-6 mk-border-gray-600">
											<div class="submenu-item">
												<p class="submenu-title mk-text-white mk-capitalize mk-pb-4"><?php echo esc_html( $submenu['submenu_title'] ); ?></p>
												<ul class="submenu-items mk-list-none">
													<?php
													$items      = explode( ';', $submenu['items'] );
													$item_count = count( $items );

													// Determine chunk size based on number of items
													$chunk_size = $item_count > 20 ? 11 : 7;

													// Split items into chunks
													$chunked_items = array_chunk( $items, $chunk_size );

													// Set grid classes
													$columns = 'mk-grid mk-grid-cols-1 md:mk-grid-cols-2 lg:mk-grid-cols-3 md:mk-gap-12 mk-pb-8';
													?>
													
													<div class="submenu-item-list <?php echo $columns; ?>">
														<?php foreach ( $chunked_items as $chunk ) : ?>
															<div class="submenu-column">
																<?php foreach ( $chunk as $item ) : ?>
																	<div class="mk-text-gray-400 mk-py-1"><?php echo esc_html( ucfirst( trim( $item ) ) ); ?></div>
																<?php endforeach; ?>
															</div>
														<?php endforeach; ?>
													</div>
												</ul>
											</div>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php } ?>
		</div>
		<?php if ( !empty($accordion_bottom_text) ) { ?>
			<hr class="submenu-divider mk-mt-4 mk-mb-6 mk-border-gray-600">
			<div class="mk-mt-10 md:mk-mt-16">
				<p class="mk-text-gray-400">
					<?php echo wp_kses_post($accordion_bottom_text); ?>
				</p>
			</div>
		<?php } ?>
	</div>
</div>

<style>
/* Default - for mobile screens (accordion functionality) */
.accordion-content {
	overflow: hidden;
	height: 0;
	opacity: 0;
	transition: height 0.3s ease, opacity 0.3s ease;
}

/* When the accordion item is open on mobile */
.accordion-item.open .accordion-content {
	height: auto;
	opacity: 1;
}

/* For tablet and desktop - show all content without accordion functionality */
@media (min-width: 768px) {
	.accordion-content {
		height: auto !important; /* Ensure content is always expanded */
		opacity: 1 !important;  /* Ensure content is visible */
		overflow: visible !important; /* Allow content to be visible */
	}
	
	.accordion-header {
		cursor: default; /* Disable the click behavior on header */
	}
	
	/* Optionally, disable transition effects on larger screens */
	.accordion-content {
		transition: none !important;
	}
}

</style>
