<?php
/**
 * Template name: Articles
 */

get_header(); 

$title = get_field("title") ? get_field("title") : "";
?>

    <main id="main" role="main">
        <?php nobooze_layout(); ?>

        <section class="s-articles ">
            <div class="s-articles__wrapper wrapper-large">
                <?php if($title): ?>
                    <h2 class="s-articles__title c-gold heading-script f-script"><?= $title ?></h2>
                <?php endif; ?>

                <div class="s-articles__container d-flex d-flex-wrap">
                    <?php
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                        $articles = new WP_Query(array(
                            'posts_per_page' => 6,
                            'post_type' => 'post',
                            'paged' => $paged,
                        ));
                
                        while($articles->have_posts()) {
                            $articles->the_post();
                            get_template_part('template-parts/content', 'articles');
                        }
                    ?>
                </div>
                <div class="s-articles__pagination">
                    <?php 
                        echo paginate_links( array(
                            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                            'total'        => $articles->max_num_pages,
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
            </div>
        </section>
    </main><!-- #main -->
<?php
get_footer();