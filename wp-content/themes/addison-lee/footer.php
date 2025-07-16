<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$footer_scripts = get_field( 'footer_scripts', 'options' );

?>
				</main>
			</div>
		</div>
	<?php get_template_part( 'template-parts/footer/site-footer' ); ?>
</div>
<?php wp_footer(); ?>

<?php if ($footer_scripts) {
	foreach ($footer_scripts as $key => $script) {
		echo $script['script'] . "\n";
	}
} ?>

</body>
</html>
