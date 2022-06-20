<?php
$author_name = get_the_author_meta("display_name"); 
?>

<section class="article-banner p-relative d-flex d-flex-column d-flex-align-c d-flex-justify-c">
    <?php if(get_the_post_thumbnail()): ?>
    <div class="article-banner__bg">
        <img class="article-banner__img" src="<?php the_post_thumbnail_url(); ?>" alt="<?= get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" />
    </div>
    <?php endif; ?>
    <div class="article-banner__container d-flex wrapper-large w-100 p-relative z-index-1">
        <div class="article-banner__content">
            <h1 class="article-banner__title heading-post f-heading-xbold c-white u-text-center"><?= the_title() ?></h1>
            <div class="article-banner__info heading-author c-white f-heading u-text-center">
                <span>By <?= $author_name ?></span>
                <span class="article-banner__info__dot">•</span>
                <span><?= the_date(); ?></span></div>
        </div>
    </div>
</section> 