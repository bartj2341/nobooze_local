<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header();
?>
	<main id="main">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div>
				<?php get_template_part('partials/blog/article-banner'); ?>  
				<section class="single-article">
					<div class="single-article__container d-flex d-flex-wrap">
						<div class="single-article__content">
							<?php the_content(); ?>
						</div>
						<div class="single-article__sidebar">

						</div>
					</div>
					<footer class="entry-footer">
						<?php _s_entry_footer(); ?>
					</footer>
				</section>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</main><!-- #main -->
<?php
get_footer();
