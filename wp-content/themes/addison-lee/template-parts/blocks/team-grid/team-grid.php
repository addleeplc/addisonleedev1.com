<?php
/**
 * Team Grid.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white  = get_field( 'heading_white' );
$heading_yellow = get_field( 'heading_yellow' );
$team_cards     = get_field( 'team_cards' );
$cta            = get_field( 'cta' );

// Block ID.
$block_id = 'team-grid';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'team-grid';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-w-full mk-px-4 mk-py-12 md:mk-py-28" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto">
		<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-mb-8 md:mk-mb-16 mk-text-center md:mk-text-left">
			<span class="mk-block md:mk-inline-block mk-text-white"><?php echo esc_html( $heading_white ); ?></span>
			<span class="mk-block md:mk-inline-block mk-text-yellow"><?php echo esc_html( $heading_yellow ); ?></span>
		</h2>
		<?php if ( $team_cards ) { ?>
			<div class="mk-hidden md:mk-grid mk-grid-cols-2 lg:mk-grid-cols-3 mk-gap-x-4 mk-gap-y-16">
				<?php
				// Desktop.
				foreach ( $team_cards as $card ) {
					$image     = $card['image'];
					$name      = $card['name'];
					$job_title = $card['job_title'];
					?>
					<div>
						<?php if ( $image ) { ?>
							<img class="mk-w-full mk-h-[523px] mk-object-cover mk-mb-6" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
						<?php } ?>
						<p class="mk-text-1sm-title mk-font-medium mk-text-white mk-uppercase mk-mb-2"><?php echo esc_html( $name ); ?></p>
						<p class="mk-text-lg mk-text-white/64"><?php echo esc_html( $job_title ); ?></p>
					</div>
				<?php } ?>
			</div>
			<div class="mobile-view-slider md:mk-hidden">
					<div class="glide__track" data-glide-el="track">
						<ul class="glide__slides mk-flex mk-items-center">
							<?php
							// Mobile.
							foreach ( $team_cards as $card ) {
								$image     = $card['image'];
								$name      = $card['name'];
								$job_title = $card['job_title'];
								?>
								<li class="glide__slide">
									<div>
										<?php if ( $image ) { ?>
											<img class="mk-w-full mk-h-[523px] mk-object-cover mk-mb-6" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
										<?php } ?>
										<p class="mk-text-1sm-title mk-font-medium mk-text-white mk-uppercase mk-mb-2"><?php echo esc_html( $name ); ?></p>
										<p class="mk-text-lg mk-text-white/64"><?php echo esc_html( $job_title ); ?></p>
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
			<div class="mk-flex mk-justify-center mk-mt-12 md:mk-mt-16">
				<a class="btn" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'arrow-right' ), allowed_svg_tags() ); ?></a>
			</div>
		<?php } ?>
	</div>
</div>
