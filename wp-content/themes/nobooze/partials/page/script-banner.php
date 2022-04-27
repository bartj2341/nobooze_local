<?php

$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$bg_image = get_sub_field("background_image") ? get_sub_field("background_image") : "";
$title = get_sub_field("title") ? get_sub_field("title") : "";

?>

<section class="script-banner p-relative <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <?php if($bg_image): ?>
        <div class="script-banner__bg w-100 h-100">
            <img src="<?= $bg_image["url"] ?>" alt="<?= $bg_image["alt"] ?>" class="script-banner__img w-100 h-100 fit-cover">
        </div>
    <?php endif; ?>
    <div class="wrapper-full">
        <div class="script-banner__wrapper d-flex d-flex-center">
            <div class="script-banner__container p-relative">
                <?php if($title): ?>
                    <h2 class="script-banner__title f-script heading-script u-text-center"><?= $title ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section> 