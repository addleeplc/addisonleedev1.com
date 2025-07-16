<?php
/**
 * The template for displaying the site footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$social_links = get_field( 'social_links', 'options' );
$payment_methods = get_field( 'payment_methods', 'options' );
$n_intro_text = get_field( 'newsletter_introduction_text', 'options' );
$n_info_text = get_field( 'newsletter_information_text', 'options' );

$footer_menus = array( 'footer-menu-one', 'footer-menu-two', 'footer-menu-three', 'footer-menu-four', 'footer-menu-five' );
?>

<footer class="mk-bg-midnight mk-text-white mk-pt-8 md:mk-pt-18 mk-pb-8 md:mk-pb-12">
	<div class="md:mk-hidden mk-mb-10 mk-px-4 mk-pb-8 mk-border-b mk-border-white/25">
		<div id="back-to-top" class="mk-flex mk-justify-end mk-items-center mk-gap-4">
			<span class="mk-text-sm mk-tracking-[1.4px]">BACK TO TOP</span>
			<?php echo wp_kses( addisonlee_svgs( 'chevron-box' ), allowed_svg_tags() ); ?>
		</div>
	</div>
	<div class="mk-px-4">
		<div class="mk-max-w-site mk-mx-auto">
			<div class="mk-flex mk-justify-between mk-gap-6 mk-text-white">
				<div class="mk-w-[30%] lg:mk-block mk-hidden">
					<p class="mk-text-xxxs-title mk-text-white mk-max-w-[320px] mk-mb-6"><?= esc_html( $n_intro_text ); ?></p>

					<form class="newsletter-wrapper mk-max-w-[300px] mk-mb-6" action="https://tracking.addisonlee.com/u/register.php" method="get">
						<input type=hidden name="CID" value="1048989592">
						<input type=hidden name="SID" value="">
						<input type=hidden name="UID" value="">
						<input type=hidden name="f" value="1878">
						<input type=hidden name="p" value="2">
						<input type=hidden name="a" value="r">
						<input type=hidden name="el" value="">
						<input type=hidden name="llid" value="">
						<input type=hidden name="c" value="">
						<input type=hidden name="counted" value="">
						<input type=hidden name="RID" value="">
						<input type=hidden name="mailnow" value="">

						<input required type="text" name="inp_1" id="newsletter" placeholder="First Name" maxlength="60" class="newsletter-signup mk-border-b mk-border-white/25">
						<input required type="text" name="inp_3" id="newsletter" placeholder="Email Address" maxlength="255" class="newsletter-signup">
						<button type="submit" class="btn" name="submit1" value="Subscribe">Sign Up</button>
					</form>

					<div class="mk-text-xxxxxs-title mk-text-white mk-opacity-[0.32] mk-max-w-[320px]">
						<?= $n_info_text; ?>
					</div>
				</div>
				<div class="lg:mk-w-[70%] mk-w-full">
					<div class="md:mk-flex mk-justify-between mk-gap-6 mk-pb-2 md:mk-pb-28">
						<?php
						foreach ( $footer_menus as $menu_name ) {
							$locations   = get_nav_menu_locations();
							$menu_id     = isset( $locations[ $menu_name ] ) ? $locations[ $menu_name ] : 0;
							$menu_object = wp_get_nav_menu_object( $menu_id );
							?>
							<div class="footer-menu-wrap md:mk-w-1/5 mk-mb-8 md:mk-mb-0 mk-overflow-hidden mk-transition-all mk-duration-300 mk-ease-bezier <?= $menu_object->name == "Privacy Terms" ? "mk-min-w-[157px]" : ""; ?>">
								<?php if ( $menu_object && ! is_wp_error( $menu_object ) ) { ?>
									<div class="footer-menu-toggle mk-flex mk-justify-between mk-items-center">
										<p class="mk-text-xxs-title mk-font-medium mk-uppercase"><?php echo esc_html( $menu_object->name ); ?></p>
										<span class="md:mk-hidden"><?php echo wp_kses( addisonlee_svgs( 'chevron-down-white' ), allowed_svg_tags() ); ?></span>
									</div>
									<?php
								}
								if ( has_nav_menu( $menu_name ) ) {
									?>
									<div class="footer-menu mk-h-0 md:mk-h-auto mk-transition-all mk-duration-300 mk-ease-bezier">
										<div class="footer-menu-inner mk-opacity-0 md:mk-opacity-100 mk-transition-all mk-duration-500 mk-ease-bezier">
											<?php
											wp_nav_menu(
												array(
													'theme_location' => $menu_name,
													'add_li_class' => 'mk-text-white/64 mk-font-light mk-pt-4 md:mk-pt-5 mk-transition-opacity mk-duration-300 mk-ease-bezier hover:mk-text-white',
												)
											);
											?>
										</div>
									</div>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<div class="mk-py-6 mk-px-4">
		<div class="mk-max-w-site mk-mx-auto">
			<div class="md:mk-flex mk-justify-between">
				<div class="mk-text-center md:mk-text-left md:mk-block mk-hidden">
					<div class="social-links mk-flex mk-justify-center md:mk-justify-end mk-gap-2 mk-mt-8 md:mk-mt-0">
						<?php
						foreach ( $payment_methods as $link_item ) {
							$icon = $link_item['method'];
							$alt  = $icon['alt'];
							?>
							<img class="payment-methods" src="<?php echo esc_html( $icon['url'] ); ?>" alt="<?php echo esc_html( $icon['alt'] ); ?>">
						<?php } ?>
					</div>
				</div>
				<?php if ( $social_links ) { ?>
					<div class="social-links mk-flex mk-justify-center md:mk-justify-end mk-gap-6 mk-mt-8 md:mk-mt-0">
						<?php
						foreach ( $social_links as $link_item ) {
							$icon = $link_item['icon'];
							$url  = $link_item['url'];
							$alt  = $icon['alt'];
							?>
							<a href="<?php echo esc_html( $url ); ?>" target="_blank" title="<?= esc_html($alt); ?>"><img class="style-svg" src="<?php echo esc_html( $icon['url'] ); ?>" alt="<?php echo esc_html( $icon['alt'] ); ?>"></a>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="mk-border-t mk-border-white/25 mk-pt-6 mk-px-4">
		<div class="mk-max-w-site mk-mx-auto">
			<div class="md:mk-flex mk-justify-between">
				<div class="mk-text-sm mk-opacity-60 mk-text-center md:mk-text-left">
					<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?> Addison Lee Limited. All rights reserved.</p>
				</div>
			</div>
		</div>
		<div class="mk-max-w-site mk-mx-auto md:mk-hidden mk-block">
			<div class="social-links mk-flex mk-justify-center md:mk-justify-end mk-gap-2 mk-mt-8 md:mk-mt-0">
				<?php
				foreach ( $payment_methods as $link_item ) {
					$icon = $link_item['method'];
					$alt  = $icon['alt'];
					?>
					<img class="payment-methods" src="<?php echo esc_html( $icon['url'] ); ?>" alt="<?php echo esc_html( $icon['alt'] ); ?>">
				<?php } ?>
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
	var scrollToTopBtn = document.getElementById('back-to-top');
	scrollToTopBtn.addEventListener('click', function() {
		window.scrollTo({
			top: 0,
			behavior: 'auto'
		});
	});
});
</script>