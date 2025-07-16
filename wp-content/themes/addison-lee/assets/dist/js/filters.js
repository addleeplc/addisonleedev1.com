/**
 * Theme javascript filter functions.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

(function ($) {

	function fetch_posts(post_type, filter, sort, search, page) {
		$.ajax(
			{
				url:  post_ajax_filter.ajax_url,
				method: 'POST',
				data: {
					action: 'fetch_posts',
					filter: filter,
					sort: sort,
					search: search,
					page: page,
					post_type: post_type,
					security: post_ajax_filter.nonce
				},
				dataType: 'json',
				success: function (response) {

					if (page === 1) {
						$( '.post-listings-grid' ).html( response.cards );
						$( '.showing-num' ).addClass( '!mk-opacity-100' );
						init_blog_highlights();
					} else {
						$( '.post-listings-grid' ).append( response.cards );
					}

					// Update page data on Load More button.
					$( '#load-more-btn' ).data( 'page', page + 1 );

					// Disable the Load More button if no more posts.
					if ( ! response.has_more) {
						$( '#load-more-btn' ).hide();
					} else {
						$( '#load-more-btn' ).show();
					}

					// Update post count text.
					var showingPosts = $( '.post-listings-grid' ).children( ':not(.blog-highlights-carousel)' ).length;
					$( '.number-of-posts' ).text( showingPosts );
					$( '.total-posts' ).text( response.total_posts );

				},
				error: function (xhr, status, error) {
					console.error( 'Error fetching posts:', error );
				}
			}
		);
	}

	// Projects filter change.
	$( 'input[type=radio][name=blog-filter], select.blog-mobile-filter, input[type=radio][name=blog-sort-filter]' ).change(
		function () {
			var sort   = $( 'input[name="blog-sort-filter"]:checked' ).val();
			var search = $( '#blog-searchfield' ).val();

			// Check whether to use the desktop buttons or mobile select field.
			if ($( window ).width() < 768) {
				var filter = $( 'select.blog-mobile-filter' ).val();
			} else {
				var filter = $( 'input[name="blog-filter"]:checked' ).val();
			}

			if ($( this ).attr( 'name' ) === 'blog-filter') {
				// Update categories.
				$( '.blog-filter-option' ).removeClass( '!mk-border-black !mk-text-black' );
				$( this ).parent( 'label' ).addClass( '!mk-border-black !mk-text-black' );

				if ($(this).attr('data-category-name')) {
					window.location.hash = $(this).attr('data-category-name');
				} else { // All selected
					history.replaceState(null, null, ' ');
				}
				
			} else if ($( this ).attr( 'name' ) === 'blog-sort-filter') {
				// Update sort.
				var sort_text = $( this ).next( '.mk-sort-filter-label' ).text();
				$( '.sort-dropdown' ).removeClass( '!mk-block' );
				$( '.sort-dropdown-toggle' ).removeClass( '!mk-border-secondary-grey !mk-border-b-transparent !mk-rounded-b-none' );
				$( '.sort-indicator' ).removeClass( 'mk-rotate-180' );
				$( '.sort-selected' ).text( sort_text );
			}

			// Reset page to 1.
			$( '#load-more-btn' ).data( 'page', 1 );
			// Ajax function.
			fetch_posts( post_type, filter, sort, search, 1 );

		}
	);

	// Toggle sort dropdown.
	$( '.sort-dropdown-toggle' ).click(
		function (event) {
			event.stopPropagation()
			$( '.sort-dropdown' ).toggleClass( '!mk-block' );
			$( this ).toggleClass( '!mk-border-secondary-grey !mk-border-b-transparent !mk-rounded-b-none' );
			$( '.sort-indicator' ).toggleClass( 'mk-rotate-180' );
		}
	);

	// Close sort dropdown.
	$(document).click(function(event) {
		// Check if the click target is not inside the dropdown or the toggle button
		if (!$(event.target).closest('.sort-dropdown, .sort-dropdown-toggle').length) {
			// If outside, remove the active classes
			$('.sort-dropdown').removeClass('!mk-block');
			$('.sort-dropdown-toggle').removeClass('!mk-border-secondary-grey !mk-border-b-transparent !mk-rounded-b-none');
			$('.sort-indicator').removeClass('mk-rotate-180');
		}
	});

	// Blog search function.
	$( '#blog-search' ).submit(
		function (event) {
			event.preventDefault();
			var search = $( '#blog-searchfield' ).val();
			var filter = $( 'input[name="blog-filter"]:checked' ).val();
			var sort   = $( 'input[name="blog-sort-filter"]:checked' ).val();

			// Ajax function.
			fetch_posts( post_type, filter, sort, search, 1 );

		}
	);

	// Load More button.
	$( '#load-more-btn' ).click(
		function () {
			// Check whether to use the desktop buttons or mobile select field.
			if ($( window ).width() < 768) {
				var filter = $( 'select.blog-mobile-filter' ).val();
			} else {
				var filter = $( 'input[name="blog-filter"]:checked' ).val();
			}
			var sort   = $( '#sort-filter' ).val();
			var search = $( '#blog-searchfield' ).val();
			var page   = $( this ).data( 'page' );
			fetch_posts( post_type, filter, sort, search, page );
		}
	);

	var post_type = $( '.post-listings-grid' ).data('post-type');
	// Initial fetch.
	if (window.location.hash === '') {
		fetch_posts( post_type, 'all', 'date_desc', '', 1 );
	} else {
		var category = window.location.hash.substring(1);
		$( 'input[name="blog-filter"][data-category-name="' + category + '"]' ).prop('checked', true).change();
	}

	// Open and close the search field
	$('#blog-searchfield').on('focus', function() {
		if ($(window).width() > 768) {
			$(this).addClass('!mk-w-full');
		}
	}).on('blur', function() {
		if ($(window).width() > 768) {
			if ($(this).val() === '') {
				$(this).removeClass('!mk-w-full');
			}
		}
	});
	
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

	// Blog highlights carousel.
	function init_blog_highlights(){
		var blog_highlights_carousel = document.querySelectorAll( '.blog-highlights-carousel' );
		blog_highlights_carousel.forEach(
			function (slider) {

				// Carousel Image.
				const carousel_image      = slider.querySelector( '.image-carousel' );
				var carousel_image_slider = new Glide(
					carousel_image,
					{
						type: 'carousel',
						hoverpause: true,
						gap: 0,
						swipeThreshold: false,
						dragThreshold: false
						
					}
				);
				carousel_image_slider.mount();

				// Carousel Content.
				const carousel_content   = slider.querySelector( '.text-carousel' );
				var carousel_text_slider = new Glide(
					carousel_content,
					{
						type: 'carousel',
						hoverpause: true,
						gap: 0,
						swipeThreshold: false,
						dragThreshold: false
					}
				);

				handleControls(carousel_text_slider.index, slider); // run on startup

				// Custom controls for mobile.
				carousel_text_slider.on(
					'mount.after',
					function () {
						// Link custom arrows to Glide's direction methods.
						document.getElementById( 'blog-prev' ).addEventListener(
							'click',
							function () {
								carousel_text_slider.go( '<' );
							}
						);

						document.getElementById( 'blog-next' ).addEventListener(
							'click',
							function () {
								carousel_text_slider.go( '>' );
							}
						);
					}
				);
				
				carousel_text_slider.mount();

				// Update slide number for numbered key points.
				carousel_text_slider.on(
					'move',
					function () {
						var current_index = carousel_text_slider.index + 1;
						var slide_num     = slider.querySelector( '.slide-num' );
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
			}
		);
	}
})( jQuery );