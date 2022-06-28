<?php
$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$bg_image = get_sub_field("background_image") ? get_sub_field("background_image") : "";
$title = get_sub_field("title") ? get_sub_field("title") : "";
$animated_letters = get_sub_field("animated_letter_by_letter") ? get_sub_field("animated_letter_by_letter") : "";
?>

<section class="script-banner p-relative <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <div class="script-banner__dark p-absolute z-index-1"></div>
    <?php if($bg_image): ?>
        <div class="script-banner__bg w-100 h-100 p-absolute">
            <div class="jarallax-up jarallax w-100 h-100">
                <img data-src="<?= $bg_image["url"] ?>" alt="<?= $bg_image["alt"] ?>" class="jarallax-img script-banner__img d-block lazy">
            </div>
        </div>
    <?php endif; ?>
    <div class="wrapper-full">
        <div class="script-banner__wrapper d-flex d-flex-center">
            <div class="script-banner__container p-relative z-index-1">
                <?php if($animated_letters): ?>
                    <?php if(have_rows("words")): 
                        $delay = 0;
                        ?>
                        <div class="script-banner__words c-white f-script u-text-center">
                            <?php while(have_rows("words")): the_row(); ?>
                            <span class="script-banner__word">
                                <?php if(have_rows("word")): ?>
                                    <?php while(have_rows("word")): the_row(); 
                                    $letter = get_sub_field("letter") ? get_sub_field("letter") : "";
                                    ?>
                                    <span data-aos="fade" data-aos-easing="linear" data-aos-delay="<?= $delay ?>" data-aos-duration="500" class="script-banner__letter heading-script"><?= $letter ?></span>
                                    <?php $delay += 50 ?>  
                                    <?php endwhile; ?> 
                                <?php endif; ?>
                            </span>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <?php else: ?>
                    <?php if($title): ?>
                        <h2 class="script-banner__title c-white f-script heading-script u-text-center"><?= $title ?></h2>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section> 