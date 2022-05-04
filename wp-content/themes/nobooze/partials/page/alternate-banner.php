<?php
$bg_color = get_sub_field("background_color") ? get_sub_field("background_color") : "";
$image = get_sub_field("image") ? get_sub_field("image") : "";
$tagline = get_sub_field("tagline") ? get_sub_field("tagline") : "";
$title = get_sub_field("title") ? get_sub_field("title") : "";
?>

<section class="alternate-banner p-relative d-flex d-flex-column d-flex-align-c d-flex-justify-c" style="background-color: <?= $bg_color ?>">
    <div class="alternate-banner__container d-flex wrapper-large w-100 p-relative">
        <div class="alternate-banner__content">
            <?php if($tagline): ?>
                <p class="alternate-banner__tagline f-heading heading-tagline u-text-center"><?= $tagline ?></p>
            <?php endif; ?>
            <?php if($title): ?>
                <h2 class="alternate-banner__title heading-about u-text-center"><?= $title ?></h2>
            <?php endif; ?>

            <?php if(have_rows("buttons_row")): ?>
                <div class="alternate-banner__row d-flex d-flex-wrap d-flex-justify-c d-flex-align-c">
                    <?php while(have_rows("buttons_row")): the_row(); 
                    $button = get_sub_field("button") ? get_sub_field("button") : "";
                    ?>
                    <div class="alternate-banner__btn"> 
                        <a href="<?= $button["url"] ?>" target="<?= $button["target"]?>" class="alternate-banner__cta u-btn--mobile-lg"><?= $button["title"]?></a>
                    </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php if($image): ?>
        <div class="alternate-banner__bg d-flex d-flex-align-e">
            <img src="<?= $image["url"] ?>" alt="<?= $image["alt"] ?>" class="alternate-banner__img d-block">
        </div>
    <?php endif; ?>
</section>