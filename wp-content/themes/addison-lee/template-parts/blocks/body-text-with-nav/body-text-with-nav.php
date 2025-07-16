<?php
/**
 * Body Text With Nav Block.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$page_heading         = get_field( 'page_heading' );
$full_content_heading = get_field( 'full_content_heading' );
$navigation_heading   = get_field( 'navigation_heading' );
$content              = get_field( 'content' );

// Block ID.
$block_id = 'body-text-with-nav-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'body-text-with-nav-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-bg-white md:mk-px-4" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-max-w-site mk-mx-auto md:mk-flex">
		<div class="mk-relative mk-bg-black md:mk-max-w-xs md:mk-min-w-80 mk-pt-12 md:mk-pt-20 mk-pb-6 md:mk-pb-32 mk-px-4 md:mk-pl-0 md:mk-pr-12 mk-text-white">
			<span class="mk-hidden md:mk-block mk-absolute mk-top-0 mk-w-screen mk-h-full mk-left-[-100vw] mk-bg-black"></span>
			<div class="md:mk-sticky md:mk-top-40">
				<p class="mk-text-lg mk-font-medium mk-pl-4 md:mk-pl-0"><?php echo esc_html( $navigation_heading ); ?></p>
				<?php // Desktop nav. ?>
				<div class="mk-hidden md:mk-block mk-mt-10 mk-max-h-[calc(72vh-108px)] mk-overflow-auto">
					<div class="mk-w-20 mk-h-px mk-bg-secondary-grey mk-mb-8"></div>
					<button class="body-nav-btn mk-block mk-mb-6 mk-text-yellow mk-font-medium" data-nav="show-all"><?php echo esc_html( $full_content_heading ); ?></button>
					<?php
					foreach ( $content as $section ) {
						$section_title = $section['section_title'];
						$nav_slug      = sanitize_title( $section_title );
						?>
						<button class="body-nav-btn mk-block mk-mb-6 last:mk-mb-0 mk-text-left" data-nav="<?php echo esc_html( $nav_slug ); ?>"><?php echo esc_html( $section_title ); ?></button>
					<?php } ?>
				</div>
				<?php // Mobile nav. ?>
				<div class="md:mk-hidden mk-relative mk-mt-4">
					<select id="body-nav-select" class="select-body-text-nav mk-w-full mk-appearance-none mk-bg-transparent mk-text-yellow mk-font-medium mk-p-4 mk-border mk-border-third-grey mk-rounded mk-outline-none">
						<option value="show-all" selected><?php echo esc_html( $full_content_heading ); ?></option>
						<?php
						foreach ( $content as $section ) {
							$section_title = $section['section_title'];
							$nav_slug      = sanitize_title( $section_title );
							?>
							<option value="<?php echo esc_html( $nav_slug ); ?>"><?php echo esc_html( $section_title ); ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
		</div>
		<div class="mk-pt-10 md:mk-pt-36 mk-pb-24 md:mk-pb-40 mk-px-4 md:mk-pl-12">
			<h1 class="mk-text-3.5xl mk-font-medium mk-leading-tight mk-tracking-[3.2px] mk-uppercase mk-pb-12 md:mk-pb-16"><?php echo esc_html( $page_heading ); ?></h1>
			<?php
			if ( $content ) {
				foreach ( $content as $section ) {
					$section_title = $section['section_title'];
					$nav_slug      = sanitize_title( $section_title );
					$text          = $section['text'];
					?>
					<div id="<?php echo esc_html( $nav_slug ); ?>" class="body-nav-content mk-mb-10 last:mk-mb-0">
						<?php if ( $section_title ) { ?>
							<h3 class="mk-text-xl md:mk-text-2xl mk-font-medium mk-leading-heading mk-mb-8"><?php echo esc_html( $section_title ); ?></h3>
						<?php } ?>
						<div class="mk-prose mk-w-full">
							<?php echo wp_kses_post( $text ); ?>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</div>
