<?php
/**
 * Blog post content.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$feat_image    = get_the_post_thumbnail_url();
$hero_image    = get_field( 'hero_banner' );
$heading       = get_the_title();
$categories    = get_the_category();
$author_name   = get_the_author_meta( 'display_name', $post->post_author );
$author_image  = get_field( 'profile_picture', 'user_' . $post->post_author );
$blog_page_id  = get_option( 'page_for_posts' );
$blog_page_url = get_permalink( $blog_page_id );
$date          = get_the_date( 'jS F Y' );
$time_to_read  = get_field( 'time_to_read' );

// Check for banner image.
if ( $hero_image ) {
	$image = $hero_image['url'];
} else {
	$image = $feat_image;
}
?>

<div class="mk-relative mk-h-[526px]">
	<img class="mk-w-full mk-h-full mk-object-cover" src="<?php echo esc_html( $image ); ?>" alt="<?php echo esc_html( $heading ); ?>">
	<div class="mk-absolute mk-inset-0 mk-px-4 mk-bg-hero-gradient">
		<div class="mk-max-w-site mk-mx-auto mk-h-full mk-flex mk-items-end mk-pb-14">
			<div class="mk-max-w-site-md">
				<?php if ( $categories ) { ?>
					<div class="mk-text-lg mk-flex mk-items-center mk-gap-2 mk-mt-1 mk-text-xxxxxs-title mk-text-white/64 mk-mb-6">
						<?php foreach ( $categories as $category ) { ?>
							<div class="mk-uppercase"><?php echo esc_html( $category->cat_name ); ?></div>
							<span class="last:mk-hidden">|</span>
						<?php } ?>
					</div>
				<?php } ?>
				<h1 class="mk-text-2sm-title mk-font-medium mk-text-white mk-uppercase"><?php echo esc_html( $heading ); ?></h1>
			</div>
		</div>
	</div>
</div>
<div class="mk-bg-third-grey mk-py-8 md:mk-py-20">
	<div class="mk-px-4">
		<div class="mk-max-w-site mk-mx-auto">
			<div>
				<a class="mk-text-black/64 mk-mr-4" href="/">Home</a>
				<span class="mk-text-black/64 mk-mr-4">></span>
				<a class="mk-text-black/64 mk-mr-4" href="<?php echo esc_html( $blog_page_url ); ?>">Blog</a>
				<span class="mk-text-black/64 mk-mr-4">></span>
				<span><?php echo esc_html( $heading ); ?></span>
			</div>
			<div class="md:mk-flex mk-justify-between mk-items-center mk-pt-12 md:mk-pt-20">
				<div class="mk-flex mk-items-center mk-gap-4 mk-pb-8 md:mk-pb-0">
					<?php if ( is_array( $author_image ) && isset( $author_image['url'] ) && isset( $author_image['alt'] ) ) { ?>
						<img class="mk-w-16 mk-h-16 mk-rounded-full" src="<?php echo esc_html( $author_image['url'] ); ?>" alt="<?php echo esc_html( $author_image['alt'] ); ?>">
					<?php } ?>
					<div>
						<p><?php echo esc_html( $author_name ); ?></p>
						<div class="mk-flex mk-gap-4 mk-text-black/64">
							<p><?php echo esc_html( $date ); ?></p>
							<p><?php echo esc_html( $time_to_read ); ?></p>
						</div>
					</div>
				</div>
				<div>
					<?php echo do_shortcode( '[addtoany]' ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="mk-max-w-site mk-mx-auto mk-pt-8 md:mk-pt-20">
		<div class="mk-prose blog-content-wrapper">
			<?php the_content(); ?>
		</div>
	</div>
</div>
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function () {
		const copyButton = document.querySelector('.a2a_button_copy_link');
		if (copyButton) {
			copyButton.addEventListener('click', function(e) {
				const currentUrl = window.location.href;
				navigator.clipboard.writeText(currentUrl).then(function() {
					alert('Link copied to clipboard!');
				}).catch(function(err) {
					console.error('Error copying link: ', err);
				});
			});
		}
	});
</script>
<style>
.site-header{
	background-color: transparent;
}
.site-content{
	padding-top: 0;
}
</style>