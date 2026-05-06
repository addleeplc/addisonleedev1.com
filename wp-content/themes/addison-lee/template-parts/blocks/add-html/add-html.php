<?php
/**
 * HTML HTML Block.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$code = get_field( 'html_code' );

// Block ID.
$block_id = 'add-script';
if ( ! empty( $block['anchor'] ) ) {
    $block_id = $block['anchor'];
}

?>

<div class="block-iframe mk-bg-white mk-px-4 mk-py-20 ">
    <div class="mk-max-w-site mk-mx-auto">
        <?php echo $code; ?>
    </div>
</div>