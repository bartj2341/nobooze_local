<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();


?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="s-articles">
				<div class="s-articles__wrapper wrapper-posts">
					<?php if(is_category()): 
						$category = get_category( get_query_var( 'cat' ) );
						$cat_id = $category->cat_ID;
						?>
						<h2 class="s-articles__title heading-script f-script">Category: <?= get_cat_name($cat_id) ?></h2>

						<?php elseif(is_author()): ?>
							<h2 class="s-articles__title heading-script f-script">Author: <?= get_the_author_meta("display_name") ?></h2>
					<?php endif; ?>
					<?php if ( have_posts() ) : ?>
						<div class="s-articles__container d-flex d-flex-wrap">
							<div class="s-articles__row d-flex d-flex-wrap">
							<?php while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', 'articles');
							endwhile; ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<div class="s-articles__pagination">
                    <?php 
                        echo paginate_links( array(
                            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                            'total'        => $wp_query->max_num_pages,
                            'current'      => max( 1, get_query_var( 'paged' ) ),
                            'format'       => '?paged=%#%',
                            'show_all'     => false,
                            'type'         => 'plain',
                            'end_size'     => 1,
                            'mid_size'     => 2,
                            'prev_next'    => true,
                            'prev_text'    => __( 'Previous'),
                            'next_text'    => __( 'Next'),
                            'add_args'     => false,
                            'add_fragment' => '',
                        ) );
                    ?>
                </div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
