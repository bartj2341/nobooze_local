<?php

$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$image = get_sub_field("image") ? get_sub_field("image") : "";
$title = get_sub_field("title") ? get_sub_field("title") : "";
$text = get_sub_field("text") ? get_sub_field("text") : "";
$cta = get_sub_field("cta") ? get_sub_field("cta") : "";

?>


<section class="wave-section p-relative d-flex d-flex-wrap <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <?php if($image): ?>
        <div class="wave-section__image">
            <img src="<?= $image["url"] ?>" alt="<?= $image["alt"] ?>" class="wave-section__img">
        </div> 
    <?php endif; ?>
    <div class="wave-section__wrapper wrapper-full d-flex w-100">
        <div class="wave-section__container d-flex">
            <div class="wave-section__content">
                <?php if($title): ?>
                    <p class="wave-section__title f-heading heading-fifty m-reset"><?= $title ?></p>
                <?php endif; ?>
    
                <?php if($text): ?>
                    <div class="wave-section__text line-half"><?= $text ?></div>
                <?php endif; ?>
    
                <?php if($cta): ?>
                    <div class="wave-section__btn w-100"> 
                        <a href="<?= $cta["url"] ?>" target="<?= $cta["target"]?>" class="wave-section__cta u-btn"><?= $cta["title"]?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>