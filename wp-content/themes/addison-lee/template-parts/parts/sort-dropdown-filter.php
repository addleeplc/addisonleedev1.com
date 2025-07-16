<?php
/**
 * Sort dropdown filter.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

// Sorting options.
$sorting_options = array(
	'Newest - Oldest' => 'date_desc',
	'Oldest - Newest' => 'date_asc',
	'A-Z'             => 'title_asc',
	'Z-A'             => 'title_desc',
);
?>

<div class="sort-dropdown-filter mk-relative mk-w-[236px] mk-ml-auto mk-z-10">
	<div class="sort-dropdown-toggle mk-flex mk-items-center mk-p-4 mk-bg-white mk-border mk-border-third-grey mk-rounded mk-cursor-pointer">
		<span class="mk-w-16">Sort by: </span>
		<span class="sort-selected mk-text-black/64" data-sort-selected="date_desc">Newest - Oldest</span>
		<span class="sort-indicator mk-ml-auto"><?php echo wp_kses( addisonlee_svgs( 'chevron-down-black' ), allowed_svg_tags() ); ?></span>
	</div>
	<form class="sort-dropdown mk-hidden mk-absolute mk-top-full mk-w-full mk-left-0 mk-p-4 mk-pb-2 mk-pt-0 mk-bg-white mk-border mk-border-secondary-grey mk-border-t-0 mk-rounded-b">
		<div class="mk-pt-2 mk-pl-16 mk-border-t mk-border-secondary-grey">
			<?php foreach ( $sorting_options as $label => $key ) { ?>
				<label class="mk-block mk-min-w-28 mk-py-2 mk-text-black/64 hover:mk-text-black mk-cursor-pointer">
					<input type="radio" name="blog-sort-filter" value="<?php echo esc_html( $key ); ?>" class="mk-hidden">
					<span class="mk-sort-filter-label"><?php echo esc_html( $label ); ?></span>
				</label>
			<?php } ?>
		</div>
	</form>
</div>