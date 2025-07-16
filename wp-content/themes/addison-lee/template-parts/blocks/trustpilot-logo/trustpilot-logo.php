<?php
/**
 * Trustpilot logo.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$logo    = get_field( 'trustpilot_logo', 'options' );
$padding = get_field( 'padding' );

// Block ID.
$block_id = 'trustpilot-logo';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'trustpilot-logo';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_html( $class_name ); ?> mk-px-4 <?php echo esc_html( $padding ); ?>" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-max-w-80 mk-mx-auto">
		<!-- TrustBox widget - Micro Star -->
		<div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b732fbfb950b10de65e5" data-businessunit-id="4bded9c6000064000506c56d" data-style-height="24px" data-style-width="100%" data-theme="dark"><a href="https://uk.trustpilot.com/review/www.addisonlee.com" target="_blank" rel="noopener">Trustpilot</a></div>
		<!-- End TrustBox widget -->
	</div>
</div>