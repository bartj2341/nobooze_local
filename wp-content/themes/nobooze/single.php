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
	<main id="main" class="main-wrapper">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div>
				<?php get_template_part('partials/blog/article-banner'); ?>  
				<section class="single-article">
					<div class="single-article__container p-relative d-flex d-flex-wrap">
						<?php get_template_part('partials/blog/sidebar/share-links'); ?>
						<div class="single-article__content list-basic pt-serif">
							<?php the_content(); ?>
						</div>
						<div class="single-article__sidebar">
							<?php get_template_part('partials/blog/sidebar/about-column'); ?>
							<?php get_template_part('partials/blog/sidebar/social-links'); ?>
							<?php get_template_part('partials/blog/sidebar/newsletter-form'); ?>    
						</div>
					</div>
					<div class="single-article__footer wrapper-small-two">
						<?php 
						/*
						<div class="single-article__categories">
							<p>
								<span>Posted in</span>
								<?php
									$output = '';
									foreach((get_the_category()) as $category) {
										$category_id = get_cat_ID( $category->cat_name );
										$category_link = get_category_link( $category_id );
									
										if(!empty($output))
											$output .= ', ';
										$output .= '<a href="'.$category_link.'">'.$category->cat_name.'</a>';
									}
									echo $output;
								?>
							</p>
						</div>
						*/
						?>
						<div class="single-article__bio">
							<h3 class="single-article__bio__name">Tom White</h3>
							<p class="single-article__bio__description pt-serif">Tom is the founder of the NoBooze method, a unique approach to stopping drinking that requires no group meetings, rehab clinics, or willpower. It's based on a combination of psychology and social science, and aims to remove the desire to drink alcohol completely. Those who follow the method find that they're able to completely remove alcohol from their life, handle social situations with ease, and have meaningful, long-lasting relationships that are true and authentic.</h3>
						</div>
						<div class="single-article__navigation d-flex d-flex-wrap d-flex-justify-s">
							<div class="single-article__navigation__item single-article__navigation__prev pt-serif">
								<?php
									$prev_post = get_adjacent_post(false, '', true);
									if(!empty($prev_post)):
										echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '">← ' . $prev_post->post_title . '</a>';
									endif;
								?>
							</div>
							<div class="single-article__navigation__item single-article__navigation__next u-text-right pt-serif">
								<?php
									$next_post = get_adjacent_post(false, '', false);
									if(!empty($next_post)):
										echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">' . $next_post->post_title . ' →</a>';
									endif; 
								?>
							</div>
						</div>
					</div>
				</section>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</main><!-- #main -->

<?php 
get_footer(); 
