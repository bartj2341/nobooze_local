<?php
$image = get_sub_field("image") ? get_sub_field("image") : "";
$text = get_sub_field("text") ? get_sub_field("text") : "";
?>

<section class="basic-row d-flex d-flex-wrap p-relative">
    <div class="basic-row__wrapper d-flex d-flex-wrap d-flex-align-c w-100"> 
        <?php if($image): ?>
            <div class="basic-row__image">
                <img data-src="<?= $image["url"] ?>" alt="<?= $image["alt"] ?>" class="lazy basic-row__img d-block fit-cover">
            </div> 
        <?php endif; ?>
        <div class="basic-row__container d-flex d-flex-column">
            <div class="basic-row__content">
                <?php if($text): ?>
                    <div class="basic-row__text list-basic"><?= $text ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>