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

?>
	<div class="main-wrapper">
		<main id="main">
			<?php nobooze_layout(); ?>
		</main><!-- #main -->

		<?php get_footer(); ?>
	</div>
