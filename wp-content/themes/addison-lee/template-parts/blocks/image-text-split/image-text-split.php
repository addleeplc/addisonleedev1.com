<?php
/**
 * Image / Text Split.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$subheading     = get_field( 'subheading' );
$heading_white  = get_field( 'heading_white' );
$heading_yellow = get_field( 'heading_yellow' );
$text           = get_field( 'text' );
$cta            = get_field( 'cta' );
$cta_image      = get_field( 'cta_image' );
$cta_two        = get_field( 'cta_two' );
$cta_image_two  = get_field( 'cta_image_two' );
$image          = get_field( 'image' );
$bg_colour      = get_field( 'background_colour' ); // mk-bg-black / mk-bg-white.
$image_position = get_field( 'image_position' ); // mk-order-1 / mk-order-2.
$add_checklist  = get_field( 'add_checklist' );
$checklist      = get_field( 'checklist' );

// Background colour changes.
if ( 'mk-bg-third-grey' === $bg_colour ) {
	$heading_colour    = '!mk-text-black';
	$card_title_colour = 'mk-text-black';
	$text_colour       = 'mk-prose-grey';

	$cta_colour     = 'btn btn-black';
	$cta_two_colour = 'btn-clear';
	$cta_svg        = 'arrow-right-white';
} else if ( 'mk-bg-white' === $bg_colour ) {
	$heading_colour    = '!mk-text-black';
	$card_title_colour = 'mk-text-black';
	$text_colour       = 'mk-prose-grey';

	$cta_colour     = 'btn btn-black';
	$cta_two_colour = 'btn-clear';
	$cta_svg        = 'arrow-right-white';
} 
else {
	$heading_colour = '';
	$text_colour    = ' mk-prose-light-grey';
	$cta_colour     = 'btn';
	$cta_two_colour = 'btn-clear btn-clear-white';
	$cta_svg        = 'arrow-right';
}

// Image position changes.
if ( 'mk-order-2' === $image_position ) {
	$image_margin    = 'md:mk-ml-auto';
	$content_padding = 'sm:mk-pr-5 md:mk-pr-6';
} else {
	$image_margin    = 'md:mk-mr-auto';
	$content_padding = 'sm:mk-pl-5 md:mk-pl-6';
}

// Block ID.
$block_id = 'image-text-split';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'image-text-split';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div class="<?php echo esc_html( $class_name ); ?> mk-w-full mk-px-4 mk-py-12 md:mk-py-28 <?php echo esc_html( $bg_colour ); ?>" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site mk-h-full mk-mx-auto sm:mk-flex">
		<div class="sm:mk-w-1/2 mk-mb-12 sm:mk-mb-0 <?php echo esc_html( $image_position ); ?>">
			<?php if (is_array($image)) { ?>
				<img class="lg:mk-max-w-image mk-w-full mk-h-image-md lg:mk-h-image-xl mk-object-cover <?php echo esc_html( $image_margin ); ?>" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
			<?php } ?>
		</div>
		<div class="sm:mk-w-1/2 mk-flex mk-flex-col mk-justify-between <?php echo esc_html( $content_padding ); ?>">
			<div>
				<?php if ( $subheading ) { ?>
					<h3 class="mk-text-xxxs-title mk-font-medium mk-uppercase mk-mb-6 md:mk-mb-4"><?php echo esc_html( $subheading ); ?></h3>
				<?php } ?>
			</div>
			<div>
				<h2 class="mk-text-1md-title md:mk-text-lg-title mk-font-medium mk-uppercase mk-mb-4">
					<span class="mk-block mk-text-white <?php echo esc_html( $heading_colour ); ?>"><?php echo esc_html( $heading_white ); ?></span>
					<span class="mk-block mk-text-yellow md:mk-pl-18 <?php echo esc_html( $heading_colour ); ?>"><?php echo esc_html( $heading_yellow ); ?></span>
				</h2>
				<div class="md:mk-pl-18">
					<div class="mk-max-w-md mk-prose mk-text-lg <?php echo esc_html( $text_colour ); ?>">
						<?php echo wp_kses_post( $text ); ?>
					</div>
					<?php
					if ( $add_checklist ) {
						$checklist_title = $checklist['title'];
						$checklist_list  = $checklist['list'];
						$checklist_text  = $checklist['content'];
						?>
						<div class="mk-pt-6">
							<?php if ( $checklist_title ) { ?>
								<div class="mk-prose <?php echo esc_html( $text_colour ); ?> mk-text-lg mk-font-medium mk-mb-5">
									<p><?php echo esc_html( $checklist_title ); ?></p>
								</div>
							<?php } ?>
							<?php
							foreach ( $checklist_list as $item ) {
								$text = $item['text'];
								?>
								<div class="mk-flex mk-gap-2">
									<div><?php echo wp_kses( addisonlee_svgs( 'checkbox' ), allowed_svg_tags() ); ?></div>
									<div class="mk-prose <?php echo esc_html( $text_colour ); ?> mk-text-lg mk-mt-1 mk-mb-2">
										<p><?php echo esc_html( $text ); ?></p>
									</div>
								</div>
							<?php } ?>
							<div class="mk-prose <?php echo esc_html( $text_colour ); ?> mk-text-lg mk-mt-4">
								<p><?php echo wp_kses_post( $checklist_text ); ?></p>
							</div>
						</div>
					<?php } ?>
					<?php if ( $cta || $cta_two ) { ?>
						<div class="mk-flex mk-flex-wrap mk-gap-x-8 mk-gap-y-4 mk-mt-8 md:mk-mt-12">
							<?php if ( $cta ) { ?>
								<a 
									class="<?php echo esc_html( $cta_image ? '' : $cta_colour ); ?>" 
									href="<?php echo esc_html( $cta['url'] ); ?>" 
									target="<?php echo esc_html( $cta['target'] ); ?>"
								>
									<?php if ( $cta_image ) { ?>
										<img src="<?php echo esc_html( $cta_image['url'] ); ?>" alt="<?php echo esc_html( $cta_image['alt'] ); ?>" class="mk-w-full mk-h-auto">
									<?php } else { ?>
										<?php echo esc_html( $cta['title'] ); ?>
										<?php echo wp_kses( addisonlee_svgs( $cta_svg ), allowed_svg_tags() ); ?>
									<?php } ?>
								</a>
							<?php } ?>
							<?php if ( $cta_two ) { ?>
								<a 
									class="<?php echo esc_html( $cta_image_two ? '' : $cta_two_colour ); ?>" 
									href="<?php echo esc_html( $cta_two['url'] ); ?>" 
									target="<?php echo esc_html( $cta_two['target'] ); ?>"
								>
									<?php if ( $cta_image_two ) { ?>
										<img src="<?php echo esc_html( $cta_image_two['url'] ); ?>" alt="<?php echo esc_html( $cta_image_two['alt'] ); ?>" class="mk-w-full mk-h-auto">
									<?php } else { ?>
										<?php echo esc_html( $cta_two['title'] ); ?>
										<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?>
									<?php } ?>
								</a>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</div>
			<div></div>
		</div>
	</div>
</div>
