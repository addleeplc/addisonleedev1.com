<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$head_scripts = get_field( 'head_scripts', 'options' );
$body_scripts = get_field( 'body_scripts', 'options' );

?>
<!doctype html>
<html <?php language_attributes(); ?> class="mk-scroll-smooth mk-overflow-x-hidden">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php if ($head_scripts) {
		foreach ($head_scripts as $key => $script) {
			echo $script['script'] . "\n";
		}
	} ?>

	<?php wp_head(); ?>

	<?php
	// Tailwind body classes.
	$css_body_classes = array( 'mk-font-steagal', 'mk-bg-black', 'selection:mk-bg-yellow', 'selection:mk-text-black' );
	?>
</head>

<body <?php body_class( $css_body_classes ); ?>>

	<?php if ($body_scripts) {
		foreach ($body_scripts as $key => $script) {
			echo $script['script'] . "\n";
		}
	} ?>

	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'make_twentytwentytwo' ); ?></a>

		<?php get_template_part( 'template-parts/header/site-header' ); ?>

		<div id="content" class="site-content mk-pt-[108px]">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
