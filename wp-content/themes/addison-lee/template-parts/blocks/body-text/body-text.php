<?php
/**
 * Body Text Block.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$content   = get_field( 'content' );
$grey_text = get_field( 'grey_text' );

// Block ID.
$block_id = 'body-text-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'body-text-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-bg-white mk-px-4 mk-py-20 " id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-max-w-site mk-mx-auto">
		<?php
		if ( $content ) {
			foreach ( $content as $section ) {
				$section_title = $section['title'];
				$text          = $section['text'];
				?>
				<div class="mk-mb-10 last:mk-mb-0">
					<?php if ( $section_title ) { ?>
						<h3 class="mk-text-lg mk-font-medium mk-leading-heading mk-mb-8"><?php echo esc_html( $section_title ); ?></h3>
					<?php } ?>
					<div class="mk-prose <?= $grey_text ? 'mk-prose-grey' : ''; ?> mk-w-full">
						<?php echo wp_kses_post( $text ); ?>
					</div>
				</div>
				<?php
			}
		}
		?>
	</div>
</div>
