<?php

$image = get_sub_field("image") ? get_sub_field("image") : "";
$form_decoration = get_sub_field("form_decoration") ? get_sub_field("form_decoration") : "";
$title = get_sub_field("title") ? get_sub_field("title") : "";
$text = get_sub_field("text") ? get_sub_field("text") : "";
$signature = get_sub_field("signature") ? get_sub_field("signature") : "";

?>

<section class="contact-form p-relative d-flex d-flex-wrap">
    <div class="contact-form__image">
        <img src="<?= $image["url"] ?>" alt="<?= $image["alt"] ?>" class="contact-form__img d-block">
    </div>
    <div class="contact-form__container p-relative">
        <div class="contact-form__content p-relative">
            <?php if($title): ?>
                <h2 class="contact-form__title heading-xlarge u-text-center"><?= $title ?></h2>
            <?php endif; ?>

            <div class="contact-form__contact d-flex d-flex-column d-flex-align-c">
                <?php if($text): ?>
                    <div class="contact-form__text list-basic"><?= $text ?></div>
                <?php endif; ?>

                <?php if($signature): ?>
                    <div class="contact-form__signature f-script heading-script-two u-text-right line-medium"><?= $signature ?></div>
                <?php endif; ?>
                <?php echo do_shortcode('[wpforms id="466" title="false"]');?>
            </div>
        </div>
    </div>
</section>