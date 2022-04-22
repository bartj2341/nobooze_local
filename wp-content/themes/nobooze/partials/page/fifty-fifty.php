<?php

$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$image = get_sub_field("image") ? get_sub_field("image") : "";
$title = get_sub_field("title") ? get_sub_field("title") : "";
$text = get_sub_field("text") ? get_sub_field("text") : "";

?>


<section class="fifty p-relative d-flex d-flex-wrap <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <div class="fifty__image">
        <img src="<?= $image["url"] ?>" alt="<?= $image["alt"] ?>" class="fifty__img">
    </div>
    <div class="fifty__wrapper wrapper-full d-flex d-flex-wrap w-100">
        <div class="fifty__container p-relative d-flex d-flex-justify-e">
            <div class="fifty__content">
            <?php if($title): ?>
                    <p class="fifty__title f-heading heading-fifty m-reset"><?= $title ?></p>
                <?php endif; ?>
                <?php if($text): ?>
                    <div class="fifty__text line-half"><?= $text ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>