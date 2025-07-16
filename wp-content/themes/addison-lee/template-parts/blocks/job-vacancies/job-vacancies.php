<?php
/**
 * Careers Cards.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

wp_enqueue_script( 'workable-js', 'https://www.workable.com/assets/embed.js', array(), wp_get_theme()->get( 'Version' ), true );

$heading      = get_field( 'heading' );
$view_all_cta = get_field( 'view_all_cta' );
$cards        = get_field( 'cards' );

// Block ID.
$block_id = 'job-vacancies';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'job-vacancies';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-bg-white mk-px-4 mk-py-10 md:mk-py-20" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-mx-auto">
		<div class="mk-mb-10 md:mk-mb-14 mk-text-center">
			<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase"><?php echo esc_html( $heading ); ?></h2>
			<?php if ( $view_all_cta ) { ?>
				<a class="mk-inline-block mk-mt-6 mk-text-black/60" href="<?php echo esc_html( $view_all_cta['url'] ); ?>" target="<?php echo esc_html( $view_all_cta['target'] ); ?>"><?php echo esc_html( $view_all_cta['title'] ); ?></a>
			<?php } ?>
		</div>
		<script type='text/javascript' charset='utf-8'>
			jQuery.noConflict();
			jQuery(document).ready(function(){
				whr_embed(407621, {detail: 'titles', base: 'jobs', zoom: 'country', grouping: 'none'});
			});
		</script>
		<div id="whr_embed_hook"></div>
	</div>
</div>
