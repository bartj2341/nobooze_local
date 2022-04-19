<?php

$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$title = get_sub_field("title") ? get_sub_field("title") : "";
$subtitle = get_sub_field("subtitle") ? get_sub_field("subtitle") : "";
$copy = get_sub_field("copy") ? get_sub_field("copy") : "";

?>

<section class="heavy-text <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <div class="wrapper-full">
        <div class="heavy-text__wrapper d-flex d-flex-justify-c">
            <div class="heavy-text__container">
                <?php if($title): ?>
                    <h2 class="heavy-text__title text-large u-text-center"><?= $title ?></h2>
                <?php endif; ?>
    
                <?php if($subtitle): ?>
                    <h3 class="heavy-text__subtitle f-body text-sub u-text-center"><?= $subtitle ?></h3>
                <?php endif; ?>

                <?php if($copy): ?>
                    <div class="heavy-text__copy u-text-center"><?= $copy ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section> 