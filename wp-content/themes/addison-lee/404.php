<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading  = get_field( 'heading_404', 'options' );
$text     = get_field( 'text_404', 'options' );
$cta      = get_field( 'cta_404', 'options' );
$bg_image = get_field( 'image_404', 'options' );

get_header();
?>

<div class="mk-relative mk-h-screen mk-w-full">
	<img class="mk-w-full mk-h-full mk-object-cover" src="<?php echo esc_html( $bg_image['url'] ); ?>" alt="<?php echo esc_html( $bg_image['alt'] ); ?>">
	<div class="mk-absolute mk-inset-0 mk-flex mk-items-center mk-w-full mk-h-full mk-px-4 md:mk-py-24 mk-bg-hero-gradient-mob md:mk-bg-hero-gradient">
		<div class="mk-w-full mk-max-w-site-md mk-mx-auto">
			<div class="mk-max-w-[476px]">
				<h1 class="mk-text-xl-title md:mk-text-3xl-title mk-font-medium mk-text-white mk-uppercase mk-mb-4"><?php echo esc_html( $heading ); ?></h1>
				<p class="mk-text-xl md:mk-text-2xl mk-text-white !mk-leading-tight"><?php echo wp_kses_post( $text ); ?></p>
				<?php if ( $cta ) { ?>
					<a class="btn mk-mt-8 md:mk-mt-12" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?><?php echo wp_kses( addisonlee_svgs( 'arrow-right' ), allowed_svg_tags() ); ?></a>
				<?php } ?>
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

<?php
get_footer();