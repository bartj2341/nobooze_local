<?php

$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$text = get_sub_field("text") ? get_sub_field("text") : "";
$author = get_sub_field("author") ? get_sub_field("author") : "";

?>

<section class="basic-banner p-relative <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <div class="wrapper-xlarge">
        <div class="basic-banner__wrapper d-flex d-flex-justify-c">
            <div class="basic-banner__container p-relative">
                <?php if($text): ?>
                    <p class="basic-banner__text f-heading heading-banner c-white u-text-center"><?= $text ?></p>
                <?php endif; ?>
    
                <?php if($author): ?>
                    <p class="basic-banner__author f-heading c-white text-medium u-text-center"><?= $author ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section> 