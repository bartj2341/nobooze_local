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

	<?php get_template_part( 'partials/general/blog-fonts' )  ?>
	
	<?php wp_head(); ?>

	<?php if($_SERVER['SERVER_NAME'] == 'nobooze.com'): ?>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-5RXR76W');</script>
		<!-- End Google Tag Manager -->
	<?php endif; ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5RXR76W"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
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

	
