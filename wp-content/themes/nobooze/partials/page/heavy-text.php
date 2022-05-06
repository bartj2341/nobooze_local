<?php

$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$title = get_sub_field("title") ? get_sub_field("title") : "";
$copy = get_sub_field("copy") ? get_sub_field("copy") : "";
$handwriting = get_sub_field("handwriting") ? get_sub_field("handwriting") : "";

?>

<section class="heavy-text p-relative <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <div class="heavy-text__wrapper d-flex d-flex-justify-c wrapper-large">
        <div class="heavy-text__container p-relative">
            <?php if($title): ?>
                <h2 class="heavy-text__title heading-heavy-lg u-text-center"><?= $title ?></h2>
            <?php endif; ?>

            <?php if($copy): ?>
                <div class="heavy-text__copy"><?= $copy ?></div>
            <?php endif; ?>

            <?php if($handwriting): ?>
                <p class="heavy-text__handwriting f-script heading-script u-text-center c-blue m-reset"><?= $handwriting ?></p>
            <?php endif; ?>
        </div>
    </div>
</section> 