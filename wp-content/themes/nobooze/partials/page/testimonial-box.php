<?php
$image = get_sub_field("image") ? get_sub_field("image") : "";
$text = get_sub_field("text") ? get_sub_field("text") : "";
$signature = get_sub_field("signature") ? get_sub_field("signature") : "";
?>

<section class="testimonial-box">
    <div class="testimonial-box__wrapper wrapper-large">
        <div class="testimonial-box__container d-flex d-flex-align-c">
            <?php if($image): ?>
                <div class="testimonial-box__image">
                    <img src="<?= $image["url"] ?>" alt="<?= $image["alt"] ?>" class="testimonial-box__img">
                </div>
            <?php endif; ?>
            <div class="testimonial-box__content">
                <?php if($text): ?>
                    <div class="testimonial-box__text line-half"><?= $text ?></div>
                    <div class="testimonial-box__signature f-script heading-huge u-text-right"><?= $signature ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>