<?php

$title = get_sub_field("title") ? get_sub_field("title") : "";
$image = get_sub_field("image") ? get_sub_field("image") : "";
$text = get_sub_field("text") ? get_sub_field("text") : "";
$cta = get_sub_field("cta") ? get_sub_field("cta") : "";

?>


<section class="fifty p-relative d-flex d-flex-wrap">
    <?php if($image): ?>
        <div class="fifty__image">
            <img src="<?= $image["url"] ?>" alt="<?= $image["alt"] ?>" class="fifty__img">
        </div> 
        <?php endif; ?>
        <div class="fifty__wrapper d-flex d-flex-wrap d-flex-column w-100"> 
            <?php if($title): ?>
                <h2 class="fifty__title heading-script f-script"><?= $title ?></h2>
            <?php endif; ?>
            <div class="fifty__container d-flex">
            <div class="fifty__content">
                <?php if($text): ?>
                    <div class="fifty__text"><?= $text ?></div>
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