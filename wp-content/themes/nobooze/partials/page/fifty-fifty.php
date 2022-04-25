<?php

$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$image = get_sub_field("image") ? get_sub_field("image") : "";
$title = get_sub_field("title") ? get_sub_field("title") : "";
$text = get_sub_field("text") ? get_sub_field("text") : "";
$cta = get_sub_field("cta") ? get_sub_field("cta") : "";

?>


<section class="fifty p-relative d-flex d-flex-wrap <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <div class="fifty__wrapper p-relative d-flex d-flex-wrap">
        <?php if($image): ?>
            <div class="fifty__image">
                <img src="<?= $image["url"] ?>" alt="<?= $image["alt"] ?>" class="fifty__img">
            </div> 
        <?php endif; ?>
        <div class="fifty__container d-flex">
            <div class="fifty__content">
                <?php if($title): ?>
                    <p class="fifty__title f-heading heading-fifty m-reset"><?= $title ?></p>
                <?php endif; ?>
    
                <?php if($text): ?>
                    <div class="fifty__text line-half"><?= $text ?></div>
                <?php endif; ?>
    
                <?php if($cta): ?>
                    <div class="fifty__btn w-100"> 
                        <a href="<?= $cta["url"] ?>" target="<?= $cta["target"]?>" class="fifty__cta u-btn"><?= $cta["title"]?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>