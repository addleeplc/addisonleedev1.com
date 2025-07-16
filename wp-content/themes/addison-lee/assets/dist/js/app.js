/**
 * Theme javascript functions.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */


// Update header on scroll.
document.addEventListener("DOMContentLoaded", function () {
    var shrinkHeader = 100;

    // Function to handle the scroll effect.
    function handleScroll() {
        var header = document.querySelector('header');

        // Exit if the header has the class 'no-scroll'.
        if (header && header.classList.contains('no-scroll')) {
            return;
        }

		var scroll = getCurrentScroll();
        if (scroll >= shrinkHeader) {
            document.querySelector('header').classList.add('!mk-bg-black');
            document.querySelector('.header-container').classList.add('!mk-border-transparent');
        } else {
            document.querySelector('header').classList.remove('!mk-bg-black');
            document.querySelector('.header-container').classList.remove('!mk-border-transparent');
        }
    }

    // Get current scroll position.
    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }

    // Add the scroll event listener.
    window.addEventListener("scroll", handleScroll);

    // Check the scroll position on page load.
    handleScroll();
});


// Open main menu.
document.getElementById( 'main-menu-toggle' ).addEventListener(
	'click',
	function () {
		const menu_panel = document.getElementById( 'main-menu-panel' );

		if (menu_panel.classList.contains( 'open' )) {
			menu_panel.classList.remove( 'open', '!mk-left-0' );
			this.classList.remove( 'active' );
			document.getElementsByTagName( 'html' )[0].classList.remove( 'mk-overflow-hidden' );
		} else {
			menu_panel.classList.add( 'open', '!mk-left-0' );
			this.classList.add( 'active' );
			document.getElementsByTagName( 'html' )[0].classList.add( 'mk-overflow-hidden' );
		}
		
	}
);

// Close main menu.
document.getElementById( 'main-menu-close' ).addEventListener(
	'click',
	function () {
		const menu_panel = document.getElementById( 'main-menu-panel' );
		menu_panel.classList.remove( 'open', '!mk-left-0' );
		document.getElementsByTagName( 'html' )[0].classList.remove( 'mk-overflow-hidden' );
	}
);


// Close menu when clicking outside.
document.addEventListener('click', function(event) {
    const menu_panel = document.getElementById( 'main-menu-panel' );
    const menu_toggle = document.getElementById( 'main-menu-toggle' );

    // If the click is outside the menu panel and toggle button.
    if (!menu_panel.contains(event.target) && !menu_toggle.contains(event.target)) {
        if (menu_panel.classList.contains('open')) {
            menu_panel.classList.remove('open', '!mk-left-0');
            document.getElementsByTagName('html')[0].classList.remove('mk-overflow-hidden');
            menu_toggle.classList.remove('active');
        }
    }
});


// Open main menu submenus.
var main_menu_item = document.querySelectorAll( '.main-menu-item' );
main_menu_item.forEach(
	function (menu_item) {
		const submenu_open = menu_item.querySelector( '.submenu-open' );
		if (submenu_open) {
			menu_item.addEventListener(
				'click',
				function (event) {
					const clickedElement = event.target;
					if (!clickedElement.classList.contains('submenu-link')) {
						event.preventDefault();
						let submenu   = menu_item.querySelector( '.submenu' );
						let submenu_inner        = menu_item.querySelector( '.submenu-inner' );
						let submenu_height = submenu_inner.offsetHeight;
						const container = document.querySelector('.main-menu-container');
						
						if (menu_item.classList.contains( 'open' )) {
							submenu.style.height = '0px';
							menu_item.classList.remove( 'open' );
							submenu_inner.classList.remove( 'mk-opacity-100' );
							submenu_open.classList.remove( '-mk-rotate-180' );
						} else {
							submenu.style.height = submenu_height + 'px';
							menu_item.classList.add( 'open' );
							submenu_inner.classList.add( 'mk-opacity-100' );
							submenu_open.classList.add( '-mk-rotate-180' );

							// Scroll the opened menu to the top.
							if (container) {
								setTimeout(() => {
									const containerRect = container.getBoundingClientRect();
									const itemRect = menu_item.getBoundingClientRect();
								
									const scrollOffset = itemRect.top - containerRect.top + container.scrollTop - 16;
									const maxScroll = container.scrollHeight - container.clientHeight;
									const safeScrollOffset = Math.min(scrollOffset, maxScroll);
								
									container.scrollTo({
										top: safeScrollOffset,
										behavior: 'smooth'
									});
								}, 300);
							}
						}
					}
				}
			);
		}
	}
);


