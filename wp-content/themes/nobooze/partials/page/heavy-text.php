<?php

$decoration = get_sub_field("decoration") ? get_sub_field("decoration") : "";
$title = get_sub_field("title") ? get_sub_field("title") : "";
$subtitle = get_sub_field("subtitle") ? get_sub_field("subtitle") : "";
$copy = get_sub_field("copy") ? get_sub_field("copy") : "";

?>

<section class="heavy-text p-relative">
    <?php if($decoration): ?>
        <div class="heavy-text__bg w-100 h-100" style="background-image: url(<?= $decoration["url"] ?>)"></div>
    <?php endif; ?>
    <div class="heavy-text__wrapper d-flex d-flex-justify-c wrapper-xlarge">
        <div class="heavy-text__container p-relative">
            <?php if($title): ?>
                <h2 class="heavy-text__title heading-heavy u-text-center"><?= $title ?></h2>
            <?php endif; ?>

            <?php if($subtitle): ?>
                <p class="heavy-text__subtitle heading-sub u-text-center line-half m-reset"><?= $subtitle ?></p>
            <?php endif; ?>

            <?php if($copy): ?>
                <div class="heavy-text__copy u-text-center line-half"><?= $copy ?></div>
            <?php endif; ?>
        </div>
    </div>
</section> 