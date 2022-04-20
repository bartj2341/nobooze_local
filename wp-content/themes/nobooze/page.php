<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();

// Use title or custom h1 element for the page
$custom_h1_title = get_field("custom_h1_title") ? get_field("custom_h1_title") : get_the_title();
?>
		<main>
			<h1 class="vh"><?=  is_404() ? '404 Page' : $custom_h1_title ?></h1>
			<?php nobooze_layout(); ?>
		</main><!-- #main -->
<?php

get_footer();
