<?php
/**
 * Contact Form.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading        = get_field( 'heading' );
$text           = get_field( 'text' );
$form_shortcode = get_field( 'form_shortcode' );
$padding_top    = get_field( 'padding_top' );
$trigger_form   = get_field( 'trigger_form' );

// Padding top classes
$padding_top = $padding_top === 'none' ? 'md-pt-16 mk-pb-16 md:md-pt-0 md:mk-pb-28' : 'mk-py-16 md:mk-py-28';

// Block ID.
$block_id = 'contact-form-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'contact-form-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_html( $class_name ); ?> mk-bg-white mk-px-4 <?php echo esc_html( $padding_top ); ?>" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site-xs mk-mx-auto">
		<?php if ( $heading ) { ?>
			<h2 class="mk-text-2sm-title mk-font-medium mk-uppercase mk-mb-6"><?php echo esc_html( $heading ); ?></h2>
		<?php } ?>
		<div class="mk-prose mk-prose-grey">
			<?php echo wp_kses_post( $text ); ?>
		</div>
		<?php if ( $form_shortcode ) { ?>
			<div class="form-wrap mk-mt-4">
				<?php echo do_shortcode( $form_shortcode ); ?>
			</div>
		<?php } ?>
	</div>
</div>

<?php if ( $trigger_form ) { ?>
<script>
	(function($) {
		$(document).ready(function() {
			const block = $('#<?php echo esc_js( $block_id ); ?>');
			const triggerSelector = '#<?php echo esc_js( $trigger_form ); ?>';
			const navHeight = 155; 

			$(triggerSelector).on('click', function(e) {
				e.preventDefault();
				block.slideDown(400, function() {
					$('html, body').animate({
						scrollTop: block.offset().top - navHeight
					}, 600);
				});
			});
		});
	})(jQuery);
</script>
<?php } ?>
