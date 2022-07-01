<?php
$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$responsive_images = get_sub_field("responsive_images") ? get_sub_field("responsive_images") : "";
$image_mobile = get_sub_field("image_mobile") ? get_sub_field("image_mobile") : "";
$image_tablet = get_sub_field("image_tablet") ? get_sub_field("image_tablet") : "";
$image = get_sub_field("image") ? get_sub_field("image") : "";
$title = get_sub_field("title") ? get_sub_field("title") : "";
$text = get_sub_field("text") ? get_sub_field("text") : "";
$cta = get_sub_field("cta") ? get_sub_field("cta") : "";
?>


<section class="wave-section p-relative d-flex d-flex-wrap <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <?php if($responsive_images): ?>
        <picture class="wave-section__image z-index-2">
            <source srcset="<?= $image['url'] ?>" media="(min-width: 1024px)" />
            <source srcset="<?= $image_tablet['url'] ?>" media="(min-width: 480px)" />
            <img class="wave-section__img d-block fit-cover" src="<?= $image_mobile['url'] ?>" alt="<?= $image_mobile['alt'] ?>" />
        </picture>
    <?php else: ?>
        <?php if($image): ?>
            <div class="wave-section__image z-index-2">
                <img data-src="<?= $image["url"] ?>" alt="<?= $image["alt"] ?>" class="wave-section__img d-block fit-cover lazy">
            </div> 
        <?php endif; ?>
    <?php endif; ?>
    <div class="wave-section__wrapper d-flex w-100">
        <div class="wave-section__container d-flex">
            <div class="wave-section__content">
                <?php if($title): ?>
                    <p class="wave-section__title f-heading heading-fifty"><?= $title ?></p>
                <?php endif; ?>
    
                <?php if($text): ?>
                    <div class="wave-section__text list-basic"><?= $text ?></div>
                <?php endif; ?>
    
                <?php if($cta): ?>
                    <div class="wave-section__btn w-100"> 
                        <a href="<?= $cta["url"] ?>" target="<?= $cta["target"]?>" class="wave-section__cta u-btn"><?= $cta["title"]?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>