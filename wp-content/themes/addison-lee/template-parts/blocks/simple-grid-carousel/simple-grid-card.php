<?php
$card       = $args['card'] ?? array();
$image      = $card['image'];
$card_title = $card['title'];
?>

<div class="simple-grid-card">
	<?php if ( $image ) { ?>					
		<img class="mk-w-full mk-h-image-1sm mk-object-cover" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
	<?php } ?>
	<?php if ( $card_title ) { ?>
		<div class="mk-h-[calc(100%-355px)] mk-px-6 mk-py-8 mk-border-b mk-border-r mk-border-l mk-border-black/16">
			<h3 class="mk-text-xl md:mk-text-2xl mk-font-medium"><?php echo esc_html( $card_title ); ?></h3>
		</div>
	<?php } ?>
</div>