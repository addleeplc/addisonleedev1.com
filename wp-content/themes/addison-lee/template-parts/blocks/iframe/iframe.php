<?php
/**
 * iframe Block.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$iframe = get_field( 'iframe' );

// Block ID.
$block_id = 'iframe';
if ( ! empty( $block['anchor'] ) ) {
    $block_id = $block['anchor'];
}

?>

<div class="block-iframe">
    <div class="mk-max-w-site mk-mx-auto">
        <?php echo $iframe; ?>
    </div>
</div>