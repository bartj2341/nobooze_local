<?php
$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$title = get_sub_field("title") ? get_sub_field("title") : "";
$text = get_sub_field("text") ? get_sub_field("text") : "";
?>

<section class="custom-text <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <div class="custom-text__wrapper d-flex d-flex-justify-c wrapper-small">
        <div class="custom-text__container p-relative">
            <?php if($title): ?>
                <h2 class="custom-text__title heading-huge u-text-center"><?= $title ?></h2>
            <?php endif; ?>
            <?php if($text): ?>
                <div class="custom-text__text"><?= $text ?></h2>
            <?php endif; ?>
        </div>
    </div>
</section> 