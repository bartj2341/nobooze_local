<?php
$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$bg_image = get_sub_field("background_image") ? get_sub_field("background_image") : "";
$title = get_sub_field("title") ? get_sub_field("title") : "";
?>

<section class="script-banner p-relative <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <div class="script-banner__dark p-absolute z-index-1"></div>
    <?php if($bg_image): ?>
        <div class="script-banner__bg w-100 p-absolute">
            <img src="<?= $bg_image["url"] ?>" alt="<?= $bg_image["alt"] ?>" class="parallax-banner script-banner__img d-block h-100 w-100 fit-cover">
        </div>
    <?php endif; ?>
    <div class="wrapper-full">
        <div class="script-banner__wrapper d-flex d-flex-center">
            <div class="script-banner__container p-relative z-index-1">
                <?php if($title): ?>
                    <h2 class="script-banner__title c-white f-script heading-script u-text-center"><?= $title ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section> 