// Body Text with Nav.
const body_nav_items = document.querySelectorAll( '.body-nav-btn' );
body_nav_items.forEach(
	function (element) {
		element.addEventListener(
			'click',
			function (event) {
				event.preventDefault();
				const nav_title        = this.getAttribute( 'data-nav' );
				const target_content   = document.getElementById( nav_title );
				const body_nav_content = document.querySelectorAll( '.body-nav-content' );

				const urlHash = window.location.hash;
				if (urlHash !== '#' + nav_title) {
					if (nav_title == 'show-all') {
						history.pushState( null, null, window.location.pathname ); // remove URL hash if show all (not needed)
					}
					else {
						history.pushState( null, null, '#' + nav_title );
					}
				}

				// Remove active states.
				body_nav_items.forEach(
					function (element) {
						element.classList.remove( 'mk-text-yellow', 'mk-font-medium' );
					}
				);

				// Add active state to selected.
				this.classList.add( 'mk-text-yellow', 'mk-font-medium' );

				// Check if it's show all link.
				if (nav_title == 'show-all') {
					// Show all content.
					body_nav_content.forEach(
						function (element) {
							element.classList.remove( '!mk-hidden' );
						}
					);
				} else {
					// Hide all content.
					body_nav_content.forEach(
						function (element) {
							element.classList.add( '!mk-hidden' );
						}
					);
					// Show selected content.
					target_content.classList.remove( '!mk-hidden' );
				}

				// scroll back to body text with nav block.
				const scrollToElement = document.getElementById( 'body-text-with-nav-block' );
				setTimeout(function() {
					window.scroll({
						top: scrollToElement.offsetTop - 108,
						behavior: 'smooth'
					});
				}, 1);
			}
		);
	}
);

// Body Text with Nav Mobile.
const body_nav_items_mob = document.getElementById( 'body-nav-select' );
if (body_nav_items_mob) {
	body_nav_items_mob.addEventListener(
		'change',
		function () {
			const nav_title        = this.value;
			const target_content   = document.getElementById( nav_title );
			const body_nav_content = document.querySelectorAll( '.body-nav-content' );

			const urlHash = window.location.hash;
			if (urlHash !== '#' + nav_title) {
				if (nav_title == 'show-all') {
					history.pushState( null, null, window.location.pathname ); // remove URL hash if show all (not needed)
				}
				else {
					history.pushState( null, null, '#' + nav_title );
				}
			}

			// Check if it's show all link.
			if (nav_title == 'show-all') {
				// Show all content.
				body_nav_content.forEach(
					function (element) {
						element.classList.remove( '!mk-hidden' );
					}
				);
			} else {
				// Hide all content.
				body_nav_content.forEach(
					function (element) {
						element.classList.add( '!mk-hidden' );
					}
				);
				// Show selected content.
				target_content.classList.remove( '!mk-hidden' );
			}
		}
	);
}

// url hash handler for page load [body text with nav]
document.addEventListener("DOMContentLoaded", function () {
	const body_nav_section = document.getElementById( 'body-text-with-nav-block' );
    if (body_nav_section) {
		const urlHash = window.location.hash;
		if (urlHash) {
			setTimeout(function() {
				window.scrollTo(0, 0);
			}, 1);
		}
		const body_nav_items = document.querySelectorAll( '.body-nav-btn' );
		body_nav_items.forEach(
			function (element) {
				const nav_title = element.getAttribute( 'data-nav' );
				if (urlHash == '#' + nav_title) {
					element.click();
				}
			}
		);
	}
});

