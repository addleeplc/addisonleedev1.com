<?php
/**
 * Team Grid.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$heading               = get_field( 'heading' );
$table                 = get_field( 'table' );
$reveal_table_with_cta = get_field( 'reveal_table_with_cta' );
$cta_title             = get_field( 'cta_title' );
$cta_text              = get_field( 'cta_text' );
$extra_text            = get_field( 'extra_text' );
$cta                   = get_field( 'cta' );

$padding_top           = get_field( 'padding_top' );
$padding_bottom        = get_field( 'padding_bottom' );

// Block ID.
$block_id = 'table-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'table-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}

// Table reveal classes.
if ( $reveal_table_with_cta ) {
	$class_name  .= ' table-reveal';
	$table_hidden = ' mk-hidden';
}
?>

<div class="<?php echo esc_html( $class_name ); ?>" id="<?php echo esc_html( $block_id ); ?>">
	<?php if ( $reveal_table_with_cta ) { ?>
		<div class="mk-px-4
		<?= $padding_top ? "mk-pt-16" : ""; ?>
		<?= $padding_bottom ? "mk-pb-12 md:mk-pb-28" : ""; ?>
		">
			<div class="mk-w-full mk-max-w-site mk-mx-auto">
				<?php if ( $cta_title ) { ?>
					<h3 class="mk-text-1sm-title mk-font-medium mk-text-white mk-uppercase mk-mb-6"><?php echo esc_html( $cta_title ); ?></h3>
				<?php } ?>
				<?php if ( $cta_text ) { ?>
					<div class="show-table btn-clear btn-clear-white mk-cursor-pointer mk-select-none">
						<?php echo esc_html( $cta_text ); ?>
						<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?>
					</div>
				<?php } ?>
			</div>
		</div>
	<?php } ?>
	<div class="table-container mk-bg-white mk-mt-12 mk-px-4 mk-py-12 md:mk-py-20<?php echo $table_hidden; ?>">	
		<div class="mk-w-full mk-max-w-site mk-mx-auto">
			<?php if ( $heading ) { ?>
				<h2 class="mk-text-1sm-title mk-font-medium mk-uppercase mk-mb-10"><?php echo esc_html( $heading ); ?></h2>
			<?php } ?>
			<?php if ( ! empty( $table ) ) { ?>
				<div class="mk-overflow-x-auto" id="scrollable-table-container">
					<table class="mk-w-full md:mk-table-fixed !mk-max-w-full"> 
						<?php if ( ! empty( $table['header'] ) ) { ?>
							<thead>
								<tr>
									<?php foreach ( $table['header'] as $th ) { ?>
										<th class="sm:mk-text-xl md:mk-text-2xl mk-font-medium mk-p-3 sm:mk-px-6 sm:mk-py-6 mk-bg-third-grey mk-border mk-border-[rgba(0,0,0,0.32)] mk-content-baseline">
											<?php echo $th['c']; ?>
										</th>
									<?php } ?>
								</tr>
							</thead>
						<?php } ?>
						<tbody>
							<?php foreach ( $table['body'] as $tr ) { ?>
								<tr>
									<?php foreach ( $tr as $td ) { ?>
										<td class="sm:mk-text-lg mk-p-3 sm:mk-px-6 sm:mk-py-6 mk-text-black/64 mk-border mk-border-[rgba(0,0,0,0.32)] mk-content-baseline mk-min-w-[150px]">
											<?php echo $td['c']; ?>
										</td>
									<?php } ?>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			<?php } ?>
			<?php if ( $extra_text || $cta ) { ?>
				<div class="mk-mt-10">
					<?php if ( $cta ) { ?>
						<div class="mk-prose mk-prose-grey mk-mb-4">
							<?php echo wp_kses_post( $extra_text ); ?>
						</div>	
					<?php } ?>	
					<?php if ( $cta ) { ?>
						<a class="btn-clear" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>">
							<?php echo esc_html( $cta['title'] ); ?>
							<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?>
						</a>
					<?php } ?>
				</div>					
			<?php } ?>
		</div>
	</div>
</div>
<?php if ( $reveal_table_with_cta ) { ?>
	<script>
	// Table reveal.
	const tableBlocks = document.querySelectorAll('.table-reveal');
	tableBlocks.forEach(tableBlock => {
		const showTableButton = tableBlock.querySelector('.show-table');
		showTableButton.addEventListener('click', () => {
			const tableContainer = tableBlock.querySelector('.table-container');
			// Toggle visibility of the table.
			tableContainer.style.display = (tableContainer.style.display === 'none' || tableContainer.style.display === '') 
				? 'block' 
				: 'none';
			
			// in mobile this scrolls the table to the end and then back to the start again, smoothly, to indicate to users that the table has overflow.
			if (window.innerWidth < 768) {
				const scrollableTableContainer = document.getElementById('scrollable-table-container');
				scrollableTableContainer.scroll(scrollableTableContainer.scrollWidth, 0)
				scrollableTableContainer.scroll({
					top: 0,
					left: 0,
					behavior: 'smooth'
				})
			}
		});
	});
	</script>
<?php } ?>