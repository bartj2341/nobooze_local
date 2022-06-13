<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="u-header">
		<?php get_template_part('partials/general/main-menu'); ?> 
		<?php get_template_part('partials/general/mobile-menu'); ?>
		<?php
		// Use title or custom h1 element for the page
		$custom_h1_title = get_field("custom_h1_title") ? get_field("custom_h1_title") : get_the_title();
		?>
		<?php if ( 'post' != get_post_type() ) : ?>
		<h1 class="vh"><?=  is_404() ? '404 Page' : $custom_h1_title ?></h1>
		<?php endif; ?>
	</header><!-- #masthead -->

	
