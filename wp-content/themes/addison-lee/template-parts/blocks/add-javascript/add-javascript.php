<?php
/**
 * JavaScript Block.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$code = get_field( 'javascript_code' );

// Block ID.
$block_id = 'add-javascript';
if ( ! empty( $block['anchor'] ) ) {
    $block_id = $block['anchor'];
}

?>

<div class="block-iframe">
    <div class="mk-max-w-site mk-mx-auto">
		<?php echo $code; ?>
		<?php
		// Check rows exists.
		if( have_rows('add_external_javascripts') ):

			// Loop through rows.
			while( have_rows('add_external_javascripts') ) : the_row();

				// Load sub field value.
				$javascript_url = get_sub_field('javascript_url');
				// Do something, but make sure you escape the value if outputting directly...
				?>
				<script src='<?php echo $javascript_url; ?>'></script>
				<?php
			// End loop.
			endwhile;

		// No value.
		else :
			// Do something...
		endif;
		?>
    </div>
</div>