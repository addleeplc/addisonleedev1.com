<?php
/**
 * Just Call to Action.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading        = get_field( 'heading' );
$text           = get_field( 'text' );
$call_to_action = get_field( 'call_to_action' );

$padding_top    = get_field( 'padding_top' );
$padding_bottom = get_field( 'padding_bottom' );

// Block ID.
$block_id = 'just-call-to-action';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}
// mk-py-16 md:mk-py-28
?>

<div class="block-just-cta mk-bg-white mk-px-4 
    <?= $padding_top ? "mk-pt-16 md:mk-pt-28" : ""; ?>
    <?= $padding_bottom ? "mk-pb-16 md:mk-pb-28" : ""; ?>" id="<?php echo esc_html( $block_id ); ?>">
    <div class="mk-w-full mk-max-w-site mk-mx-auto">
        <h2 class="mk-text-2sm-title mk-font-medium mk-text-black mk-uppercase mk-mb-8"><?= $heading; ?></h2>
        <div class="mk-text-base mk-opacity-60 mk-mb-14">
            <p><?= $text; ?></p>
        </div>
		<?php if ( $call_to_action ) { ?>
			<div>
				<a class="btn btn-black" href="<?php echo esc_html( $call_to_action['url'] ); ?>" target="<?php echo esc_html( $call_to_action['target'] ); ?>"><?php echo esc_html( $call_to_action['title'] ); ?></a>
			</div>
		<?php } ?>
    </div>
</div>