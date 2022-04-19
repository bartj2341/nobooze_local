<?php

$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$text = get_sub_field("text") ? get_sub_field("text") : "";
$author = get_sub_field("author") ? get_sub_field("author") : "";

?>

<section class="basic-banner p-relative <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <div class="wrapper-full">
        <div class="basic-banner__wrapper d-flex d-flex-justify-c">
            <div class="basic-banner__container">
                <?php if($text): ?>
                    <div class="basic-banner__text text-large c-white u-text-center"><?= $text ?></div>
                <?php endif; ?>
    
                <?php if($author): ?>
                    <div class="basic-banner__author c-white text-medium u-text-center"><?= $author ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section> 