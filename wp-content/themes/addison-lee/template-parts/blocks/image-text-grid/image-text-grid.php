<?php
/**
 * Image / Text Grid.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white    = get_field( 'heading_white' );
$heading_yellow   = get_field( 'heading_yellow' );
$heading_one_line = get_field( 'heading_one_line' );
$image_text_cards = get_field( 'image_text_cards' );
$cta              = get_field( 'cta' );
$bg_colour        = get_field( 'background_colour' ); // mk-bg-black / mk-bg-white.
$card_bg_colour   = get_field( 'card_bg_colour' ); // mk-bg-black / mk-bg-white.

if ( ! $heading_one_line ) {
	$heading_display = 'mk-block';
} else {
	$heading_display = 'mk-inline-block';
}

// Background colour changes.
if ( 'mk-bg-white' === $bg_colour ) {
	$title_align          = 'mk-text-left';
	$heading_colour_white = 'mk-text-black';
	$heading_fsize        = 'md:mk-text-1sm-title';
	$card_fsize_title     = 'mk-text-1sm-title';
	$card_image_h         = 'lg:mk-h-image-1sm';
} else {
	$title_align          = 'mk-text-center';
	$heading_colour_white = 'mk-text-white';
	$heading_fsize        = 'md:mk-text-lg-title';
	$card_fsize_title     = 'mk-text-2sm-title';
	$card_image_h         = 'lg:mk-h-image-1sm';
}

if ( 'mk-bg-white' === $card_bg_colour ) {
	$card_bg          = 'mk-bg-white mk-px-6 mk-border mk-border-grey';
	$card_text_colour = 'mk-text-black';
} else {
	$card_bg          = 'mk-bg-black mk-px-6';
	$card_text_colour = 'mk-text-white';
}

// Block ID.
$block_id = 'image-text-grid';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'image-text-grid';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-w-full mk-px-4 mk-py-12 md:mk-py-28 <?php echo esc_html( $bg_colour ); ?>" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto">
		<h2 class="mk-text-1md-title <?php echo esc_html( $heading_fsize ); ?> mk-font-medium mk-uppercase mk-mb-8 md:mk-mb-16 <?php echo esc_html( $title_align ); ?>">
			<span class="<?php echo esc_html( $heading_display ); ?> <?php echo esc_html( $heading_colour_white ); ?>"><?php echo esc_html( $heading_white ); ?></span>
			<span class="<?php echo esc_html( $heading_display ); ?> mk-text-yellow"><?php echo esc_html( $heading_yellow ); ?></span>
		</h2>
		<?php if ( $image_text_cards ) { ?>
			<div class="mk-grid mk-grid-cols-1 md:mk-grid-cols-2 mk-gap-x-6 mk-gap-y-12">
				<?php
				foreach ( $image_text_cards as $card ) {
					$image       = $card['image'];
					$block_title = $card['title'];
					$text        = $card['text'];
					$card_cta    = $card['cta'];
					$card_cta_id = $card['cta_id'];
					?>
					<div>
						<img class="mk-w-full mk-h-image-sm <?php echo esc_html( $card_image_h ); ?>  mk-object-cover" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
						<div class="<?php echo esc_html( $card_bg ); ?> ">
							<h3 class="<?php echo esc_html( $card_fsize_title ); ?> <?php echo esc_html( $card_text_colour ); ?> mk-font-medium mk-uppercase mk-mb-6 mk-pt-8"><?php echo esc_html( $block_title ); ?></h3>
							<div class="<?php echo esc_html( $card_text_colour ); ?> mk-text-lg mk-content-list">
								<?php echo wp_kses_post( $text ); ?>
							</div>
							<?php if ( $card_cta ) { ?>
								<div class="mk-flex mk-py-6">
									<a id="<?php echo esc_html( $card_cta_id ); ?>" 
									class="btn <?php echo ( 'mk-bg-white' === $card_bg_colour ) ? 'btn-black' : ''; ?>" 
									href="<?php echo esc_html( $card_cta['url'] ); ?>" 
									target="<?php echo esc_html( $card_cta['target'] ); ?>">
									<?php echo esc_html( $card_cta['title'] ); ?>
									<?php
									// Determine the SVG icon
									$svg_icon = ( 'mk-bg-white' === $card_bg_colour ) ? 'arrow-right-white' : 'arrow-right';
									echo wp_kses( addisonlee_svgs( $svg_icon ), allowed_svg_tags() );
									?>
									</a>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
		<?php if ( $cta ) { ?>
			<div class="mk-flex mk-justify-center mk-mt-16 md:mk-mt-24">
				<a class="btn" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'arrow-right' ), allowed_svg_tags() ); ?></a>
			</div>
		<?php } ?>
	</div>
</div>
