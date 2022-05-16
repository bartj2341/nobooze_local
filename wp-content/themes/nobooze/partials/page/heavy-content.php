<?php

$title = get_sub_field("title") ? get_sub_field("title") : "";
$handwriting = get_sub_field("handwriting") ? get_sub_field("handwriting") : "";
$subtitle = get_sub_field("subtitle") ? get_sub_field("subtitle") : "";
$copy = get_sub_field("copy") ? get_sub_field("copy") : "";
$cta = get_sub_field("cta") ? get_sub_field("cta") : "";

?>

<section class="heavy-content p-relative">
    <div class="heavy-content__wrapper d-flex d-flex-justify-c wrapper-full">
        <div class="heavy-content__container p-relative">
            <?php if($title): ?>
                <h2 class="heavy-content__title heading-heavy u-text-center"><?= $title ?></h2>
            <?php endif; ?>

            <?php if($handwriting): ?>
                <h2 class="heavy-content__handwriting f-script heading-script-two u-text-center"><?= $handwriting ?></h2>
            <?php endif; ?>

            <?php if($subtitle): ?>
                <p class="heavy-content__subtitle f-heading heading-sub u-text-center"><?= $subtitle ?></p>
            <?php endif; ?>

            <?php if($copy): ?>
                <div class="heavy-content__copy list-basic"><?= $copy ?></div>
            <?php endif; ?>

            <?php if($cta): ?>
                <div class="heavy-content__btn w-100 d-flex d-flex-center"> 
                    <a href="<?= $cta["url"] ?>" target="<?= $cta["target"]?>" class="heavy-content__cta u-btn"><?= $cta["title"]?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section> 