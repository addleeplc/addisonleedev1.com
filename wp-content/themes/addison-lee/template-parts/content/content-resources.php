<?php
/**
 * Resource post content with integrated sidebar.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$post_id      = get_the_ID();
$heading      = get_the_title();
$categories   = get_the_terms( get_the_ID(), 'resource_category' );
$author_name  = get_the_author_meta( 'display_name', $post->post_author );
$author_image = get_field( 'profile_picture', 'user_' . $post->post_author );
$date         = get_the_date( 'jS F Y' );
$time_to_read = get_field( 'time_to_read' );
?>

<div class="mk-relative mk-h-[300px]">
	<div class="mk-absolute mk-inset-0 mk-px-4 mk-bg-hero-gradient">
		<div class="mk-max-w-site mk-mx-auto mk-h-full mk-flex mk-items-end mk-pb-20">
			<div class="mk-max-w-site-md">
				<?php if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) : ?>
					<div class="mk-text-lg mk-font-medium mk-text-white/70 mk-uppercase mk-mb-10">
						<?php foreach ( $categories as $category ) : ?>
							<span><?php echo esc_html( $category->name ); ?></span>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				<h1 class="mk-text-2sm-title mk-font-medium mk-text-white mk-uppercase"><?php echo esc_html( $heading ); ?></h1>
			</div>
		</div>
	</div>
</div>
<div class="mk-w-full">
	<div class="mk-bg-white">
		<div class="mk-max-w-site mk-mx-auto md:mk-flex">

			<!-- Black Left Sidebar -->
			<aside class="mk-relative mk-bg-black md:mk-max-w-xs md:mk-min-w-80 mk-pt-12 md:mk-pt-20 mk-pb-6 md:mk-pb-32 mk-px-4 md:mk-pl-0 md:mk-pr-12 mk-text-white">
				<span class="mk-hidden md:mk-block mk-absolute mk-top-0 mk-w-screen mk-h-full mk-left-[-100vw] mk-bg-black"></span>
				<h2 class="mk-text-lg mk-font-medium mk-mb-4">Quick search</h2>
				<div class="mk-hidden md:mk-block mk-border-b mk-border-white/64 mk-opacity-50 mk-pb-8 mk-w-1/3"></div>
				<?php
				// List categories for resources
				/**
				 * 
				 * $resource_categories = get_terms(
				 * 	array(
				 * 		'taxonomy'   => 'resource_category',
				 * 		'hide_empty' => true,
				 * 	)
				 * );
				 * 
				 *  DEPRECATED: No longer list all categories, just ones present in the current post
				 */
				

				if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
					echo '<ul class="mk-space-y-4 mk-hidden md:mk-block">';

					foreach ( $categories as $category ) {
						echo '<li class="mk-py-2">';
						echo '<h3 class="mk-font-medium mk-text-grey mk-py-4 mk-opacity-50">' . esc_html( $category->name ) . '</h3>';

						// Get the resources associated with the category
						$resources = new WP_Query(
							array(
								'post_type'      => 'resources',
								'tax_query'      => array(
									array(
										'taxonomy' => 'resource_category',
										'field'    => 'id',
										'terms'    => $category->term_id,
									),
								),
								'posts_per_page' => -1,
							)
						);

						if ( $resources->have_posts() ) {
							echo '<ul class="mk-space-y-2">';
							while ( $resources->have_posts() ) {
								$resources->the_post();

								// Check if the current post matches the queried post
								$is_current = ( get_the_ID() === get_queried_object_id() ) ? 'mk-text-yellow' : '';

								// Render the link
								echo '<li class="mk-py-4">';
								echo '<a href="' . esc_url( get_permalink() ) . '" class="mk-text-white hover:mk-text-yellow mk-transition-colors ' . esc_attr( $is_current ) . '">';
								echo get_the_title();
								echo '</a>';
								echo '</li>';
							}
							echo '</ul>';
						} else {
							echo '<p>No resources found.</p>';
						}
						echo '</li>';
					}
					echo '</ul>';
				} else {
					echo '<p>No categories found.</p>';
				}
				wp_reset_postdata();
				?>
				
				<!-- Mobile Select Dropdown for Resource Categories -->
				<div class="select-container mk-relative mk-block md:mk-hidden">
					<select id="resource-category-select" class="mk-w-full mk-bg-black mk-text-yellow mk-font-medium mk-border mk-border-secondary-grey mk-p-4 mk-rounded-md mk-outline-none mk-pr-8 mk-relative mk-appearance-none">
						<option value="" disabled>Select a resource</option>
						<?php
						if ( ! empty( $resource_categories ) && ! is_wp_error( $resource_categories ) ) {
							foreach ( $resource_categories as $category ) {
								?>
								<option value="" disabled class="mk-text-white"><?php echo esc_html( $category->name ); ?></option> <!-- Category title, not selectable -->
								<?php
								// Get the resources associated with this category
								$resources = new WP_Query(
									array(
										'post_type'      => 'resources',
										'tax_query'      => array(
											array(
												'taxonomy' => 'resource_category',
												'field'    => 'id',
												'terms'    => $category->term_id,
											),
										),
										'posts_per_page' => -1,
									)
								);

								if ( $resources->have_posts() ) {
									while ( $resources->have_posts() ) {
										$resources->the_post();

										// Check if the current post matches the queried post
										$is_selected = ( get_the_ID() === get_queried_object_id() ) ? 'selected' : '';

										?>
										<option value="<?php echo esc_url( get_permalink() ); ?>" class="mk-text-white" <?php echo $is_selected; ?>>
											<?php echo esc_html( get_the_title() ); ?>
										</option>
										<?php
									}
								}
								wp_reset_postdata();
							}
						}
						?>
					</select>

				<div class="mk-absolute mk-inset-y-0 mk-right-4 mk-pointer-events-none mk-flex mk-items-center">
					<svg xmlns="http://www.w3.org/2000/svg" class="mk-w-4 mk-h-4 mk-text-yellow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
					</svg>
				</div>
			</div>


			</aside>

			<!-- Main Post Content -->
			<div class="mk-w-full mk-pt-12 md:mk-pt-20 mk-pb-24 md:mk-pb-40 mk-px-4 md:mk-pl-12">
				<div>
					<a class="mk-text-black/64 mk-mr-4" href="/">Home</a>
					<span class="mk-text-black/64 mk-mr-4">></span>
					<a class="mk-text-black/64 mk-mr-4" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources</a>
					<span class="mk-text-black/64 mk-mr-4">></span>
					<span><?php echo esc_html( $heading ); ?></span>
				</div>
				<div class="md:mk-flex mk-justify-between mk-items-center mk-pt-12 md:mk-pt-20">
					<div class="mk-flex mk-items-center mk-gap-4 mk-pb-8 md:mk-pb-0">
						<?php if ( is_array( $author_image ) && isset( $author_image['url'] ) && isset( $author_image['alt'] ) ) { ?>
							<img class="mk-w-16 mk-h-16 mk-rounded-full" src="<?php echo esc_html( $author_image['url'] ); ?>" alt="<?php echo esc_html( $author_image['alt'] ); ?>">
						<?php } ?>
						<div>
							<p class="mk-text-lg mk-font-medium"><?php echo esc_html( $author_name ); ?></p>
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
				<div class="mk-mt-8"> 
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
	const resourceSelect = document.getElementById('resource-category-select');

	// Event listener for the resource category select dropdown (mobile)
	resourceSelect.addEventListener('change', function () {
		const selectedUrl = this.value;

		if (selectedUrl) {
			// Redirect to the selected resource URL
			window.location.href = selectedUrl;
		}
	});
});
</script>

