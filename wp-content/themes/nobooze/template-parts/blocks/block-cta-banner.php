<?php
/**
 * Block Name: CTA Banner
 *
 * This is the template that displays the testimonial block.
 */

$title = get_field("title") ? get_field("title") : "";
$text = get_field("text") ? get_field("text") : "";
$cta = get_field("cta") ? get_field("cta") : "";

?>

<div class="cta-banner p-relative">
    <div class="cta-banner__container d-flex d-flex-wrap d-flex-justify-c">
        <div class="cta-banner__content d-flex d-flex-column d-flex-align-c d-flex-justify-c">
            <?php if($title): ?>
                <h2 class="cta-banner__title f-heading c-white u-text-center"><?= $title ?></h2>
            <?php endif; ?>
            <?php if($text): ?>
                <p class="cta-banner__text f-heading c-white u-text-center line-normal"><?= $text ?></p>
            <?php endif; ?>
        </div>
        <?php if($cta): ?>
            <div class="cta-banner__button w-100 d-flex d-flex-center"> 
                <a href="<?= $cta["url"] ?>" target="<?= $cta["target"]?>" class="cta-banner__cta u-btn"><?= $cta["title"]?></a>
            </div>
        <?php endif; ?>
    </div>
</div> 