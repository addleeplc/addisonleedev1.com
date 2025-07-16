<?php
/**
 * FAQ Card.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$question = $args['question'];
$answer   = $args['answer'];
?>

<div class="faq-card mk-rounded-sm mk-pr-2 mk-overflow-hidden mk-transition-all mk-duration-300 mk-ease-bezier">
	<div class="faq-question mk-flex mk-justify-between mk-items-start mk-gap-4 mk-py-5 mk-cursor-pointer">
		<p class="mk-text-lg mk-font-medium"><?php echo esc_html( $question ); ?></p>
		<div class="plus-minus mk-relative mk-w-4 mk-h-4 mk-mt-1.5">
			<span class="plus-toggle mk-absolute mk-top-0 mk-w-0.5 mk-h-full mk-bg-black mk-transition-transform mk-duration-300 mk-ease-bezier"></span>
			<span class="mk-absolute mk-w-0.5 mk-h-full mk-bg-black -mk-rotate-90"></span>
		</div>
	</div>
	<div class="faq-body mk-h-0 mk-transition-all mk-duration-300 mk-ease-bezier">
		<div class="faq-answer-wrap mk-opacity-0 mk-transition-all mk-duration-500 mk-ease-bezier">
			<div class="mk-max-w-sm sm:mk-max-w-xl md:mk-max-w-2xl lg:mk-max-w-3xl mk-pb-6">
				<div class="faq-answer mk-prose mk-max-w-none mk-opacity-64"><?php echo wp_kses_post( $answer ); ?></div>
			</div>
		</div>
	</div>
</div>