// Footer menus.
var footer_menus = document.querySelectorAll( '.footer-menu-wrap' );
footer_menus.forEach(
	function (footer_menu) {
		const toggle = footer_menu.querySelector( '.footer-menu-toggle' );
		toggle.addEventListener(
			'click',
			function () {
				let footer_menu_list   = footer_menu.querySelector( '.footer-menu' );
				let footer_menu_inner        = footer_menu.querySelector( '.footer-menu-inner' );
				let menu_height = footer_menu_inner.offsetHeight;
				if (footer_menu.classList.contains( 'open' )) {
					footer_menu_list.style.height = '0px';
					footer_menu_inner.classList.remove( 'mk-opacity-100' );
					footer_menu.classList.remove( 'open' );
				} else {
					footer_menu_list.style.height = menu_height + 'px';
					footer_menu.classList.add( 'open' );
					footer_menu_inner.classList.add( 'mk-opacity-100' );
				}
			}
		);
	}
);


// Function to handle accordion behavior for mobile view
function handleAccordion() {
    var accordion_menus = document.querySelectorAll('.accordion-item');
    accordion_menus.forEach(function (accordion_menu) {
        const toggle = accordion_menu.querySelector('.accordion-header');
        let accordion_content = accordion_menu.querySelector('.accordion-content');
        let accordion_inner = accordion_menu.querySelector('.submenu-container');
        
        // Only apply accordion functionality on screens smaller than 768px
        if (window.innerWidth < 768) {
            toggle.addEventListener('click', function () {
                let content_height = accordion_content.scrollHeight;

                if (accordion_menu.classList.contains('open')) {
                    accordion_content.style.height = '0px';
                    accordion_inner.classList.remove('mk-opacity-100');
                    accordion_menu.classList.remove('open');
                } else {
                    accordion_content.style.height = content_height + 'px';
                    accordion_menu.classList.add('open');
                    accordion_inner.classList.add('mk-opacity-100');
                }
            });
        } else {
            // For larger screens (desktop/tablet), remove click event listener and ensure content is always visible
            accordion_content.style.height = 'auto';
            accordion_inner.classList.add('mk-opacity-100');
            accordion_menu.classList.add('open');  // Ensure content is expanded
            toggle.removeEventListener('click', function () {});  // Remove event listener
        }
    });
}

// Initialize accordion behavior
handleAccordion();

// Handle window resize events to dynamically update the accordion behavior
window.addEventListener('resize', function() {
    handleAccordion();
});




// FAQs.
var faq_cards = document.querySelectorAll( '.faq-card' );
faq_cards.forEach(
	function (faq) {
		const question = faq.querySelector( '.faq-question' );
		question.addEventListener(
			'click',
			function () {
				let answer_wrap   = faq.querySelector( '.faq-answer-wrap' );
				let answer        = faq.querySelector( '.faq-body' );
				let answer_height = answer_wrap.offsetHeight;
				let plus_toggle   = faq.querySelector( '.plus-toggle' );

				if (faq.classList.contains( 'open' )) {
					answer.style.height = '0px';
					faq.classList.remove( 'open' );
					answer_wrap.classList.remove( 'mk-opacity-100' );
					plus_toggle.classList.remove( '-mk-rotate-90' );
					faq.classList.remove( 'mk-pl-4', 'mk-bg-[#f1f1f1a3]' );
				} else {
					answer.style.height = answer_height + 'px';
					faq.classList.add( 'open' );
					answer_wrap.classList.add( 'mk-opacity-100' );
					plus_toggle.classList.add( '-mk-rotate-90' );
					faq.classList.add( 'mk-pl-4', 'mk-bg-[#f1f1f1a3]' );
				}
			}
		);
	}
);


// Accordion.
if (window.innerWidth < 640) {
	var accordion_wrap = document.querySelectorAll( '.accordion-wrap' );
	accordion_wrap.forEach(
		function ( accordion) {
			const question =  accordion.querySelector( '.accordion-toggle' );
			question.addEventListener(
				'click',
				function () {
					let accordion_inner   =  accordion.querySelector( '.accordion-inner' );
					let accordion_body        =  accordion.querySelector( '.accordion-body' );
					let accordion_height = accordion_inner.offsetHeight;
					let toggle_icon   =  accordion.querySelector( '.toggle-icon' );

					if ( accordion.classList.contains( 'open' )) {
						accordion_body.style.height = '0px';
						accordion.classList.remove( 'open' );
						accordion_inner.classList.remove( 'mk-opacity-100' );
						toggle_icon.classList.remove( '-mk-rotate-180' );
					} else {
						accordion_body.style.height = accordion_height + 'px';
						accordion.classList.add( 'open' );
						accordion_inner.classList.add( 'mk-opacity-100' );
						toggle_icon.classList.add( '-mk-rotate-180' );
					}
				}
			);
		}
	);
}


