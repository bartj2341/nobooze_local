<?php

$bg_image = get_sub_field("background_image") ? get_sub_field("background_image") : "";
$title = get_sub_field("title") ? get_sub_field("title") : "";
$subtitle = get_sub_field("subtitle") ? get_sub_field("subtitle") : "";
$cta = get_sub_field("cta") ? get_sub_field("cta") : "";

?>


<section class="full-banner p-relative">
    <?php if($bg_image): ?>
        <div class="full-banner__bg w-100 h-100" style="background-image: url(<?= $bg_image["url"] ?>)"></div>
    <?php endif; ?>
    <div class="wrapper-full">
        <div class="full-banner__wrapper d-flex d-flex-justify-e d-flex-align-c">
            <div class="full-banner__container p-relative">
                <?php if($title): ?>
                    <p class="full-banner__title f-heading heading-banner u-text-center"><?= $title ?></p>
                <?php endif; ?>
    
                <?php if($subtitle): ?>
                    <p class="full-banner__subtitle f-heading heading-large u-text-center"><?= $subtitle ?></p>
                <?php endif; ?>
    
                <?php if($cta): ?>
                    <div class="full-banner__btn w-100 d-flex d-flex-center"> 
                        <a href="<?= $cta["url"] ?>" target="<?= $cta["target"]?>" class="full-banner__cta u-btn"><?= $cta["title"]?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>