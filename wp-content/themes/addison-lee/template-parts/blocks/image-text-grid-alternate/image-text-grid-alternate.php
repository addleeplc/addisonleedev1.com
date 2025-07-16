<?php
/**
 * Image / Text Grid Alternate.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white        = get_field( 'heading_white' );
$heading_yellow       = get_field( 'heading_yellow' );
$image_text_cards 	  = get_field( 'image_text_cards' );
$main_image_text_card = get_field( 'main_image__text_card' )[0];

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
	<div class="mk-w-full mk-max-w-site-1sm mk-mx-auto">
		<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-mb-8 md:mk-mb-16">
			<span class="mk-text-white"><?php echo esc_html( $heading_white ); ?></span><br>
			<span class="mk-text-yellow"><?php echo esc_html( $heading_yellow ); ?></span>
		</h2>
		<?php if ( $main_image_text_card ) { ?>
			<div class="md:mk-grid mk-grid-cols-1 md:mk-grid-cols-2 mk-gap-x-6 mk-gap-y-12 mk-pb-12">
				<?php
					$image       = $main_image_text_card['image'];
					$block_title = $main_image_text_card['title'];
					$text        = $main_image_text_card['text'];
				?>
				<div>
					<img class="mk-w-full mk-h-image-sm lg:mk-h-image mk-object-cover" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
				</div>
				<div class="md:mk-flex mk-flex-col mk-justify-center">
					<div class="mk-bg-black">
						<h3 class="mk-text-2sm-title mk-text-white mk-font-medium mk-uppercase mk-mb-6 mk-pt-8 lg:mk-pt-0"><?php echo esc_html( $block_title ); ?></h3>
						<div class="mk-text-slate-light-grey mk-text-base">
							<?php echo wp_kses_post( $text ); ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		<?php if ( $image_text_cards ) { ?>
			<div class="mk-grid mk-grid-cols-1 md:mk-grid-cols-2 mk-gap-x-6 mk-gap-y-12">
				<?php
				foreach ( $image_text_cards as $card ) {
					$image       = $card['image'];
					$block_title = $card['title'];
					$text        = $card['text'];
					?>
					<div>
						<img class="mk-w-full mk-h-image-sm lg:mk-h-image mk-object-cover" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
						<div class="mk-bg-black">
							<h3 class="mk-text-2sm-title  mk-text-white mk-font-medium mk-uppercase mk-mb-6 mk-pt-8"><?php echo esc_html( $block_title ); ?></h3>
							<div class="mk-text-slate-light-grey mk-text-base">
								<?php echo wp_kses_post( $text ); ?>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</div>
