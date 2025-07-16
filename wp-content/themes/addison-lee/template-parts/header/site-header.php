<?php
/**
 * Displays the site header.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$logo           = get_field( 'header_logo', 'options' );
$logo_mob       = get_field( 'header_logo_mobile', 'options' );
$booking_link   = get_field( 'booking_link_header', 'options' );
$sign_in_link   = get_field( 'sign_in_link', 'options' );
$button_classes = 'mk-block mk-w-full mk-h-0.5 mk-bg-white md:group-[.active]:-mk-rotate-0 md:group-[.active]:-mk-translate-y-0 mk-origin-center mk-transition-transform mk-transition-opacity mk-duration-300 mk-ease-bezier';
?>

<header id="masthead" class="site-header mk-fixed mk-w-full mk-bg-black mk-text-white mk-px-4 mk-z-[10000] mk-transition-colors mk-duration-500 mk-ease-bezier">
	<div class="header-container mk-relative mk-max-w-site mk-mx-auto 
	<?php
	if ( ! is_page( 239 ) ) {
		echo 'md:mk-border-b md:mk-border-white/64';}
	?>
	mk-z-10 md:mk-z-0 mk-transition-all mk-duration-500 mk-ease-bezier">
		<div class="mk-h-16 md:mk-h-[108px] mk-flex mk-justify-between mk-items-center mk-flex-row-reverse md:mk-flex-row">
			<div class="md:mk-w-1/3 mk-flex md:mk-block mk-justify-end mk-gap-5">
				<?php if ( $booking_link ) { ?>
					<a class="btn md:mk-hidden" href="<?php echo esc_html( $booking_link['url'] ); ?>" target="<?php echo esc_html( $booking_link['target'] ); ?>"><?php echo esc_html( $booking_link['title'] ); ?></a>
				<?php } ?>
				<button id="main-menu-toggle" class="mk-flex mk-items-center mk-gap-2 mk-group mk-outline-none hover:mk-opacity-60 mk-transition-opacity mk-touch-manipulation">
					<div class="mk-relative mk-w-5 mk-h-4 mk-flex mk-flex-col mk-justify-between">
						<span class="<?php echo esc_html( $button_classes ); ?> group-[.active]:mk-rotate-[45deg] group-[.active]:mk-translate-y-[7px]"></span>
						<span class="<?php echo esc_html( $button_classes ); ?> group-[.active]:mk-opacity-0 md:group-[.active]:mk-opacity-100"></span>
						<span class="<?php echo esc_html( $button_classes ); ?> group-[.active]:-mk-rotate-[45deg] group-[.active]:-mk-translate-y-[7px]"></span>
					</div>
					<span class="mk-text-sm mk-font-medium mk-tracking-[1.4px] mk-hidden md:mk-block">MENU</span>
				</button>
			</div>
			<div class="md:mk-w-1/3 mk-text-center">
				<a class="mk-block md:mk-w-36 mk-mx-auto" href="/">
					<img class="mk-hidden md:mk-block" src="<?php echo esc_html( $logo['url'] ); ?>" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>">
					<img class="mk-block md:mk-hidden" src="<?php echo esc_html( $logo_mob['url'] ); ?>" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>">
				</a>
			</div>
			<div class="mk-w-1/3 mk-hidden md:mk-block">
				<div class="mk-flex mk-justify-end mk-items-center mk-gap-8 mk-text-right">

					<?php if($sign_in_link) { ?>
						<a class="mk-font-medium mk-tracking-[1.6px] mk-uppercase hover:mk-text-yellow" href="<?php echo esc_html( $sign_in_link ); ?>">
							<?php if ( isset( $_COOKIE['booking-logged-in'] ) ) { ?>
								<span>Account</span>
							<?php } else { ?>
								<span>Sign In</span>
							<?php } ?>
						</a>
					<?php } ?>
					<?php if ( $booking_link ) { ?>
						<a class="btn" href="<?php echo esc_html( $booking_link['url'] ); ?>" target="<?php echo esc_html( $booking_link['target'] ); ?>"><?php echo esc_html( $booking_link['title'] ); ?></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<?php get_template_part( 'template-parts/header/main-navigation' ); ?>
</header>
