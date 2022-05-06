<?php

$title = get_sub_field("title") ? get_sub_field("title") : "";

?>

<section class="logo-carousel u-carousel wrapper-carousel">
    <div class="u-carousel__container d-flex d-flex-column d-flex-align-c">
        <?php if($title): ?>
            <div class="u-carousel__title f-heading text-sixteen ls-4 u-text-center"><?= $title ?></div>
        <?php endif; ?>
        <?php if(have_rows("items")): ?>
            <div class="js-carousel logo-carousel__carousel u-carousel__carousel swiper">
                <div class="u-carousel__row swiper-wrapper d-flex d-flex-align-c">
                    <?php while(have_rows("items")): the_row(); 
                    $logo = get_sub_field("logo") ? get_sub_field("logo") : "";
                    ?>
                    <div class="u-carousel__item swiper-slide d-flex d-flex-center">
                        <img class="u-carousel__img" src="<?= $logo["url"] ?>" alt="<?= $logo["alt"] ?>">
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>