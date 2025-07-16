<?php
/**
 * Image / Text Grid Secondary.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white          = get_field( 'heading_white' );
$heading_yellow         = get_field( 'heading_yellow' );
$block_text             = get_field( 'text' );
$image_text_cards 	    = get_field( 'image_text_cards' );
$bottom_image_text_card = get_field( 'bottom_images__text_card' )[0];

// Block ID.
$block_id = 'image-text-grid-alternate';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'image-text-grid-alternate';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-w-full mk-px-4 mk-py-12 md:mk-py-28 mk-bg-black" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto">
		<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-text-center mk-uppercase mk-mb-8 md:mk-mb-16">
			<span class="mk-text-white"><?php echo esc_html( $heading_white ); ?></span><br>
			<span class="mk-text-yellow"><?php echo esc_html( $heading_yellow ); ?></span>
		</h2>
		<?php if ( !empty($block_text) ) { ?>
			<div class="mk-mb-8 md:mk-mb-12">
				<p class="mk-text-slate-light-grey mk-text-lg mk-text-center mk-pb-3 sm:mk-pb-0">
					<?php echo wp_kses_post( $block_text ); ?>
				</p>
			</div>
		<?php } ?>
		<?php if ( $image_text_cards ) { ?>
			<div class="mk-grid mk-grid-cols-1 md:mk-grid-cols-2 mk-gap-x-6 mk-gap-y-12 mk-mb-12 md:mk-mb-28">
				<?php
				foreach ( $image_text_cards as $card ) {
					$image       = $card['image'];
					$block_title = $card['title'];
					$text        = $card['text'];
					?>
					<div>
						<img class="mk-w-full mk-h-image-sm lg:mk-h-image mk-object-cover" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
						<div class="mk-bg-black">
							<h3 class="mk-text-2sm-title mk-text-white mk-font-medium mk-uppercase mk-mb-6 mk-pt-8"><?php echo esc_html( $block_title ); ?></h3>
							<div class="mk-text-slate-light-grey mk-text-base mk-content-list">
								<?php echo wp_kses_post( $text ); ?>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
		<?php if ( $bottom_image_text_card ) { ?>
			<div class="mk-max-w-site-1sm mk-mx-auto">
				<div class="md:mk-grid mk-grid-cols-1 md:mk-grid-cols-2 mk-gap-x-6 mk-gap-y-12">
					<?php
						$image       = $bottom_image_text_card['image'];
						$image_2     = $bottom_image_text_card['image_2'];
						$block_title = $bottom_image_text_card['title'];
						$text        = $bottom_image_text_card['text'];
					?>
					<div>
						<img class="mk-w-full mk-h-image-sm lg:mk-h-image mk-object-cover" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
					</div>
					<div class="mk-hidden md:mk-block">
						<img class="mk-w-full mk-h-image-sm lg:mk-h-image mk-object-cover" src="<?php echo esc_html( $image_2['url'] ); ?>" alt="<?php echo esc_html( $image_2['alt'] ); ?>">
					</div>
				</div>
				<div class="md:mk-flex mk-flex-col mk-justify-center">
					<div class="mk-bg-black">
						<h3 class="mk-text-1sm-title mk-text-white mk-font-medium mk-uppercase mk-mb-6 mk-pt-8"><?php echo esc_html( $block_title ); ?></h3>
						<div class="mk-text-slate-light-grey mk-text-base">
							<?php echo wp_kses_post( $text ); ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
