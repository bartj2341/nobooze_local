<?php

$image = get_sub_field("image") ? get_sub_field("image") : "";
$form_decoration = get_sub_field("form_decoration") ? get_sub_field("form_decoration") : "";

?>

<section class="contact-form p-relative d-flex d-flex-wrap">
    <div class="contact-form__image">
        <img src="<?= $image["url"] ?>" alt="<?= $image["alt"] ?>" class="contact-form__img d-block">
    </div>
    <div class="contact-form__container p-relative">
        <h2 class="contact-form__title heading-xlarge u-text-center">Get in touch with Michaela</h2>
        <div class="contact-form__contact d-flex d-flex-column d-flex-align-c">
            <div class="contact-form__text line-half">
                <p>Got a query? Email support@thealcoholcoach.com</p>
                <p>Complete the form below to contact me.</p>
            </div>
            <form class="contact-form__form u-form" action="">
                <div class="u-form__body">
                    <div class="u-form__row">
                        <label for="name" class="u-form__label f-text-bold">Name <span>*</span></label>
                        <input class="u-form__basic w-100" type="text" name="name" id="name">
                    </div>
                    <div class="u-form__row">
                        <label for="email" class="u-form__label f-text-bold">Email <span>*</span></label>
                        <input class="u-form__basic w-100" type="email" name="email" id="email">
                    </div>
                    <div class="u-form__row">
                        <label for="message" class="u-form__label f-text-bold">Your message <span>*</span></label>
                        <textarea class="u-form__textarea u-form__basic w-100" type="message" name="message" id="message"></textarea>
                    </div>
                </div>
                <div class="u-form__button w-100">
                    <button type="submit" class="u-form__submit u-btn--submit">
                        <span>CONTACT MICHAELA</span>
                    </button>
                </div
            </form>
        </div>
    </div>
</section>