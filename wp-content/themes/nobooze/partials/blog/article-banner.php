<?php
$image_position = get_field("image_position") ? get_field("image_position") : "";
$banner_image = get_field("banner_image") ? get_field("banner_image") : "";
?>

<section class="article-banner p-relative d-flex d-flex-column d-flex-align-c d-flex-justify-c <?= ($banner_image || get_the_post_thumbnail()) ? "" : "bg-blue" ?>">
    <div class="article-banner__bg p-absolute w-100 h-100">
        <?php if($banner_image || get_the_post_thumbnail()): ?>
            <div class="article-banner__dark p-absolute z-index-1"></div>
        <?php endif; ?>
        <?php if($banner_image): ?>
            <div class="jarallax jarallax-up article-banner__image w-100 h-100">
                <img class="jarallax-img article-banner__img lazy <?= $image_position ?>" data-src="<?= $banner_image["url"] ?>" alt="<?= $banner_image["alt"] ?>" />
            </div>
        <?php elseif(get_the_post_thumbnail()): ?>
            <div class="jarallax jarallax-up article-banner__image w-100 h-100">
                <img class="jarallax-img article-banner__img lazy <?= $image_position ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?= get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" />
            </div>
        <?php endif; ?>   
    </div>
    <div class="article-banner__container d-flex wrapper-large w-100 p-relative z-index-1">
        <div class="article-banner__content">
            <h1 class="article-banner__title heading-post f-heading-xbold c-white u-text-center"><?= the_title() ?></h1>
        </div>
    </div>
</section>