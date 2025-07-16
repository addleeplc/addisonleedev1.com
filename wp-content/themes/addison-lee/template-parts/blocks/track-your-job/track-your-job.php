<?php
/**
 * Track your job
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading    = get_field( 'heading' );
$text       = get_field( 'text' );
$form_text  = get_field( 'form_text' );
$form_label = get_field( 'form_label' );

// Block ID.
$block_id = 'track-your-job';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'track-your-job';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_html( $class_name ); ?> mk-px-4 mk-py-28" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site-xs mk-mx-auto">
		<?php if ( $heading ) { ?>
			<h2 class="mk-text-2sm-title mk-font-medium mk-text-white mk-uppercase mk-mb-5"><?php echo esc_html( $heading ); ?></h2>
		<?php } ?>
		<div class="mk-prose mk-prose-light-grey mk-text-lg">
			<?php echo wp_kses_post( $text ); ?>
		</div>
		<div class="mk-mt-14">
			<label class="mk-text-white mk-block mk-mb-2"><?php echo esc_html( $form_label ); ?></label>
			<input class="mk-w-full mk-text-white mk-p-2.5 mk-bg-transparent mk-border mk-border-white mk-outline-none" type="text" id="hawb" onclick="doTrack();" value="">
			<script>
				function doTrack() {
					var hawb = document.getElementById('hawb').value;
					if (hawb)
					window.location.href =
					"https://addlee.netcourier.net/online/tracking/trackinginfo/"  + hawb;
				}
			</script>
			<div class="mk-flex mk-items-center mk-gap-8 mk-mt-14">
				<button onclick="doTrack();" class="btn">Find</button>
				<p class="mk-text-sm mk-text-white/64"><?php echo esc_html( $form_text ); ?></p>
			</div>
		</div>
	</div>
</div>