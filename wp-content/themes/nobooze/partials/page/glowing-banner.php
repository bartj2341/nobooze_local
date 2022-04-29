<?php

$title = get_sub_field("title") ? get_sub_field("title") : "";
$button = get_sub_field("button") ? get_sub_field("button") : "";

?>

<section class="glowing-banner p-relative">
    <div class="wrapper-large">
        <div class="glowing-banner__wrapper d-flex d-flex-justify-c">
            <div class="glowing-banner__container p-relative">
                <?php if($title): ?>
                    <h2 class="glowing-banner__title f-heading heading-banner c-white u-text-center"><?= $title ?></h2>
                <?php endif; ?>

                <?php if($button): ?>
                    <div class="glowing-banner__button w-100 d-flex d-flex-center"> 
                        <a href="<?= $button["url"] ?>" target="<?= $button["target"]?>" class="glowing-banner__cta u-btn"><?= $button["title"]?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section> 