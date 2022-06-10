<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="error-page d-flex d-flex-center">
				<div class="error-page__container d-flex d-flex-column d-flex-center">
					<div class="error-page__code heading-error f-heading-xbold">404</div>
					<h2 class="error-page__header heading-huge f-heading-sbold">Page not found</h2>
					<a class="u-btn" href="<?= home_url(); ?>">BACK HOME</a>
				</div>
			</section>
		</main>
	</div

<?php
get_footer();
