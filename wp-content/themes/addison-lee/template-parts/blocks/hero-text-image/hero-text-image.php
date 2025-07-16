<?php
/**
 * Hero with Text / Image Split.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white        = get_field( 'heading_white' );
$heading_yellow       = get_field( 'heading_yellow' );
$text                 = get_field( 'text' );
$cta                  = get_field( 'cta' );
$image                = get_field( 'image' );
$enable_notifications = get_field( 'enable_notifications' );
$notifications        = get_field( 'notifications_animation' );

// Block ID.
$block_id = 'hero-text-image';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'hero-text-image';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> md:mk-h-screen-header mk-w-full mk-px-4 mk-py-12" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-h-full mk-mx-auto md:mk-flex mk-items-center">
		<div class="md:mk-w-1/2 md:mk-pr-8 mk-mb-10 md:mk-mb-0">
			<h1 class="mk-text-2md-title lg:mk-text-2xl-title mk-font-medium mk-uppercase mk-mb-4">
				<span class="mk-block mk-text-white"><?php echo esc_html( $heading_white ); ?></span>
				<span class="mk-block mk-text-yellow"><?php echo esc_html( $heading_yellow ); ?></span>
			</h1>
			<div class="mk-max-w-md">
				<p class="mk-text-xl md:mk-text-2xl mk-text-white !mk-leading-tight"><?php echo wp_kses_post( $text ); ?></p>
			</div>
			<?php if ( $cta ) { ?>
				<a class="btn mk-mt-8 md:mk-mt-12" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'arrow-right' ), allowed_svg_tags() ); ?></a>
			<?php } ?>
		</div>
		<div class="mk-relative md:mk-w-1/2 mk-px-4 md:mk-px-0">
			<img class="lg:mk-max-w-image mk-w-full mk-h-image-sm lg:mk-h-image mk-object-cover mk-mx-auto md:mk-mr-0" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
			<?php if ( $enable_notifications ) { ?>
				<div class="mk-absolute mk-top-0 md:mk-top-auto mk-right-0 md:mk-right-auto mk-bottom-0 md:mk-bottom-20 mk-left-0 md:mk-left-6 mk-flex mk-flex-col mk-justify-between">
					<div class="mk-mt-4 md:mk-mt-0 md:mk-mb-4 mk-ml-auto md:mk-ml-32">
						<div class="fade-up mk-inline-flex mk-p-3 mk-overflow-hidden mk-rounded mk-bg-slate-grey mk-backdrop-blur-lg">
							<?php if ( $notifications['people'] ) { ?>
								<div class="mk-flex mk-items-center mk-gap-1.5 mk-text-white">
									<?php echo wp_kses( addisonlee_svgs( 'people' ), allowed_svg_tags() ); ?>
									<span><?php echo esc_html( $notifications['people'] ); ?></span>
								</div>
							<?php } ?>
							<?php if ( $notifications['baggage'] ) { ?>
								<div class="mk-flex mk-items-center mk-gap-1.5 mk-text-white mk-ml-4">
									<?php echo wp_kses( addisonlee_svgs( 'suitcase' ), allowed_svg_tags() ); ?>
									<span><?php echo esc_html( $notifications['baggage'] ); ?></span>
								</div>
							<?php } ?>
							<div class="mk-ml-3">
								<?php echo wp_kses( addisonlee_svgs( 'close-white-sm' ), allowed_svg_tags() ); ?>
							</div>
						</div>
					</div>
					<?php if ( $notifications['drop_off'] ) { ?>
						<div class="mk-mb-4 md:mk-mb-0">
							<div class="fade-up mk-delay-100 mk-inline-flex mk-p-3 mk-overflow-hidden mk-rounded mk-bg-slate-grey mk-backdrop-blur-lg">
								<div class="mk-w-16 mk-flex mk-items-center">
									<img src="<?php echo esc_html( get_template_directory_uri() . '/assets/src/img/car.png' ); ?>" alt="Car">
								</div>
								<div class="mk-pl-4">
									<div class="mk-text-xxxxxxs-title mk-text-white/60">DROP OFF</div>
									<div class="mk-text-lg mk-text-white mk-leading-none"><?php echo esc_html( $notifications['drop_off'] ); ?></div>
								</div>
								<div class="mk-ml-3 mk-h-full">
									<?php echo wp_kses( addisonlee_svgs( 'close-white-sm' ), allowed_svg_tags() ); ?>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
