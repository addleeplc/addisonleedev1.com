<?php
/**
 * SVG Functions File.
 *
 * This file contains functions related to handling SVGs.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

/**
 * Get svgs function.
 *
 * @param array $icon SVG code.
 */
function addisonlee_svgs( $icon ) {

	if ( 'chevron-down' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 8L9.5 12.5L14 8" stroke="#FFD900" stroke-width="2" stroke-linecap="square"/></svg>';
	}

	if ( 'chevron-down-yellow-select' === $icon ) {
		$svg = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 8L9.5 12.5L14 8" stroke="#FFD900" stroke-width="2" stroke-linecap="square"/></svg>';
		return 'data:image/svg+xml;base64,' . base64_encode( $svg );
	}

	if ( 'chevron-down-white' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"><path d="M13.6613 16.5195L20.6256 23.4838L27.5898 16.5195" stroke="white" stroke-width="2" stroke-linecap="square"/></svg>';
	}

	if ( 'chevron-down-black' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="8" viewBox="0 0 15 8" fill="none"><path d="M1.92745 1.21484L7.49888 6.78627L13.0703 1.21484" stroke="black" stroke-width="1.5" stroke-linecap="square"/></svg>';
	}

	if ( 'chevron-right-sm' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M7 11L10 8L7 5" stroke="black" stroke-linecap="square"/></svg>';
	}

	if ( 'chevron-right-sm-white' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M7 11L10 8L7 5" stroke="white" stroke-linecap="square"/></svg>';
	}

	if ( 'chevron-right-md' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M13.2187 21.0706L18.7902 15.4992L13.2188 9.92773" stroke="black" stroke-width="1.5" stroke-linecap="square"/></svg>';
	}

	if ( 'chevron-right-md-white' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M13.2187 21.0706L18.7902 15.4992L13.2188 9.92773" stroke="white" stroke-width="1.5" stroke-linecap="square"/></svg>';
	}

	if ( 'chevron-right-lg' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"><path d="M16.5195 26.3387L23.4838 19.3744L16.5195 12.4102" stroke="black" stroke-width="2" stroke-linecap="square"/></svg>';
	}

	if ( 'chevron-left-md' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M18.7813 21.0706L13.2098 15.4992L18.7812 9.92773" stroke="black" stroke-width="1.5" stroke-linecap="square"/></svg>';
	}

	if ( 'chevron-left-lg' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"><path d="M23.4805 26.3387L16.5162 19.3744L23.4805 12.4102" stroke="black" stroke-width="2" stroke-linecap="square"/></svg>';
	}

	if ( 'arrow-right' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12" fill="none"><path d="M10.5 0L9.45 1.05L13.65 5.25H0.5V6.75H13.65L9.45 10.95L10.5 12L16.5 6L10.5 0Z" fill="black"/></svg>';
	}

	if ( 'arrow-right-white' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="13" viewBox="0 0 17 13" fill="none"><path d="M10.5 0.5L9.45 1.55L13.65 5.75H0.5V7.25H13.65L9.45 11.45L10.5 12.5L16.5 6.5L10.5 0.5Z" fill="white"/></svg>';
	}

	if ( 'chevron-right-yellow' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none"><path d="M17.0195 26.3387L23.9838 19.3744L17.0195 12.4102" stroke="#FFD900" stroke-width="2" stroke-linecap="square"/></svg>';
	}

	if ( 'chevron-left-yellow' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none"><path d="M23.9805 26.3387L17.0162 19.3744L23.9805 12.4102" stroke="#FFD900" stroke-width="2" stroke-linecap="square"/></svg>';
	}

	if ( 'play-btn' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="112" height="112" viewBox="0 0 112 112" fill="none"><rect width="112" height="112" rx="56" fill="#F1F1F1" fill-opacity="0.48"/><path d="M78.5 56.866C79.1667 56.4811 79.1667 55.5189 78.5 55.134L45.5 36.0814C44.8333 35.6965 44 36.1776 44 36.9474V75.0526C44 75.8224 44.8333 76.3035 45.5 75.9186L78.5 56.866Z" fill="white"/></svg>';
	}

	if ( 'checkbox' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none"><path d="M13.4531 15.3652L16.215 18.1271L25.4214 8.92075" stroke="#FFD900" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/><path d="M24.5 16.2857V22.7302C24.5 23.2185 24.306 23.6868 23.9607 24.0321C23.6154 24.3774 23.1471 24.5714 22.6587 24.5714H9.76983C9.28149 24.5714 8.81316 24.3774 8.46785 24.0321C8.12255 23.6868 7.92856 23.2185 7.92856 22.7302V9.84127C7.92856 9.35293 8.12255 8.8846 8.46785 8.5393C8.81316 8.19399 9.28149 8 9.76983 8H19.8968" stroke="#FFD900" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/></svg>';
	}

	if ( 'chevron-box' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"><rect x="0.5" y="39.5" width="39" height="39" rx="3.5" transform="rotate(-90 0.5 39.5)" stroke="#FFD900"/><path d="M26.3387 23.4805L19.3744 16.5162L12.4102 23.4805" stroke="#FFD900" stroke-width="2" stroke-linecap="square"/></svg>';
	}

	if ( 'close-white' === $icon ) {
		return '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="4.99976" y="4.00012" width="20" height="2" transform="rotate(45 4.99976 4.00012)" fill="white"/><rect width="20" height="2" transform="matrix(-0.707107 0.707107 0.707107 0.707107 17.728 4)" fill="white"/></svg>';
	}

	if ( 'close-white-sm' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none"><path d="M9.92554 3L3.92554 9" stroke="white" stroke-linecap="round" stroke-linejoin="round"/><path d="M3.92554 3L9.92554 9" stroke="white" stroke-linecap="round" stroke-linejoin="round"/></svg>';
	}

	if ( 'people' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.36134 5.89726C6.36134 6.51662 6.49133 7.13654 6.72199 7.71162C6.42021 7.86624 6.09307 7.95409 5.75134 7.95409C4.23512 7.95409 3.00599 6.22468 3.00599 4.60739C3.00599 2.99009 4.23512 1.67902 5.75134 1.67902C6.57307 1.67902 7.31049 2.06412 7.81361 2.67436C6.92012 3.45463 6.36134 4.61946 6.36134 5.89726ZM1.04492 13.3921C1.04492 13.3921 2.25172 13.9642 4.33268 14.1622C4.85452 12.0263 6.68053 10.3927 8.93506 10.2946C8.3652 9.87365 7.67353 9.62705 6.92781 9.62705H4.57465C2.62506 9.62705 1.04492 11.3125 1.04492 13.3921ZM13.508 5.89726C13.508 4.1452 12.1423 2.72487 10.4576 2.72487C8.77288 2.72487 7.40718 4.1452 7.40718 5.89726C7.40718 7.64933 8.77288 9.52285 10.4576 9.52285C12.1423 9.52285 13.508 7.64933 13.508 5.89726ZM9.15023 11.3358H11.7648C13.9311 11.3358 15.6868 13.1617 15.6868 15.4145C15.6868 15.4145 13.7258 16.3209 10.4575 16.3209C7.18927 16.3209 5.22831 15.4145 5.22831 15.4145C5.22831 13.1617 6.98402 11.3358 9.15023 11.3358Z" fill="white"/></svg>';
	}

	if ( 'suitcase' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.76094 0.63323C6.89454 0.63323 6.19217 1.33559 6.19217 2.202V3.77205H5.14633V15.2723H4.10048V3.77205H3.05464C2.47703 3.77205 2.00879 4.24029 2.00879 4.81789V14.2305C2.00879 14.8081 2.47703 15.2764 3.05464 15.2764H15.6048C16.1824 15.2764 16.6506 14.8081 16.6506 14.2305V4.81789C16.6506 4.24029 16.1824 3.77205 15.6048 3.77205H14.5589L14.559 15.2723L13.5131 15.2723L13.5131 3.77205H12.4673V2.202C12.4673 1.33559 11.7649 0.63323 10.8985 0.63323H7.76094ZM11.4214 3.77205V2.202C11.4214 1.9132 11.1873 1.67908 10.8985 1.67908H7.76094C7.47214 1.67908 7.23802 1.9132 7.23802 2.202V3.77205H11.4214Z" fill="white"/><path d="M4.10048 15.2751H6.19217V16.3209C6.19217 16.8985 5.72393 17.3668 5.14633 17.3668C4.56872 17.3668 4.10048 16.8985 4.10048 16.3209V15.2751Z" fill="white"/><path d="M12.4673 15.2751H14.5589V16.3209C14.5589 16.8985 14.0907 17.3668 13.5131 17.3668C12.9355 17.3668 12.4673 16.8985 12.4673 16.3209V15.2751Z" fill="white"/></svg>';
	}

	if ( 'search' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M20.9984 21.0004L16.6484 16.6504" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
	}

	if ( 'map-pin' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none"><path d="M49 23.3333C49 39.6666 28 53.6666 28 53.6666C28 53.6666 7 39.6666 7 23.3333C7 17.7637 9.21249 12.4223 13.1508 8.48401C17.089 4.54575 22.4305 2.33325 28 2.33325C33.5695 2.33325 38.911 4.54575 42.8492 8.48401C46.7875 12.4223 49 17.7637 49 23.3333Z" stroke="#FFD900" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M28 30.3333C31.866 30.3333 35 27.1992 35 23.3333C35 19.4673 31.866 16.3333 28 16.3333C24.134 16.3333 21 19.4673 21 23.3333C21 27.1992 24.134 30.3333 28 30.3333Z" stroke="#FFD900" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
	}

	if ( 'form-people' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="36" height="32" viewBox="0 0 36 32" fill="none"><path d="M21.4283 25.1437V23.2865C21.4283 22.3014 21.037 21.3567 20.3405 20.6601C19.6439 19.9636 18.6992 19.5723 17.7141 19.5723H10.2856C9.30047 19.5723 8.35573 19.9636 7.65917 20.6601C6.96261 21.3567 6.57129 22.3014 6.57129 23.2865V25.1437" stroke="black" stroke-width="1.39285" stroke-linecap="square" stroke-linejoin="round"/><path d="M14.7753 14.3103C16.9121 14.3103 18.6443 12.5781 18.6443 10.4413C18.6443 8.30449 16.9121 6.57227 14.7753 6.57227C12.6385 6.57227 10.9062 8.30449 10.9062 10.4413C10.9062 12.5781 12.6385 14.3103 14.7753 14.3103Z" stroke="black" stroke-width="1.39285" stroke-linecap="square" stroke-linejoin="round"/><path d="M29.9317 25.1435V23.2932C29.9311 22.4733 29.6582 21.6767 29.1558 21.0287C28.6535 20.3807 27.9501 19.9179 27.1562 19.7129" stroke="black" stroke-width="1.39285" stroke-linecap="square" stroke-linejoin="round"/><path d="M22.8213 6.71289C23.6503 6.92515 24.3851 7.40729 24.9098 8.0833C25.4346 8.75931 25.7194 9.59074 25.7194 10.4465C25.7194 11.3023 25.4346 12.1337 24.9098 12.8097C24.3851 13.4857 23.6503 13.9678 22.8213 14.1801" stroke="black" stroke-width="1.39285" stroke-linecap="square" stroke-linejoin="round"/></svg>';
	}

	if ( 'form-contact' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M19.2104 5.25977V11.1916H25.1423" stroke="black" stroke-width="1.19634" stroke-linecap="round" stroke-linejoin="round"/><path d="M24.2931 25.5976H9.03979C8.81504 25.5976 8.5995 25.5083 8.44058 25.3494C8.28166 25.1904 8.19238 24.9749 8.19238 24.7502V6.10717C8.19238 5.88243 8.28166 5.66689 8.44058 5.50797C8.5995 5.34905 8.81504 5.25977 9.03979 5.25977H19.2087L25.1406 11.1916V24.7502C25.1406 24.9749 25.0513 25.1904 24.8924 25.3494C24.7334 25.5083 24.5179 25.5976 24.2931 25.5976Z" stroke="black" stroke-width="1.19634" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.2729 16.2754H20.0522" stroke="black" stroke-width="1.19634" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.2729 19.666H20.0522" stroke="black" stroke-width="1.19634" stroke-linecap="round" stroke-linejoin="round"/></svg>';
	}

	if ( 'form-user' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M9.37829 22.5479C10.4865 21.7896 11.5914 21.1994 12.6927 20.774C13.7907 20.3485 14.9813 20.1358 16.2542 20.1358C17.5272 20.1358 18.7212 20.3485 19.8329 20.774C20.9411 21.1994 22.0528 21.7896 23.161 22.5479C23.9571 21.6043 24.5541 20.6161 24.9487 19.5799C25.3467 18.5438 25.5457 17.4355 25.5457 16.2518C25.5457 13.627 24.6536 11.4208 22.8694 9.64003C21.0852 7.85586 18.8825 6.96377 16.2542 6.96377C13.626 6.96377 11.4267 7.85586 9.64249 9.64003C7.85831 11.4242 6.96622 13.627 6.96622 16.2518C6.96622 17.4355 7.16523 18.5438 7.56324 19.5799C7.96125 20.6161 8.56511 21.6043 9.37829 22.5479ZM16.2542 16.89C15.2558 16.89 14.4152 16.5503 13.7324 15.8641C13.0496 15.1813 12.7065 14.3407 12.7065 13.3422C12.7065 12.3437 13.0496 11.5031 13.7324 10.8203C14.4152 10.1375 15.2592 9.79444 16.2542 9.79444C17.2492 9.79444 18.0933 10.1341 18.7795 10.8203C19.4623 11.5031 19.8054 12.3437 19.8054 13.3422C19.8054 14.3407 19.4623 15.1813 18.7795 15.8641C18.0967 16.5503 17.2527 16.89 16.2542 16.89ZM16.2542 26.7921C14.7926 26.7921 13.427 26.5142 12.1506 25.9618C10.8743 25.406 9.76257 24.6546 8.80872 23.7007C7.85487 22.7503 7.10346 21.6352 6.54762 20.3588C5.99178 19.0824 5.71387 17.7169 5.71387 16.2552C5.71387 14.7936 5.99178 13.428 6.54762 12.1516C7.10346 10.8752 7.85487 9.76356 8.80872 8.80971C9.75914 7.85929 10.8743 7.10444 12.1506 6.5486C13.427 5.99276 14.7926 5.71484 16.2542 5.71484C17.7159 5.71484 19.0815 5.99276 20.3578 6.5486C21.6342 7.10444 22.7459 7.85586 23.6997 8.80971C24.6502 9.76356 25.405 10.8752 25.9608 12.1516C26.5167 13.428 26.7946 14.7936 26.7946 16.2552C26.7946 17.7169 26.5167 19.0824 25.9608 20.3588C25.405 21.6352 24.6536 22.7503 23.6997 23.7007C22.7459 24.6546 21.6342 25.406 20.3578 25.9618C19.0815 26.5142 17.7159 26.7921 16.2542 26.7921ZM16.2542 25.5432C17.2904 25.5432 18.306 25.3751 19.3045 25.0457C20.3029 24.7129 21.2465 24.1845 22.1317 23.464C21.2431 22.7983 20.3064 22.2905 19.3148 21.9406C18.3266 21.5871 17.3041 21.4122 16.2508 21.4122C15.1974 21.4122 14.1715 21.5871 13.1731 21.9406C12.1746 22.2905 11.2414 22.7983 10.3733 23.464C11.262 24.1845 12.2021 24.7129 13.2005 25.0457C14.199 25.3785 15.2146 25.5432 16.2508 25.5432M16.2542 15.617C16.9199 15.617 17.4654 15.4043 17.8909 14.9788C18.3163 14.5534 18.5291 14.0078 18.5291 13.3422C18.5291 12.6766 18.3163 12.131 17.8909 11.7056C17.4654 11.2801 16.9199 11.0674 16.2542 11.0674C15.5886 11.0674 15.0431 11.2801 14.6176 11.7056C14.1921 12.131 13.9794 12.6766 13.9794 13.3422C13.9794 14.0078 14.1921 14.5534 14.6176 14.9788C15.0431 15.4043 15.5886 15.617 16.2542 15.617Z" fill="black"/></svg>';
	}

	if ( 'form-payment' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M15.6711 25.021C15.879 25.021 16.0485 24.9506 16.1893 24.8131C16.3268 24.6755 16.3972 24.5028 16.3972 24.2949C16.3972 24.087 16.3236 23.9175 16.1765 23.7768C16.0293 23.6392 15.863 23.5689 15.6743 23.5689C15.4664 23.5689 15.2937 23.6392 15.1562 23.7768C15.0186 23.9143 14.9483 24.087 14.9483 24.2949C14.9483 24.5028 15.0218 24.6755 15.169 24.8131C15.3161 24.9506 15.4824 25.021 15.6743 25.021M8.95117 5.14258H22.3911V26.8569H8.95117V5.14258ZM10.1122 21.7393H21.2268V8.58091H10.1122V21.7393ZM10.1122 25.6926H21.2268V22.9004H10.1122V25.6926ZM10.1122 7.41987H21.2268V6.30681H10.1122V7.41987Z" fill="black"/></svg>';
	}

	if ( 'form-submit' === $icon ) {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M12.5273 14.9866L15.3634 17.8226L24.8168 8.36914" stroke="black" stroke-width="1.25714" stroke-linecap="square" stroke-linejoin="round"/><path d="M23.8736 15.9358V22.5533C23.8736 23.0547 23.6744 23.5356 23.3199 23.8902C22.9653 24.2448 22.4844 24.4439 21.9829 24.4439H8.74811C8.24667 24.4439 7.76577 24.2448 7.41119 23.8902C7.05662 23.5356 6.85742 23.0547 6.85742 22.5533V9.31842C6.85742 8.81698 7.05662 8.33608 7.41119 7.9815C7.76577 7.62693 8.24667 7.42773 8.74811 7.42773H19.1469" stroke="black" stroke-width="1.25714" stroke-linecap="square" stroke-linejoin="round"/></svg>';
	}
}

/** Define allowed svgs. */
function allowed_svg_tags() {
	return array(
		'svg'  => array(
			'xmlns'   => array(),
			'width'   => array(),
			'height'  => array(),
			'viewBox' => array(),
			'fill'    => array(),
		),
		'path' => array(
			'd'              => array(),
			'stroke'         => array(),
			'stroke-width'   => array(),
			'stroke-linecap' => array(),
			'fill'           => array(),
		),
		'rect' => array(
			'd'              => array(),
			'stroke'         => array(),
			'stroke-width'   => array(),
			'stroke-linecap' => array(),
			'fill'           => array(),
			'fill-opacity'   => array(),
			'rx'             => array(),
			'width'          => array(),
			'height'         => array(),
			'transform'      => array(),
			'x'              => array(),
			'y'              => array(),
		),
	);
}


/** Sanitize image HTML output with specific allowed tags. */
function sanitize_image_output( $html ) {
	// Allowed tags for images.
	$allowed_tags = array(
		'img' => array(
			'src'    => true,
			'alt'    => true,
			'class'  => true,
			'width'  => true,
			'height' => true,
			'srcset' => true,
			'sizes'  => true,
		),
	);

	return wp_kses( $html, $allowed_tags );
}
