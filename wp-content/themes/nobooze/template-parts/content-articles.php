<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

$image_position = get_field("image_position") ? get_field("image_position") : "";
$banner_image = get_field("banner_image") ? get_field("banner_image") : "";
?>

<a href="<?= the_permalink(); ?>" class="s-articles__article d-block" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="s-articles__card d-flex d-flex-column">
        <?php if($banner_image): ?>
            <div class="s-articles__image">
                <div class="s-articles__dark"></div>
                <img class="s-articles__img lazy <?= $image_position ?>" data-src="<?= $banner_image["url"] ?>" alt="<?= $banner_image["alt"] ?>" />
            </div>
        <?php elseif(get_the_post_thumbnail()): ?>
            <div class="s-articles__image">
                <div class="s-articles__dark"></div>
                <img class="s-articles__img lazy <?= $image_position ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?= get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" />
            </div>
        <?php endif; ?>  
        
        <div class="s-articles__content d-flex d-flex-column">
            <?php if(get_the_author()): ?>
            <div class="s-articles__date f-heading text-sixteen"><?= the_date(); ?></div>
            <?php endif; ?>
            <?php if(get_the_title()): ?>
                <h2 class="s-articles__content__title f-heading-sbold heading-medium c-blue-7"><?= the_title(); ?></h2>
            <?php endif; ?>
            <p class="s-articles__text text-excerpt pt-serif"><?=(has_excerpt() ? the_excerpt() : wp_trim_words(get_the_content(), 25)) ?></p> 
        </div>
        <div class="s-articles__btn d-flex d-flex-align-c">
            <div>LEARN MORE</div>
            <div class="s-articles__btn__arrow"><?php include get_icons_directory('icons/arrow-right.svg') ?></div>
        </div> 
    </div>
</a><!-- #post-<?php the_ID(); ?> -->