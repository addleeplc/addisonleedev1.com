<?php
/**
 * Resources Archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$hero = get_field( 'hero_resources', 'options' );

// Get categories.
$terms = get_terms(
	array(
		'taxonomy'   => 'resource_category',
		'hide_empty' => true,
	)
);

get_header();
?>

<div class="hero-simple mk-px-4 mk-pt-12 mk-pb-8 md:mk-py-32 mk-bg-black" id="hero-simple">
	<div class="mk-max-w-site mk-mx-auto">
		<h1 class="mk-text-1md-title md:mk-text-2xl-title mk-font-medium mk-text-white mk-uppercase"><?php echo esc_html( $hero['heading'] ); ?></h1>
		<?php if ( $hero['text'] ) { ?>
			<div class="mk-max-w-lg mk-mt-6">
				<div class="mk-prose mk-prose-light-grey mk-text-lg">
					<?php echo wp_kses_post( $hero['text'] ); ?>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<div class="mk-bg-white md:mk-pt-6 mk-pb-8 md:mk-pb-28">
	<div class="mk-blog md:mk-hidden mk-bg-black mk-px-4 mk-pb-6">
		<p class="mk-text-lg mk-font-medium mk-text-white mk-pl-4 mk-pb-4">Categories</p>
		<select class="blog-mobile-filter mk-w-full mk-max-w-md mk-appearance-none mk-bg-transparent mk-text-yellow mk-font-medium mk-p-4 mk-border mk-border-third-grey mk-rounded mk-outline-none">
			<option value="all" selected>All</option>
			<?php foreach ( $terms as $cat_term ) { ?>
				<option value="<?php echo esc_html( $cat_term->term_id ); ?>"><?php echo esc_html( $cat_term->name ); ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="mk-px-4 md:mk-border-b mk-border-third-grey">     
		<div class="mk-max-w-site mk-mx-auto md:mk-flex mk-justify-between">
			<form id="blog-filters" class="mk-hidden md:mk-flex mk-flex-wrap mk-items-center mk-gap-2 -mk-mb-px">
				<label class="blog-filter-option mk-min-w-28 mk-py-4 mk-text-black/64 !mk-text-black mk-border-b-4 mk-border-transparent !mk-border-black mk-text-center mk-cursor-pointer hover:mk-border-black hover:mk-text-black mk-transition-all mk-duration-500">
					<input type="radio" name="blog-filter" value="all" class="mk-hidden" checked>
					<span class="mk-blog-filter-label mk-text-lg underline-link selected">All</span>
				</label>
				<?php foreach ( $terms as $cat_term ) { ?>
					<label class="blog-filter-option mk-min-w-28 mk-py-4 mk-border-b-4 mk-border-transparent mk-text-black/64 mk-text-center mk-cursor-pointer hover:mk-border-black hover:mk-text-black mk-transition-all mk-duration-500">
						<input type="radio" name="blog-filter" value="<?php echo esc_html( $cat_term->term_id ); ?>" data-category-name="<?= esc_html($cat_term->name); ?>" class="mk-hidden">
						<span class="mk-blog-filter-label mk-text-lg underline-link"><?php echo esc_html( $cat_term->name ); ?></span>
					</label>
				<?php } ?>
			</form>

			<div class="mk-block md:mk-hidden mk-py-8">
				<?php
				// Mobile sort filter.
				get_template_part( 'template-parts/parts/sort-dropdown-filter' );
				?>
			</div>

			<form id="blog-search" class="mk-flex mk-justify-end mk-items-center mk-gap-2 mk-w-full md:mk-w-52 mk-border-b md:mk-border-0 mk-border-secondary-grey mk-pb-4 md:mk-pb-0">
				<button><?php echo wp_kses( addisonlee_svgs( 'search' ), allowed_svg_tags() ); ?></button>
				<input id="blog-searchfield" class="mk-w-full md:mk-w-12 placeholder:mk-text-black mk-outline-none mk-transition-all mk-duration-500 mk-ease-bezier" type="text" placeholder="Search">
			</form>
		</div>
	</div>
	<div class="mk-px-4">
		<div class="mk-max-w-site mk-mx-auto md:mk-flex mk-justify-between mk-items-center md:mk-flex-row-reverse mk-py-8">
			<div class="mk-hidden md:mk-block">
				<?php
				// Desktop sort filter.
				get_template_part( 'template-parts/parts/sort-dropdown-filter' );
				?>
			</div>
			<p class="showing-num mk-text-xxxxxs-title mk-text-black/64 mk-text-left mk-opacity-0 mk-transition-opacity mk-duration-300">SHOWING <span class="number-of-posts"></span> OF <span class="total-posts"></span> RESULTS</p>
		</div>
		<div class="post-listings-grid mk-max-w-site mk-mx-auto mk-grid mk-grid-cols-1 md:mk-grid-cols-2 lg:mk-grid-cols-3 mk-gap-x-4 mk-gap-y-8 md:mk-gap-y-12" data-post-type="resources">
			<?php // Blog posts will display here. ?>    
		</div>
		<div class="mk-text-center">
			<div id="load-more-btn" class="btn btn-black mk-mt-12 md:mk-mt-16 mk-cursor-pointer">Load more</div>
		</div>
	</div>
</div>

<?php
get_footer();
