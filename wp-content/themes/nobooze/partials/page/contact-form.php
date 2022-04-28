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
        <?php if($form_decoration): ?>
            <div class="contact-form__decoration w-100 h-100" style="background-image: url(<?= $form_decoration["url"] ?>)"></div>
        <?php endif; ?>
        <div class="contact-form__content p-relative">
            <?php if($title): ?>
                <h2 class="contact-form__title heading-xlarge u-text-center"><?= $title ?></h2>
            <?php endif; ?>

            <div class="contact-form__contact d-flex d-flex-column d-flex-align-c">
                <?php if($text): ?>
                    <div class="contact-form__text line-half"><?= $text ?></div>
                <?php endif; ?>

                <?php if($signature): ?>
                    <div class="contact-form__signature f-script heading-script-two u-text-right line-medium"><?= $signature ?></div>
                <?php endif; ?>
                <form class="contact-form__form u-form" action="">
                    <div class="contact-form__body u-form__body">
                        <div class="u-form__fields">
                            <div class="u-form__row">
                                <label for="name" class="u-form__label f-text-bold">Name <span>*</span></label>
                                <input class="u-form__basic w-100" type="text" name="name" id="name" required>
                            </div>
                            <div class="u-form__row">
                                <label for="email" class="u-form__label f-text-bold">Email <span>*</span></label>
                                <input class="u-form__basic w-100" type="email" name="email" id="email" required>
                            </div>
                            <div class="u-form__row">
                                <label for="message" class="u-form__label f-text-bold">Your message <span>*</span></label>
                                <textarea class="u-form__textarea u-form__basic w-100" type="message" name="message" id="message" required></textarea>
                            </div>
                        </div>
                        <div class="u-form__button w-100">
                            <button type="submit" class="u-form__submit u-btn--submit">
                                <span>CONTACT MICHAELA</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>