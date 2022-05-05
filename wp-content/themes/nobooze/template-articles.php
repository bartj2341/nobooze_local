<?php
/**
 * Template name: Articles
 */

get_header(); 

$title = get_field("title") ? get_field("title") : "";
?>

    <main id="main" role="main">
        <?php nobooze_layout(); ?>

        <section class="s-articles wrapper-large">
            <?php if($title): ?>
                <h2 class="s-articles__title c-gold heading-script f-script"><?= $title ?></h2>
            <?php endif; ?>

            <div class="s-articles__container d-flex d-flex-wrap">
                <?php 
                    $articles = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'post',
                    ));
            
                    while($articles->have_posts()) {
                        $articles->the_post();
                        get_template_part('template-parts/content', 'articles');
                    }
                ?>
            </div>
        </section>
    </main><!-- #main -->
<?php
get_footer();