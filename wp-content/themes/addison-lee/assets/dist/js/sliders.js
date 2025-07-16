/**
 * Theme slider javascript functions.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

document.addEventListener(
	"DOMContentLoaded",
	function () {
		// Scrolling cards carousel.
		var scrolling_cards = document.querySelectorAll( '.scrolling-cards-carousel' );
		scrolling_cards.forEach(
			function (slider) {

				// Slider settings
				var settings = {
					animationTimingFunc: 'cubic-bezier(0.7,0,0.6,1)',
					type: 'slider',
					animationDuration: 500,
					rewind: false,
					dragThreshold: 20,
					bound: true
				};

				if (slider.classList.contains('progress-bar')) {
					// Progress bar settings
					settings.peek = { before: 0, after: 200 };
					settings.perView = 2;
					settings.breakpoints = {
						1140: {
							perView: 2,
							peek: { before: 0, after: 150 }
						},
						768: {
							perView: 2,
							peek: { before: 0, after: 40 }
						},
						640: {
							perView: 1,
							peek: { before: 0, after: 10 }
						},
					}
				} else {
					// No progress bar settings
					settings.perView = 3;
					settings.breakpoints = {
						1140: {
							perView: 2,
							peek: { before: 0, after: 100 }
						},
						768: {
							perView: 2,
							peek: { before: 0, after: 40 }
						},
						640: {
							perView: 1,
							peek: { before: 0, after: 30 }
						},
					}
				}

				var scrolling_cards_carousel = new Glide(
					slider, settings
				);

				scrolling_cards_carousel.mount();
				const controlsTop = document.querySelectorAll('.controls-top');

				controlsTop.forEach((control) => {
					control.addEventListener('click', (event) => {
						const direction = event.target.dataset.glideDir;
						if (direction) {
							scrolling_cards_carousel.go(direction);
						}
					});
				});

				if (slider.classList.contains('progress-bar')) {
					// Update the progress bar
					scrolling_cards_carousel.on(['run'], function () {
						let progress_bar = slider.querySelector('.progress-bar');
						let slides = slider.querySelectorAll('.glide__slide');
						let num_slides = slides.length - 1; // minus 1 because 2 slides per view means the last slide is not navigated to
						let progress_width = progress_bar.dataset.width;
						let progress = (scrolling_cards_carousel.index / (num_slides - 1)) * progress_width;
						progress_bar.style.width = progress + '%';
					});

					const progress_bar = slider.querySelector('.slider-progress');
					progress_bar.addEventListener('click', (event) => {
						const clicked_position = event.offsetX;
						const slides = slider.querySelectorAll('.glide__slide');
						const num_slides = slides.length - 1; // minus 1 because 2 slides per view means the last slide is not navigated to
						for (let i = 0; i < num_slides; i++) {
							if (clicked_position < (progress_bar.offsetWidth / num_slides) * (i + 1)) {
								console.log((progress_bar.offsetWidth / num_slides) * (i + 1));
								scrolling_cards_carousel.go('=' + i);
								break;
							}
						}
					});
				}

				// Add mousescroll functionality
				slider.addEventListener("wheel", throttle((e) => {
					e.stopPropagation();
					
					if (e.deltaX > 15) {
						// right
						scrolling_cards_carousel.go(">");
					}
					if (e.deltaX < -15) {
						// left
						scrolling_cards_carousel.go("<");
					}
					
					return false;
				}, 50), { passive: true });
				
				function throttle(mainFunction, delay) {
					let timerFlag = null;
				
					// Returning a throttled version 
					return (...args) => {
						if (timerFlag === null) { // If there is no timer currently running
							mainFunction(...args); // Execute the main function 
							timerFlag = setTimeout(() => { // Set a timer to clear the timerFlag after the specified delay
								timerFlag = null; // Clear the timerFlag to allow the main function to be executed again
							}, delay);
						}
					};
				}

			}
		);

		// Ensure all slides are the same height.
		function set_slides_height(slider) {
			var slides     = slider.querySelectorAll( '.glide__slide' );
			var max_height = 0;

			slides.forEach(
				function (slide) {
					slide.style.height = 'auto';
				}
			);

			slides.forEach(
				function (slide) {
					var slide_height = slide.offsetHeight;
					if (slide_height > max_height) {
						max_height = slide_height;
					}
				}
			);

			slides.forEach(
				function (slide) {
					slide.style.height = max_height + 'px';
				}
			);
		}

		// Mobile sliders.
		var mobile_sliders = document.querySelectorAll( '.mobile-view-slider' );
		mobile_sliders.forEach(
			function (slider) {
				var mobile_slider = new Glide(
					slider,
					{
						animationTimingFunc: 'cubic-bezier(0.7,0,0.6,1)',
						type: 'carousel',
						perView: 1,
						animationDuration: 500,
						gap: 8
					}
				);

				mobile_slider.on(
					'mount.after',
					function () {
						set_slides_height( slider );
					}
				);

				window.addEventListener(
					'resize',
					function () {
						set_slides_height( slider );
					}
				);

				mobile_slider.mount();

				// Update slide number for numbered key points.
				mobile_slider.on(
					'move',
					function () {
						var current_index = mobile_slider.index + 1;
						var slide_num     = document.querySelector( '.slide-num' );
						if (slide_num) {
							slide_num.textContent = current_index;
						}
					}
				);
			}
		);

		// Feedback sliders.
		var feedback_slider = document.querySelectorAll( '.feedback-slider' );
		feedback_slider.forEach(
			function (slider) {
				var feedback_slide = new Glide(
					slider,
					{
						animationTimingFunc: 'cubic-bezier(0.7,0,0.6,1)',
						type: 'carousel',
						perView: 3,
						gap: 16,
						animationDuration: 500,
						dragThreshold: false,
						breakpoints: {
							992: {
								perView: 2
							},
							640: {
								perView: 1
							},
						}
					}
				);

				feedback_slide.on(
					'mount.after',
					function () {
						set_slides_height( slider );
					}
				);

				window.addEventListener(
					'resize',
					function () {
						set_slides_height( slider );
					}
				);

				feedback_slide.mount();

				handleControls(feedback_slide.index, slider); // run on startup

				// Update slide number for numbered key points.
				feedback_slide.on(
					'move',
					function () {
						var current_index = feedback_slide.index + 1;
						var slide_num     = document.querySelector( '.slide-num' );
						if (slide_num) {
							slide_num.textContent = current_index;
						}
						handleControls(feedback_slide.index, slider);
					}
				);
			}
		);




		// Simple carousel.
		var simple_carousel = document.querySelectorAll( '.simple-carousel-2' );
		simple_carousel.forEach(
			function (slider) {
				var simple_slide = new Glide(
					slider,
					{
						animationTimingFunc: 'cubic-bezier(0.7,0,0.6,1)',
						type: 'slider',
						perView: 2,
						gap: 16,
						animationDuration: 500,
						rewind: false,
						bound: true,
						breakpoints: {
							640: {
								perView: 1,
								gap: 8
							},
						}
					}
				);

				simple_slide.mount();

			}
		);

		// Simple carousel.
		var simple_carousel = document.querySelectorAll( '.simple-carousel-3' );
		simple_carousel.forEach(
			function (slider) {
				var simple_slide = new Glide(
					slider,
					{
						animationTimingFunc: 'cubic-bezier(0.7,0,0.6,1)',
						type: 'slider',
						perView: 3,
						gap: 16,
						animationDuration: 500,
						rewind: false,
						bound: true,
						breakpoints: {
							640: {
								perView: 1,
								gap: 8
							},
						}
					}
				);

				simple_slide.mount();

			}
		);

		// Simple carousel.
		var simple_grid_carousel = document.querySelectorAll( '.simple-grid-carousel-block' );
		simple_grid_carousel.forEach(
			function (slider) {
				const simple_top = slider.querySelector('.simple-grid-carousel-top');
				const simple_bottom = slider.querySelector('.simple-grid-carousel-bottom');

				var carousel_top = new Glide(simple_top, {
					animationTimingFunc: 'cubic-bezier(0.7,0,0.6,1)',
						type: 'slider',
						perView: 2,
						gap: 16,
						animationDuration: 500,
						dragThreshold: false,
						rewind: false,
						bound: true,
				});

				var carousel_bottom = new Glide(simple_bottom, {
					animationTimingFunc: 'cubic-bezier(0.7,0,0.6,1)',
						type: 'slider',
						perView: 2,
						gap: 16,
						animationDuration: 500,
						dragThreshold: false,
						rewind: false,
						bound: true,
				});

				carousel_top.on('run', function () {
					carousel_bottom.go(`=${carousel_top.index}`);
				});

				carousel_top.mount();
				carousel_bottom.mount();
			}
		);

		// Related posts carousel.
		var related_posts_carousel = document.querySelectorAll('.related-posts');
		related_posts_carousel.forEach(
			function (slider) {
				var blog_slide = new Glide(
					slider,
					{
						animationTimingFunc: 'cubic-bezier(0.7,0,0.6,1)',
						type: 'slider',
						perView: 3, 
						gap: 16,
						animationDuration: 500,
						dragThreshold: false,
						rewind: false,
						bound: true,
						breakpoints: {
							992: {
								perView: 2,
								gap: 16
							},
							640: {
								perView: 1,
								gap: 8
							},
						}
					}
				);

				blog_slide.mount();
			}
		);

		// Detail carousel.
		var detail_carousel = document.querySelectorAll( '.detail-carousel' );
		detail_carousel.forEach(
			function (slider) {
				var detail_slide = new Glide(
					slider,
					{
						animationTimingFunc: 'cubic-bezier(0.7,0,0.6,1)',
						type: 'slider',
						perView: 3,
						gap: 16,
						animationDuration: 500,
						dragThreshold: false,
						rewind: false,
						bound: true,
						breakpoints: {
							992: {
								perView: 2,
								gap: 16
							},
							640: {
								perView: 1,
								gap: 8
							},
						}
					}
				);

				detail_slide.mount();

			}
		);


		// Testimonial carousel.
		var testimonial_carousel = document.querySelectorAll( '.testimonial-carousel' );
		testimonial_carousel.forEach(
			function (slider) {
				var testimonial_slide = new Glide(
					slider,
					{
						animationTimingFunc: 'cubic-bezier(0.7,0,0.6,1)',
						type: 'carousel',
						perView: 3,
						gap: 16,
						animationDuration: 500,
						dragThreshold: false,
						breakpoints: {
							992: {
								perView: 2,
							},
							640: {
								perView: 1,
							},
						}
					}
				);

				testimonial_slide.mount();

			}
		);
		
		// Carousel-tabs-over-image
		var all_carousels = document.querySelectorAll('.carousel-tabs-over-image-carousel');

		all_carousels.forEach(function (slider) {

			// Image Carousel.
			const carousel_image = slider.querySelector('.image-tabs-carousel');
			var carousel_image_slider = new Glide(carousel_image, {
				type: 'carousel',
				hoverpause: true,
				animationDuration: 400,
				gap: 0,
				// swipeThreshold: false,
				// dragThreshold: false,
			});
			

			//  Content Carousel.
			const carousel_content = slider.querySelector('.text-carousel');
			var carousel_text_slider = new Glide(carousel_content, {
				type: 'carousel',
				hoverpause: true,
				animationDuration: 400,
				gap: 0,
				// swipeThreshold: false,
				// dragThreshold: false,
			});
			
			carousel_text_slider.on(
				'mount.after',
				function () {
					set_slides_height( carousel_content );
				}
			);

			window.addEventListener(
				'resize',
				function () {
					set_slides_height( carousel_content );
				}
			);

			carousel_image_slider.mount();
			carousel_text_slider.mount();

			handleControls(carousel_text_slider.index, slider); // run on startup

			carousel_text_slider.on(
				'move',
				function () {
					handleControls(carousel_text_slider.index, slider);
				}
			);

			carousel_image_slider.on('run', function () {
				carousel_text_slider.go(`=${carousel_image_slider.index}`);
			});
			carousel_text_slider.on('run', function () {
				carousel_image_slider.go(`=${carousel_text_slider.index}`);
			});

			carousel_image_slider.on('run.after', () => {
				const bulletContainer = document.querySelector('.glide__bullets');
    			const activeBullet = document.querySelector('.glide__bullet--active');
    
				if (bulletContainer && activeBullet) {
					const containerRect = bulletContainer.getBoundingClientRect();
					const bulletRect = activeBullet.getBoundingClientRect();
			  
					// Calculate the offset to align the active bullet to the left of the container
					const offset = bulletRect.left - containerRect.left;
			  
					// Apply the transformation to move the bullet container
					bulletContainer.style.transform = `translateX(-${offset}px)`;
				}
			});
		});


		// Image Text Carousel.
		var image_text_carousel = document.querySelectorAll( '.image-text-carousel' );
		image_text_carousel.forEach(
			function (slider) {

				// Image Text Carousel Image.
				const carousel_image      = slider.querySelector( '.image-carousel' );
				var carousel_image_slider = new Glide(
					carousel_image,
					{
						type: 'carousel',
						hoverpause: true,
						gap: 0,
					}
				);
				carousel_image_slider.mount();

				// Image Text Carousel Content.
				const carousel_content   = slider.querySelector( '.text-carousel' );
				var carousel_text_slider = new Glide(
					carousel_content,
					{
						type: 'carousel',
						hoverpause: true,
						gap: 0,
						autoplay: 3000
					}
				);
				carousel_text_slider.mount();

				handleControls(carousel_text_slider.index, slider); // run on startup

				// Update slide number for numbered key points.
				carousel_text_slider.on(
					'move',
					function () {
						var current_index = carousel_text_slider.index + 1;
						var slide_num     = carousel_content.querySelector( '.slide-num' );
						if (slide_num) {
							slide_num.textContent = current_index;
						}
						handleControls(carousel_text_slider.index, slider);
					}
				);

				// Sync Image Text Carousels.
				carousel_text_slider.on(
					"run",
					function () {
						carousel_image_slider.go( `=${carousel_text_slider.index}` );
					}
				);
				carousel_image_slider.on(
					"run",
					function () {
						carousel_text_slider.go( `=${carousel_image_slider.index}` );
					}
				);

				// turn off autoplay on swipe / click
				carousel_text_slider.on("swipe.end", function() {
					carousel_text_slider.update({autoplay: false});
				});
				carousel_image_slider.on("swipe.end", function() {
					carousel_text_slider.update({autoplay: false});
				});
				const sliderControls = slider.querySelector('.slider-controls').children;
				for (let i = 0; i < sliderControls.length; i++) {
					const sliderControl = sliderControls[i];
					sliderControl.addEventListener('click', () => {
						carousel_text_slider.update({autoplay: false});
						carousel_image_slider.update({autoplay: false});
					});
				}
				
			}
		);

		// Image Text with Tabs Carousel.
		var image_text_tabs = document.querySelectorAll( '.image-text-tabs' );
		image_text_tabs.forEach(
			function (slider) {

				const carousel_content   = slider.querySelector( '.tabs-carousel-content' );
				var carousel_tabs = new Glide(
					carousel_content,
					{
						type: 'carousel',
						hoverpause: true,
						animationDuration: 0,
						gap: 0,
						swipeThreshold: false,
						dragThreshold: false
					}
				);
				carousel_tabs.mount();

			}
		);


		// Roadmap mobile slider.
		var roadmap_slider = document.querySelectorAll( '.roadmap-slider' );
		roadmap_slider.forEach(
			function (slider) {
				var roadmap_item = new Glide(
					slider,
					{
						animationTimingFunc: 'cubic-bezier(0.7,0,0.6,1)',
						type: 'slider',
						perView: 3,
						animationDuration: 500,
						gap: 16,
						breakpoints: {
							992: {
								perView: 2,
							},
							640: {
								perView: 1,
							},
						}
					}
				);

				roadmap_item.mount();

			}
		);

		// Logo row slider.
		var logo_row_slider = document.querySelectorAll( '.logo-row-slider' );
		logo_row_slider.forEach(
			function (slider) {
				var logo_row_item = new Glide(
					slider,
					{
						animationTimingFunc: 'cubic-bezier(0.7,0,0.6,1)',
						type: 'carousel',
						perView: 5,
						gap: 16,
						autoplay: 3000,
						breakpoints: {
							992: {
								perView: 4,
							},
							640: {
								perView: 2,
							},
						}
					}
				);

				logo_row_item.mount();

			}
		);
	}
);


// Resize function multiple.
function handleLoadResizeMultiple(main_element, all_elements, elements_container) {
	const elements = document.querySelectorAll( main_element );

	// Find element with greatest height.
	elements.forEach(
		element => {
        let elements_within = element.querySelectorAll( all_elements );
        let wrapper_within  = element.querySelector( elements_container );
        let highest_element;
        let max_height       = -Infinity;
        elements_within.forEach(
				element_within => {
                const height = element_within.offsetHeight;
                if (height > max_height) {
                    max_height      = height;
                    highest_element = element_within;
                }
                // Add height to container.
					if (highest_element) {
						wrapper_within.style.height = highest_element.offsetHeight + 'px';
					}
				}
			);
		}
	);
}

// Controls functions
// this is only relevant for 'carousel' type sliders
// 'slider' type already adds a disabled class to controls when you are at the start/end of it
function handleControls (slideIndex, slider) {
	const sliderLength = slider.querySelector('.slider-controls').dataset.glideLength;
	const sliderControls = slider.querySelector('.slider-controls').children;

	const disabledClass = 'mk-disabled-glide-button';
	sliderControls[0].classList.remove(disabledClass);
	sliderControls[1].classList.remove(disabledClass);
	if (slideIndex === 0) { // at the start
		sliderControls[0].classList.toggle(disabledClass)
	}
	if (slideIndex === sliderLength - 1) { // at the end
		sliderControls[1].classList.toggle(disabledClass)
	}
}

// Resize functions init.
window.addEventListener(
	'load',
	function () {
		handleLoadResizeMultiple( '.image-text-carousel', '.text-carousel-content', '.text-carousel .glide__slides' );// Resize split carousel content.

	}
);
window.addEventListener(
	'resize',
	function () {
		handleLoadResizeMultiple( '.image-text-carousel', '.text-carousel-content', '.text-carousel .glide__slides' );// Resize split slider content.
	}
);