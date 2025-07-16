<?php
/**
 * Awards.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading         = get_field( 'heading' );
$text            = get_field( 'text' );
$awards_sections = get_field( 'awards_section' );

// Block ID.
$block_id = 'awards-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'awards-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-bg-white mk-px-4 mk-pt-12 md:mk-pt-28" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto">
		<?php if ( $heading ) { ?>
			<h2 class="mk-text-1sm-title mk-font-medium mk-uppercase"><?php echo esc_html( $heading ); ?></h2>
		<?php } ?>
		<?php if ( $text ) { ?>
			<div class="mk-prose mk-text-lg mk-mt-3">
				<?php echo wp_kses_post( $text ); ?>
			</div>
		<?php } ?>
		<?php if ( $awards_sections ) { ?>
			<div class="mk-mt-16">
				<?php
				$count = 0;
				foreach ( $awards_sections as $section ) {
					$year_title = $section['year'];
					$awards     = $section['award'];
					++$count;
					// Only show 3 on initial load.
					if ( $count > 3 ) {
						$hide_section = ' mk-hidden';
					} else {
						$hide_section = '';
					}
					?>
					<div class="awards-section mk-w-full mk-pb-16 md:mk-pb-28 mk-px-4 md:mk-px-0<?php echo esc_html( $hide_section ); ?>">
						<div class="mk-border-b mk-border-secondary-grey">
							<h3 class="mk-text-1sm-title mk-font-medium mk-uppercase"><?php echo esc_html( $year_title ); ?></h3>
							<?php if ( $awards ) { ?>
								<div class="mk-flex mk-flex-wrap mk-justify-center mk-gap-y-6 -mk-mx-8 mk-py-12">
									<?php
									foreach ( $awards as $award ) {
										$logo = $award['logo'];
										$text = $award['text'];
										?>
										<div class="mk-w-1/2 md:mk-w-1/5 mk-px-8">
											<img class="mk-w-full mk-h-full mk-max-h-24 mk-object-contain mk-object-center" src="<?php echo esc_html( $logo['url'] ); ?>" at="<?php echo esc_html( $logo['alt'] ); ?>">
											<?php if ( $text ) { ?>
												<div class="mk-prose mk-text-sm mk-text-center mk-mt-3">
													<?php echo wp_kses_post( $text ); ?>
												</div>
											<?php } ?>
										</div>
									<?php } ?>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
				<?php if ( count( $awards_sections ) > 3 ) { ?>
					<div class="load-more mk-pb-12 md:mk-pb-28 mk-border-b mk-border-secondary-grey mk-text-center">
						<div class="load-more-awards-btn btn btn-black mk-cursor-pointer">VIEW MORE</div>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</div>

<script>
// Awards load more button.
let awards_load_more = document.querySelectorAll( '.awards-block' );
awards_load_more.forEach(
	function (awards_block) {
		let btn  = awards_block.querySelector( '.load-more-awards-btn' );
		let awards = awards_block.querySelectorAll( '.awards-section' );
		
		if (btn) {
			btn.addEventListener(
				"click",
				function () {
					let load_more = this.closest('.load-more');
					awards.forEach(
						function (awards_section) {
							awards_section.classList.add( '!mk-block' );
						}
					);
					load_more.classList.add( '!mk-hidden' );
				}
			);
		}
	}
);
</script>