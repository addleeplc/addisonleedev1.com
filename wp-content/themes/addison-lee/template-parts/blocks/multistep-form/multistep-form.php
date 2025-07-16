<?php
/**
 * Multi Step Form.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$page_icons     = get_field( 'page_icons' );
$form_shortcode = get_field( 'form_shortcode' );

// Block ID.
$block_id = 'multi-step-form';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'multi-step-form';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_html( $class_name ); ?> mk-bg-white mk-px-4 mk-py-16" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site-ssm mk-mx-auto">
		<?php if ( $form_shortcode ) { ?>
			<div class="form-wrap mk-mt-4">
				<?php echo do_shortcode( $form_shortcode ); ?>
			</div>
		<?php } ?>
	</div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {

	// Add styling to account options.
	document.querySelectorAll(".account-type .wpforms-field-label-inline").forEach(function(label) {
		if (label.innerHTML.includes("<br>")) {
			let parts = label.innerHTML.split("<br>");
			label.innerHTML = `
				<p class="wpforms-label-main">${parts[0].trim()}</p>
				<p class="mk-opacity-64 mk-mt-1">${parts[1].trim()}</p>
			`;
		}
	});

	// Add icons to progress bar.
	let steps = document.querySelectorAll(".wpforms-page-indicator-page");
	let icons = [
		<?php
		foreach ( $page_icons as $icon ) {
			$image = $icon['icon'];
			?>
			`<img class="mk-w-8 mk-h-8 mk-mx-auto mk-mb-1 mk-object-contain mk-opacity-0" src="<?php echo $image['url']; ?>">`,
		<?php } ?>
	];
	steps.forEach((step, index) => {
		if (icons[index]) {
			step.innerHTML = icons[index] + " " + step.innerHTML;
		}
	});

	// Update progress bar lines.
	function updateProgress() {
		steps.forEach((step, index) => {
			if (step.classList.contains("active")) {
				for (let i = 0; i < index; i++) {
					steps[i].classList.add("wpforms-page-completed");
				}
			}
		});
	}
	updateProgress();
	document.addEventListener("click", function() {
		setTimeout(updateProgress, 100);
	});


	// Multistep form
	document.querySelectorAll(".wpforms-field-content.after-submit").forEach(function(afterButton) {
		let nextPageBreak = afterButton.nextElementSibling;

		while (nextPageBreak) {
			if (nextPageBreak.classList.contains("wpforms-field-pagebreak")) {
				break;
			}
			nextPageBreak = nextPageBreak.nextElementSibling;
		}

		if (nextPageBreak) {
			nextPageBreak.appendChild(afterButton);
		}
	});
});

</script>