<?php

$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$bg_color = get_sub_field("background_color") ? get_sub_field("background_color") : "";
$image = get_sub_field("image") ? get_sub_field("image") : "";
$title = get_sub_field("title") ? get_sub_field("title") : "";
$subtitle = get_sub_field("subtitle") ? get_sub_field("subtitle") : "";
$cta = get_sub_field("cta") ? get_sub_field("cta") : "";

?>


<section class="full-image p-relative <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>" style="background-color: <?= $bg_color ?>">
    <?php if($image): ?>
        <div class="full-image__bg w-100 h-100" style="background-image: url(<?= $image["url"] ?>)"></div>
    <?php endif; ?>
    <div class="wrapper-large">
        <div class="full-image__wrapper d-flex d-flex-align-c">
            <div class="full-image__container p-relative">
                <?php if($title): ?>
                    <p class="full-image__title f-heading heading-xlarge u-text-center"><?= $title ?></p>
                <?php endif; ?>
    
                <?php if($subtitle): ?>
                    <p class="full-image__subtitle f-heading heading-large u-text-center"><?= $subtitle ?></p>
                <?php endif; ?>
    
                <?php if($cta): ?>
                    <div class="full-image__btn w-100 d-flex d-flex-center"> 
                        <a href="<?= $cta["url"] ?>" target="<?= $cta["target"]?>" class="full-image__cta u-btn"><?= $cta["title"]?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>