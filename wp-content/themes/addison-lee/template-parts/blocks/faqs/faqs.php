<?php
/**
 * FAQs.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading = get_field( 'heading' );
$faqs    = get_field( 'faqs' );

// Block ID.
$block_id = 'faqs-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'faqs-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-bg-white mk-px-4 mk-py-16 md:mk-py-28" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site-sm mk-mx-auto">
		<?php if ( $heading ) { ?>
			<h2 class="mk-text-2sm-title mk-font-medium mk-uppercase mk-mb-14"><?php echo esc_html( $heading ); ?></h2>
		<?php } ?>
		<?php if ( $faqs ) { ?>
			<div>
				<?php
				foreach ( $faqs as $faq ) {
					$question = $faq->post_title;
					$answer   = get_field( 'answer', $faq->ID );
					$faq_args = array(
						'question' => $question,
						'answer'   => $answer,
					);
					get_template_part( 'template-parts/cards/card', 'faq', $faq_args );
				}
				?>
			</div>
		<?php } ?>
	</div>
</div>
