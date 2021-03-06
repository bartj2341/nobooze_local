<?php
$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$image = get_sub_field("image") ? get_sub_field("image") : "";
$title = get_sub_field("title") ? get_sub_field("title") : "";
$text = get_sub_field("text") ? get_sub_field("text") : "";
?>

<section class="standard-row p-relative d-flex d-flex-wrap <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <?php if($image): ?>
        <div class="standard-row__image z-index-2">
            <img data-src="<?= $image["url"] ?>" alt="<?= $image["alt"] ?>" class="standard-row__img d-block fit-cover lazy">
        </div> 
    <?php endif; ?>
    <div class="standard-row__wrapper p-relative d-flex d-flex-wrap d-flex-align-c w-100"> 
        <div class="standard-row__container d-flex">
            <div class="standard-row__content">
                <?php if($title): ?>
                    <p class="standard-row__title f-heading heading-standard line-normal"><?= $title ?></p>
                <?php endif; ?>
                <?php if($text): ?>
                    <div class="standard-row__text list-basic"><?= $text ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>