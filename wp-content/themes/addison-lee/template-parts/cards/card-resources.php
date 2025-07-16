<?php
/**
 * Resource Card.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$image      = get_the_post_thumbnail( $post->ID, 'large', array( 'class' => 'mk-w-full mk-h-full mk-object-cover' ) );
$cta        = get_the_permalink( $post->ID );
$categories = get_the_terms( $post->ID, 'resource_category' );
$excerpt    = get_the_excerpt( $post->ID );

// Check for the newest post.
$newest_post = get_posts(
	array(
		'post_type'   => 'resources',
		'numberposts' => 1,
		'post_status' => 'publish',
	)
);
?>

<div class="post-card">
	<a class="mk-relative mk-block mk-h-image-1sm" href="<?php echo esc_html( $cta ); ?>">
		<?php echo wp_kses_post( sanitize_image_output( $image ) ); ?>
		<?php if ( $newest_post && get_the_ID() === $newest_post[0]->ID ) { ?>
			<span class="mk-absolute mk-top-4 mk-right-4 mk-bg-yellow mk-px-3 mk-py-2 mk-text-xxxxxs-title">NEW</span>
		<?php } ?>
	</a>
	<div class="mk-h-[calc(100%-355px)] mk-flex mk-flex-col mk-justify-between mk-p-6 mk-border mk-border-black/15 mk-border-t-0">
		<div>
			<div class="mk-text-lg mk-flex mk-items-center mk-gap-2 mk-mt-1 mk-text-xxxxxs-title mk-text-black/64 mk-mb-4">
				<?php foreach ( $categories as $category ) { ?>
					<div class="mk-uppercase"><?php echo esc_html( $category->name ); ?></div>
					<span class="last:mk-hidden">|</span>
				<?php } ?>
			</div>
			<h3 class="mk-text-xl md:mk-text-2xl mk-font-medium mk-leading-h3"><?php echo esc_html( get_the_title() ); ?></h3>
			<p class="mk-text-lg mk-text-black/64 mk-leading-tight mk-line-clamp-2 mk-mt-3 mk-mb-9"><?php echo esc_html( $excerpt ); ?></p>
		</div>
		<div>
			<a class="btn-clear !mk-pb-0" href="<?php echo esc_html( $cta ); ?>">READ MORE<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?></a>
		</div>
	</div>
</div>
