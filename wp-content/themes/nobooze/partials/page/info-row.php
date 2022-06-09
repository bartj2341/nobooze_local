<?php
$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$image = get_sub_field("image") ? get_sub_field("image") : "";
$text = get_sub_field("text") ? get_sub_field("text") : "";
$cta = get_sub_field("cta") ? get_sub_field("cta") : "";
$signature = get_sub_field("signature") ? get_sub_field("signature") : "";
?>

<section class="info-row p-relative d-flex d-flex-wrap <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <div class="info-row__wrapper p-relative d-flex d-flex-wrap d-flex-align-c w-100"> 
        <?php if($image): ?>
            <div class="info-row__image">
                <img src="<?= $image["url"] ?>" alt="<?= $image["alt"] ?>" class="info-row__img d-block fit-cover">
            </div> 
        <?php endif; ?>
        <div class="info-row__container d-flex d-flex-column">
            <div class="info-row__content">
                <?php if($text): ?>
                    <div class="info-row__text list-basic"><?= $text ?></div>
                <?php endif; ?>
                    
                <?php if($cta): ?>
                    <div class="info-row__btn w-100"> 
                        <a href="<?= $cta["url"] ?>" target="<?= $cta["target"]?>" class="info-row__cta u-btn"><?= $cta["title"]?></a>
                    </div>
                <?php endif; ?>
            </div>
            <?php if($signature): ?>
                <div class="info-row__signature f-script heading-script-two c-blue u-text-right"><?= $signature ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>