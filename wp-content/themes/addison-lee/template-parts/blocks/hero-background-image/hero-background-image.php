<?php
/**
 * Hero with Background Image.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading_white  = get_field( 'heading_white' );
$heading_yellow = get_field( 'heading_yellow' );
$text           = get_field( 'text' );
$cta            = get_field( 'cta' );
$white_cta      = get_field( 'white_cta' );
$bg_image       = get_field( 'background_image' );
$bg_image_mob   = get_field( 'background_image_mobile' );
$reduce_indent  = get_field( 'reduce_indent' );

if ( $reduce_indent ) {
	$indent = 'md:mk-pl-18';
} else {
	$indent = 'md:mk-pl-40';
}
// Block ID.
$block_id = 'hero-background-image';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
global $post;
$class_name = 'hero-background-image post-' . $post->ID;
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-relative mk-h-screen mk-w-full" id="<?php echo esc_html( $block_id ); ?>">
	<img class="mk-hidden sm:mk-block mk-w-full mk-h-full mk-object-cover" src="<?php echo esc_html( $bg_image['url'] ); ?>" alt="<?php echo esc_html( $bg_image['alt'] ); ?>">
	<?php if (is_array($bg_image_mob)) { ?>
		<img class="sm:mk-hidden mk-w-full mk-h-full mk-object-cover" src="<?php echo esc_html( $bg_image_mob['url'] ); ?>" alt="<?php echo esc_html( $bg_image_mob['alt'] ); ?>">
	<?php } ?>
	<div class="mk-absolute mk-inset-0 mk-flex mk-items-end md:mk-items-center mk-w-full mk-h-full mk-px-4 mk-pb-36 md:mk-py-24 mk-bg-hero-gradient-mob md:mk-bg-hero-gradient">
		<div class="mk-w-full mk-max-w-site mk-mx-auto">
			<h1 class="mk-text-lg-title md:mk-text-3xl-title mk-font-medium mk-uppercase mk-mb-4">
				<span class="mk-block mk-text-white"><?php echo esc_html( $heading_white ); ?></span>
				<span class="mk-block mk-text-yellow <?php echo esc_html( $indent ); ?>"><?php echo wp_kses_post( $heading_yellow ); ?></span>
			</h1>
			<div class="<?php echo esc_html( $indent ); ?>">
				<p class="mk-text-xl md:mk-text-2xl mk-text-white !mk-leading-tight mk-line-breaked-text"><?php echo wp_kses_post( $text ); ?></p>
				<div class="mk-flex mk-gap-4 mk-items-center">
				<?php if ( $cta ) { ?>
					<a class="btn mk-mt-8 md:mk-mt-12" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'arrow-right' ), allowed_svg_tags() ); ?></a>
				<?php } ?>
				<?php if ( $white_cta ) { ?>
					<a class="btn-clear btn-clear-white mk-mt-8 mk-ml-4 md:mk-mt-12 mk-uppercase mk-font-steagal mk-text-white mk-text-xxxxs-title mk-inline-block mk-flex mk-items-center" 
					href="<?php echo esc_html( $white_cta['url'] ); ?>" 
					target="<?php echo esc_html( $white_cta['target'] ); ?>">
						<?php echo esc_html( $white_cta['title'] ); ?> 
						<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm-white' ), allowed_svg_tags() ); ?>
					</a>	
				<?php } ?>
				</div>
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