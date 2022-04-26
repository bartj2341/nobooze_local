<?php

$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$text = get_sub_field("text") ? get_sub_field("text") : "";
$author = get_sub_field("author") ? get_sub_field("author") : "";

?>

<section class="basic-banner p-relative <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <div class="wrapper-large">
        <div class="basic-banner__wrapper d-flex d-flex-justify-c">
            <div class="basic-banner__container p-relative">
                <?php if($title): ?>
                    <h2 class="basic-banner__title f-heading heading-banner c-white u-text-center"><?= $title ?></h2>
                <?php endif; ?>
    
                <?php if($text): ?>
                    <p class="basic-banner__text f-heading heading-basic c-white u-text-center"><?= $text ?></p>
                <?php endif; ?>
    
                <?php if($author): ?>
                    <p class="basic-banner__author f-heading c-white heading-medium u-text-center"><?= $author ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section> 