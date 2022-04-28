<?php

$title = get_sub_field("title") ? get_sub_field("title") : "";

?>

<section class="buttons-row p-relative <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <div class="wrapper-large">
        <div class="buttons-row__wrapper d-flex d-flex-justify-c">
            <div class="buttons-row__container p-relative">
                <?php if($title): ?>
                    <h2 class="buttons-row__title f-heading heading-large u-text-center"><?= $title ?></h2>
                <?php endif; ?>
                <?php if(have_rows("buttons")): ?>
                    <div class="buttons-row__row d-flex d-flex-wrap d-flex-justify-c d-flex-align-c">
                        <?php while(have_rows("buttons")): the_row(); 
                        $button = get_sub_field("button") ? get_sub_field("button") : "";
                        ?>
                        <div class="buttons-row__btn"> 
                            <a href="<?= $button["url"] ?>" target="<?= $button["target"]?>" class="alternate-banner__cta u-btn"><?= $button["title"]?></a>
                        </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section> 