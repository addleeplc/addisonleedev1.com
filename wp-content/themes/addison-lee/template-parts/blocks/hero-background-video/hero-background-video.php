<?php
/**
 * Hero with Background Video.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white         = get_field( 'heading_white' );
$heading_white_ticker  = get_field( 'heading_white_ticker' );
$heading_white_mob	   = $heading_white_ticker[0]['text'] ?? '';
$show_ticker           = get_field( 'show_ticker' );
$show_ticker_white     = get_field( 'show_ticker_white' );
$heading_yellow_text   = get_field( 'heading_yellow_text' );
$heading_yellow_ticker = get_field( 'heading_yellow' );
$heading_yellow_mob    = $heading_yellow_ticker[0]['text'] ?? '';
$text                  = get_field( 'text' );
$cta                   = get_field( 'cta' );
$video                 = get_field( 'video' );

// Block ID.
$block_id = 'hero-background-video';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'hero-background-video';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-relative mk-h-screen mk-w-full" id="<?php echo esc_html( $block_id ); ?>">
	<?php if ( $video ) { ?>
		<video id="video-hero" class="mk-w-full mk-h-full mk-object-cover" preload="none" playsinline autoplay loop muted>
			<source src="<?php echo esc_html( $video['url'] ); ?>" type="video/mp4">
		</video>
	<?php } ?>
	<div class="mk-absolute mk-inset-0 mk-flex mk-items-end md:mk-items-center mk-w-full mk-h-full mk-px-4 mk-pb-36 md:mk-py-24 mk-bg-hero-gradient-mob md:mk-bg-hero-gradient-video">
		<div class="mk-w-full mk-max-w-site mk-mx-auto">
			<div class="mk-text-lg-title lg:mk-text-3xl-title mk-font-medium mk-uppercase mk-mb-4">
				<?php if ( $heading_white_ticker && $show_ticker_white ) { ?>
					<div class="text-ticker-container mk-hidden md:mk-block mk-relative mk-h-14 lg:mk-h-20 mk-overflow-hidden">
						<div class="text-ticker mk-absolute mk-top-0 mk-left-0">
							<?php
							foreach ( $heading_white_ticker as $heading ) {
								$text_item = $heading['text'];
								?>
								<div class="text-ticker-section mk-text-white"><?php echo esc_html( $text_item ); ?></div>
							<?php } ?>
						</div>
					</div>
					<p class="mk-block md:mk-hidden mk-text-white"><?php echo esc_html( $heading_white_mob ); ?></p>
				<?php } else { ?>
					<p class="mk-block mk-text-white"><?php echo esc_html( $heading_white ); ?></p>
				<?php } ?>
				<?php if ( $heading_yellow_ticker && $show_ticker ) { ?>
					<div class="text-ticker-container mk-hidden md:mk-block mk-relative mk-h-14 lg:mk-h-20 mk-overflow-hidden md:mk-ml-40">
						<div class="text-ticker mk-absolute mk-top-0 mk-left-0">
							<?php
							foreach ( $heading_yellow_ticker as $heading ) {
								$text_item = $heading['text'];
								?>
								<div class="text-ticker-section mk-text-yellow"><?php echo esc_html( $text_item ); ?></div>
							<?php } ?>
						</div>
					</div>
					<p class="mk-block md:mk-hidden mk-text-yellow"><?php echo esc_html( $heading_yellow_mob ); ?></p>
				<?php } else { ?>
					<p class="mk-block mk-text-yellow md:mk-ml-40"><?php echo esc_html( $heading_yellow_text ); ?></p>
				<?php } ?>
			</div>
			<div class="md:mk-pl-40">
				<p class="mk-text-xl md:mk-text-2xl mk-text-white !mk-leading-tight"><?php echo wp_kses_post( $text ); ?></p>
				<?php if ( is_front_page() ) : ?>
					<a class="btn mk-mt-8 md:mk-mt-12 quote-cta" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'arrow-right' ), allowed_svg_tags() ); ?></a>
					<?php elseif ( $cta ) : ?>
						<a class="btn mk-mt-8 md:mk-mt-12" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'arrow-right' ), allowed_svg_tags() ); ?></a>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</div>

<style>
.site-header{
	background-color: transparent;
}
.site-content{
	padding-top: 0;
}
</style>