// Autoplay video.
const videos = document.querySelectorAll('.autoplay-video');
const observer = new IntersectionObserver((entries, observer) => {
	entries.forEach(entry => {
		const video = entry.target;
		if (entry.isIntersecting) {
			video.play();
		} else {
			video.pause();
		}
	});
});
videos.forEach(video => {
  	observer.observe(video);
});



// Scrolling animations.
function animationObserver(target, addClass, threshold) {
	const elements = document.querySelectorAll( target );

	const observer = new IntersectionObserver(
		(entries) => {
			entries.forEach(
			(entry) => {
				if (entry.isIntersecting) {
					entry.target.classList.add( addClass );
					observer.unobserve( entry.target );
				}
				}
			);
		},
		{
			threshold: threshold,
		}
	);

	elements.forEach(
		(element) => {
			observer.observe( element );
		}
	);
}
animationObserver( '.fade-up', 'loaded', 0.6 );


// Jquery functions.
(function ($) {
	const isMobile = window.innerWidth <= 768;

	$('select').not('.faqs-categories-menu-block select').not('#resource-category-select').not(isMobile ? '.wpforms-field-select select' : '').selectric({ 
		disableOnMobile: false, 
		nativeOnMobile: false,
		onChange: function(element) { // sends change event to vanilla js code (because mobile issues)
			element.dispatchEvent(new Event('change', { bubbles: true }));
		}
	});
	
	const body_nav_items_mob = document.getElementById( 'body-nav-select' );
	if (body_nav_items_mob) {
		const urlHash = window.location.hash;
		if (urlHash) {
			$('select').val(window.location.hash.replace('#', '')).change().selectric('refresh');
		}
	}

	// Text / Video split play button.
	var video = $( '.video-field-container' );
	$( video ).each(
		function () {
			var container = $( this );
			var vid           = $( this ).find( '.video-field' );
			var play_btn_icon = $( this ).find( '.play-btn-icon' );
			container.click(
				function () {
					if ($( vid )[0].paused) {
						$( vid )[0].play();
						$( play_btn_icon ).hide();
					} else {
						$( vid )[0].pause();
					}
				}
			);
			$( $( vid )[0] ).on(
				"play",
				function () {
					play_btn_icon.hide();
				}
			);
			$( $( vid )[0] ).on(
				"pause",
				function () {
					play_btn_icon.show();
				}
			);
		}
	);


	// Hero background video text ticker.
	$(window).on('load', function() {
		var text_ticker = $('.text-ticker');

		if(text_ticker.length) {
			var text_height = $('.text-ticker-section').outerHeight();
			var text_count = $('.text-ticker-section').length;
			var currentIndex = 0;
			var interval;
		
			// Clone text elements.
			$('.text-ticker').append($('.text-ticker-section').clone());
		
			function animate_text() {
				$('.text-ticker').animate({top: '-=' + text_height}, 300, function(){
					currentIndex++;
					if (currentIndex === text_count) {
						$('.text-ticker').css('top', 0);
						currentIndex = 0;
					}
				});
			}
		
			function startTicker() {
				interval = setInterval(animate_text, 1500);
			}
		
			function stopTicker() {
				clearInterval(interval);
			}
		
			// Start the ticker on page load.
			startTicker();
		
			// Listen for visibility change events.
			document.addEventListener('visibilitychange', function() {
				if (document.hidden) {
					stopTicker(); 
				} else {
					startTicker();
				}
			});
		}
		
	});

})( jQuery );

// Calendly Book a Demo link.
addEventListener('click', function(event) {
	if (event.target.href) {
		const splitHref = event.target.href.split('#');
		const urlHash = splitHref[splitHref.length - 1];
		if (urlHash === "prism-book-a-demo") {
			event.preventDefault();
			Calendly.initPopupWidget({url: 'https://calendly.com/prism1-addisonlee/30min'});
			return false;
		}
	}
});

