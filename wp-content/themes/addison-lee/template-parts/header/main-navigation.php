<?php
/**
 * Displays the main navigation.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$main_navigation = get_field( 'main_navigation', 'options' );

if ( $main_navigation ) { ?>
	<div id="main-menu-panel" class="mk-absolute mk-top-0 -mk-left-full md:-mk-left-[605px] md:mk-max-w-[605px] xxxl-lg:-mk-left-[37.5%] xxxl-lg:mk-max-w-[37.5%] mk-w-full mk-h-screen mk-pt-28 md:mk-pt-10 mk-bg-black mk-transition-all mk-duration-700 mk-ease-bezier">
		<div class="mk-hidden md:mk-flex mk-justify-end mk-px-4 md:mk-px-20 mk-py-4">
			<div id="main-menu-close" class="mk-cursor-pointer hover:mk-opacity-60 mk-transition-opacity"><?php echo wp_kses( addisonlee_svgs( 'close-white' ), allowed_svg_tags() ); ?></div>
		</div>
		<div class="main-menu-container mk-overflow-y-auto mk-h-[calc(100%-80px)] mk-pt-8 md:mk-pt-24">
			<div class="mk-px-4 md:mk-px-20">
				<?php
				foreach ( $main_navigation as $menu_item ) {
					$item            = $menu_item['menu_item'];
					$enable_submenu  = $menu_item['enable_submenu'];
					$submenu_items   = $menu_item['submenu'];
					$display_smaller = $menu_item['display_smaller'];

					if ( $display_smaller ) {
						$font_style = 'mk-text-xxxxs-title';
					} else {
						$font_style = 'mk-text-1sm-title md:mk-text-2sm-title mk-font-medium';
					}
					?>
					<div class="main-menu-item mk-mb-6 md:mk-mb-8 md:mk-text-left">
						<div class="mk-flex mk-justify-between mk-items-center md:mk-flex-row mk-group">
							<a class="<?php echo esc_html( $font_style ); ?> mk-text-white mk-uppercase group-hover:mk-text-yellow mk-transition-opacity" href="<?php echo esc_html( $item['url'] ); ?>" target="<?php echo esc_html( $item['target'] ); ?>"><?php echo esc_html( $item['title'] ); ?></a>
							<?php if ( $enable_submenu && $submenu_items ) { ?>
								<div class="submenu-open mk-cursor-pointer group-hover:mk-text-yellow mk-transition-opacity">
									<?php echo wp_kses( addisonlee_svgs( 'chevron-down-white' ), allowed_svg_tags() ); ?>
								</div>
							<?php } ?>
						</div>
						<?php if ( $enable_submenu && $submenu_items ) { ?>
							<div class="submenu mk-h-0 mk-overflow-hidden mk-transition-all mk-duration-300 mk-ease-bezier">
								<div class="submenu-inner mk-pt-6 mk-opacity-0 mk-transition-all mk-duration-500 mk-ease-bezier">
								<?php
								foreach ( $submenu_items as $submenu_item ) {
									$item = $submenu_item['submenu_item'];
									$yellow_highlight = $submenu_item['yellow_highlight'];
									if($yellow_highlight){
										$highlight = 'mk-text-yellow';
									} else {
										$highlight = 'mk-text-white/64 hover:mk-text-white';
									}
									?>
									<a class="mk-block <?php echo esc_html( $highlight ); ?> mk-mb-4 submenu-link" href="<?php echo esc_html( $item['url'] ); ?>" target="<?php echo esc_html( $item['target'] ); ?>"><?php echo esc_html( $item['title'] ); ?></a>
								<?php } ?>
								</div>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>