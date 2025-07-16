<?php
/**
 * FAQs Categories Menu.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$faq_category_ids = get_field( 'faqs_categories' );
$faqs_categories  = get_terms(
	array(
		'taxonomy'   => 'faq_category',
		'include'    => $faq_category_ids,
		'hide_empty' => true,
		'orderby'    => 'include',
	)
);

// Block ID.
$block_id = 'faqs-categories-menu-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'faqs-categories-menu-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_html( $class_name ); ?> mk-bg-white md:mk-px-4" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-max-w-site mk-mx-auto md:mk-flex">
		<div class="mk-relative mk-bg-black md:mk-max-w-xs md:mk-min-w-80 mk-pt-12 md:mk-pt-20 mk-pb-6 md:mk-pb-32 mk-px-4 md:mk-pl-0 md:mk-pr-12 mk-text-white">
			<span class="mk-hidden md:mk-block mk-absolute mk-top-0 mk-w-screen mk-h-full mk-left-[-100vw] mk-bg-black"></span>
			<div class="faq-categories-menu mk-bg-black mk-text-white mk-flex mk-flex-col hidden md:block">
				<p class="mk-text-lg mk-font-medium mk-mb-5 md:mk-mb-0 mk-pl-4 md:mk-pl-0">Quick search</p>
				<div class="mk-hidden md:mk-block mk-border-b mk-border-white/64 mk-opacity-50 mk-pb-8 mk-w-1/3"></div>
				<?php // List for desktop. ?>
				<ul class="mk-hidden md:mk-block md:mk-mt-8">
					<?php
					if ( is_array( $faqs_categories ) && ! empty( $faqs_categories ) ) {
						foreach ( $faqs_categories as $index => $category ) {
							?>
							<li class="mk-mb-4 mk-py-2">
								<a href="#<?php echo esc_attr( $category->slug ); ?>" 
									class="category-link mk-text-white hover:mk-text-yellow mk-transition-colors"
									data-category="<?php echo esc_attr( $category->slug ); ?>"
									<?php echo 0 === $index ? 'data-default="true"' : ''; ?>>
									<?php echo esc_html( $category->name ); ?>
								</a>
							</li>
							<?php
						}
					} else {
						?>
						<li>No categories available.</li>
					<?php } ?>
				</ul>
				<?php // List for mobile. ?>
				<div class="select-container mk-relative mk-block md:mk-hidden">
					<select id="category-select" class="mk-relative mk-w-full mk-bg-black mk-text-yellow mk-font-medium mk-border mk-border-secondary-grey mk-p-4 mk-rounded-md mk-outline-none">
						<option value="" disabled selected>Choose a category</option> 
						<?php
						if ( is_array( $faqs_categories ) && ! empty( $faqs_categories ) ) {
							foreach ( $faqs_categories as $category ) {
								?>
								<option value="<?php echo esc_attr( $category->slug ); ?>">
									<?php echo esc_html( $category->name ); ?>
								</option>
								<?php
							}
						}
						?>
					</select>
				</div>
			</div>
		</div>
		<div class="mk-w-full mk-pt-12 md:mk-pt-36 mk-pb-24 md:mk-pb-40">
			<div class="faq-list mk-w-full mk-px-4 md:mk-pl-12">
				<?php
				if ( is_array( $faqs_categories ) && ! empty( $faqs_categories ) ) {
					foreach ( $faqs_categories as $index => $category ) {

						// Get subcategories.
						$subcategories = get_terms(
							array(
								'taxonomy'   => 'faq_category',
								'child_of'   => $category->term_id,
								'hide_empty' => true,
							)
						);
						?>
		
						<div id="<?php echo esc_attr( $category->slug ); ?>" class="faq-category-section mk-mb-8" data-category="<?php echo esc_attr( $category->slug ); ?>" style="<?php echo 0 === $index ? 'display: none;' : ''; ?>">
							<h1 class="mk-text-2sm-title mk-font-steagal mk-font-medium mk-uppercase mk-mb-10"><?php echo esc_html( esc_html( $category->name ) ); ?></h1>
							<?php
							if ( $subcategories ) {
								foreach ( $subcategories as $subcategory ) {
									// Get the faqs in each subcategory.
									$sub_faqs = get_posts(
										array(
											'post_type' => 'faqs',
											'tax_query' => array(
												array(
													'taxonomy' => 'faq_category',
													'field'    => 'term_id',
													'terms'    => $subcategory->term_id,
												),
											),
											'posts_per_page' => -1,
										)
									);
									?>
									<div class="mk-mb-8 mk-pt-4">
										<h2 class="mk-text-sm-title mk-font-steagal mk-font-semibold mk-uppercase mk-tracking-widest mk-mb-4"><?php echo esc_html( esc_html( $subcategory->name ) ); ?></h2>
										<?php
										// List subcategory faqs.
										foreach ( $sub_faqs as $faq ) {
											$question = get_the_title( $faq->ID );
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
								<?php
							} else {
								// If no subcategories get all faqs in the category.
								$faqs = get_posts(
									array(
										'post_type'      => 'faqs',
										'tax_query'      => array(
											array(
												'taxonomy' => 'faq_category',
												'field'    => 'term_id',
												'terms'    => $category->term_id,
											),
										),
										'posts_per_page' => -1,
									)
								);

								// List all faqs.
								foreach ( $faqs as $faq ) {
									$question = get_the_title( $faq->ID );
									$answer   = get_field( 'answer', $faq->ID );
									$faq_args = array(
										'question' => $question,
										'answer'   => $answer,
									);
									get_template_part( 'template-parts/cards/card', 'faq', $faq_args );
								}
							}
							?>
						</div>
						<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</div>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		const links = document.querySelectorAll('.category-link');
		const faqSections = document.querySelectorAll('.faq-category-section');
		const categorySelect = document.getElementById('category-select');
		const urlHash = window.location.hash;

		// Function to open first FAQ
		function openFirstFAQ(section) {
			const firstFAQ = section.querySelector('.faq-card');
			const question = firstFAQ.querySelector('.faq-question');
			if (question) {
				const faqBody = firstFAQ.querySelector('.faq-body');
				if (faqBody.offsetHeight === 0) { // check FAQ is open first
					setTimeout(function() {
						question.click();
					}, 500);
				}
			}
		}

		function showCategory(categorySlug) {
			faqSections.forEach(section => {
				section.style.display = section.getAttribute('data-category') === categorySlug ? 'block' : 'none';

				if (section.getAttribute('data-category') === categorySlug) {
					openFirstFAQ(section);
				}
			});

			// Update active link
			links.forEach(link => {
				link.classList.toggle('active', link.getAttribute('data-category') === categorySlug);
			});			
		}

		// Set default selection based on the first category
		if (categorySelect.options.length > 1) {
			const defaultCategorySlug = categorySelect.options[1].value; // Second option (first category)
			categorySelect.value = defaultCategorySlug;
			showCategory(defaultCategorySlug); // Show the first category's FAQs
		}

		// Event listener for category links (desktop)
		links.forEach(link => {
			link.addEventListener('click', function (event) {
				event.preventDefault();
				const categorySlug = this.getAttribute('data-category');
				
				showCategory(categorySlug);
				categorySelect.value = categorySlug; // Update the select value
				const urlHash = window.location.hash;
				if (urlHash !== '#' + categorySlug) {
					history.pushState( null, null, '#' + categorySlug );
				}
				
			});
		});

		// Event listener for category select (mobile)
		categorySelect.addEventListener('change', function () {
			const categorySlug = this.value;
			showCategory(categorySlug);

			if (urlHash !== '#' + categorySlug) {
				history.pushState( null, null, '#' + categorySlug );
			}
		});

		if (urlHash !== '') {
			const categorySlug = urlHash.replace('#', '');
			showCategory(categorySlug);

			const categorySelect = document.getElementById('category-select');
			categorySelect.value = categorySlug;

			setTimeout(function() {
				window.scrollTo(0, 0);
			}, 1);
		}
	});
</script>

<style>
	.category-link.active {
		color: #FFD700; 
		font-weight: 500;
	}

	#category-select {
	padding-right: 30px; /* Espacio para el chevron */
	appearance: none; /* Ocultar el chevron nativo */
	-webkit-appearance: none; /* Ocultar el chevron nativo en Safari */
	background: none; /* Para que no se vea el fondo del chevron */
	}

	.select-container::after {
		content: '';
		position: absolute;
		right: 10px;
		top: 50%;
		transform: translateY(-50%);
		width: 20px;
		height: 20px;
		background-image: url('<?php echo esc_html( addisonlee_svgs( 'chevron-down-yellow-select' ) ); ?>');
		background-size: contain;
		background-repeat: no-repeat;
		pointer-events: none;
		z-index: 100;
	}
</style>