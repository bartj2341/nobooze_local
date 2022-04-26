<?php

$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$decoration = get_sub_field("decoration") ? get_sub_field("decoration") : "";
$title = get_sub_field("title") ? get_sub_field("title") : "";
$subtitle = get_sub_field("subtitle") ? get_sub_field("subtitle") : "";
$copy = get_sub_field("copy") ? get_sub_field("copy") : "";
$cta = get_sub_field("cta") ? get_sub_field("cta") : "";

?>

<section class="decoration-section p-relative <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <?php if($decoration): ?>
        <div class="decoration-section__bg w-100 h-100" style="background-image: url(<?= $decoration["url"] ?>)"></div>
    <?php endif; ?>
    <div class="decoration-section__wrapper d-flex d-flex-justify-c wrapper-large">
        <div class="decoration-section__container p-relative">
            <?php if($title): ?>
                <h2 class="decoration-section__title heading-heavy u-text-center"><?= $title ?></h2>
            <?php endif; ?>

            <?php if($subtitle): ?>
                <p class="decoration-section__subtitle f-heading heading-sub u-text-center line-half m-reset"><?= $subtitle ?></p>
            <?php endif; ?>

            <?php if($copy): ?>
                <div class="decoration-section__copy line-half"><?= $copy ?></div>
            <?php endif; ?>
        </div>
    </div>
</section> 