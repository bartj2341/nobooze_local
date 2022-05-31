<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */


$author_id = get_the_author_meta("ID");
$author_name = get_the_author_meta("display_name");
$author_link = get_author_posts_url($author_id);

?>

<div class="s-articles__article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="s-articles__wrapper">
        <div class="s-articles__card d-flex d-flex-column">
            <?php if(get_the_post_thumbnail_url()): ?>
            <div class="s-articles__image">
                <img class="s-articles__img img-fluid lazy" src="<?php the_post_thumbnail_url(); ?>" alt="<?= get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" />
            </div>
            <?php endif; ?>
            
            <div class="s-articles__content d-flex d-flex-column">
                <?php if(get_the_title()): ?>
                    <h2 class="s-articles__content__title text-pills u-underline">
                        <a href="<?= the_permalink(); ?>"><?= the_title(); ?></a>
                    </h2>
                <?php endif; ?>
                <?php if(get_the_author()): ?>
                <div class="s-articles__author text-small">
                    By 
                    <a class="s-articles__author__name link-blue" href="<?= $author_link ?>"><?= $author_name ?></a>
                    <?php if(is_archive() && get_the_date() !== ""): ?> 
                        <span> | </span> 
                        <span><?php echo get_the_date(); ?></span>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <div class="s-articles__text text-sixteen"><?=(get_the_excerpt() ? the_excerpt() : wp_trim_words(get_the_content(), 55)) ?></div> 
                <div class="s-articles__btn w-100">
                    <a href="<?= the_permalink(); ?>" class="s-articles__cta u-btn">READ MORE</a> 
                </div>
            </div>
        </div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->