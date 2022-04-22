<?php

$bg_image = get_sub_field("background_image") ? get_sub_field("background_image") : "";
$title = get_sub_field("title") ? get_sub_field("title") : "";
$subtitle = get_sub_field("subtitle") ? get_sub_field("subtitle") : "";

?>

<section class="hero-banner p-relative">
    <?php if($bg_image): ?>
        <div class="hero-banner__bg w-100 h-100">
            <img src="<?= $bg_image["url"] ?>" alt="<?= $bg_image["alt"] ?>" class="hero-banner__img w-100 h-100 fit-cover">
        </div>
    <?php endif; ?>
    <div class="wrapper-xlarge">
        <div class="hero-banner__wrapper d-flex d-flex-center p-relative">
            <div class="hero-banner__container p-relative">
                <?php if($title): ?>
                    <p class="hero-banner__title f-heading heading-hero u-text-center m-reset"><?= $title ?></p>
                <?php endif; ?>
                <?php if($subtitle): ?>
                    <p class="hero-banner__subtitle f-heading heading-sub u-text-center m-reset line-half"><?= $subtitle ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section> 