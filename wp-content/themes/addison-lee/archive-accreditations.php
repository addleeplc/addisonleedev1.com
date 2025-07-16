<?php
/**
 * The template for displaying all accreditations archives
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

get_header();

// Set up pagination parameters.
$paginate = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args  = array(
	'post_type' => 'accreditations',
	'orderby'   => 'date',
	'order'     => 'ASC',
	'paged'     => $paginate,
);
$query = new WP_Query( $args );

// ACF option fields.
$hero           = get_field( 'hero_accreditation', 'options' );
$hero_text      = $hero['text'];
$listings_title = get_field( 'listings_title_accreditation', 'options' );
?>

<div class="mk-px-4 mk-bg-black">
	<div class="md:mk-h-100 mk-py-12 mk-max-w-site mk-mx-auto mk-flex mk-items-center">
		<div>
			<h1 class="mk-font-medium mk-text-3.5xl md:mk-text-5xl mk-text-white mk-leading-tight mk-tracking-[4.8px] mk-uppercase"><?php echo esc_html( $hero['heading'] ); ?></h1>
			<?php if ( $hero_text ) { ?>
				<div class="mk-prose mk-prose-light-grey !mk-max-w-[534px] mk-mt-4 md:mk-mt-6 mk-text-lg">
					<?php echo wp_kses_post( $hero_text ); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<div class="mk-bg-white mk-px-4 mk-py-16">
	<div class="mk-max-w-site mk-mx-auto">
		<h2 class="mk-font-medium mk-text-2.5xl mk-tracking-[2.8px] mk-uppercase"><?php echo esc_html( $listings_title ); ?></h2>
		<div class="mk-flex mk-flex-wrap -mk-mx-2 mk-mt-8">
			<?php
			while ( $query->have_posts() ) :
				$query->the_post();
				get_template_part( 'template-parts/cards/card', 'accreditations' );
				?>
			<?php endwhile; ?>
		</div>

		<div class="pagination mk-flex mk-justify-center mk-items-center mk-gap-3 mk-mt-4">
			<?php
			echo paginate_links(
				array(
					'total'     => $query->max_num_pages,
					'current'   => $paginate,
					'prev_text' => wp_kses( addisonlee_svgs( 'chevron-left-md' ), allowed_svg_tags() ),
					'next_text' => wp_kses( addisonlee_svgs( 'chevron-right-md' ), allowed_svg_tags() ),
				)
			);
			?>
		</div>
	</div>
</div>

<?php
get_footer();
