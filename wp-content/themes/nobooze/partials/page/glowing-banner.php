<?php
$title = get_sub_field("title") ? get_sub_field("title") : "";
$button = get_sub_field("button") ? get_sub_field("button") : "";
$animated_letters = get_sub_field("animated_letter_by_letter") ? get_sub_field("animated_letter_by_letter") : "";
?>

<section class="glowing-banner p-relative">
    <div class="wrapper-large">
        <div class="glowing-banner__wrapper d-flex d-flex-justify-c">
            <div class="glowing-banner__container p-relative">
                
                <?php if($animated_letters): ?>
                    <?php if(have_rows("words")): 
                        $delay = 0;
                        ?>
                        <div class="glowing-banner__words c-white f-heading u-text-center">
                            <?php while(have_rows("words")): the_row(); ?>
                            <span class="glowing-banner__word">
                                <?php if(have_rows("word")): ?>
                                    <?php while(have_rows("word")): the_row(); 
                                    $letter = get_sub_field("letter") ? get_sub_field("letter") : "";
                                    ?>
                                    <span data-aos="fade" data-aos-easing="linear" data-aos-delay="<?= $delay ?>" data-aos-duration="500" class="glowing-banner__letter heading-banner"><?= $letter ?></span>
                                    <?php $delay += 50 ?>  
                                    <?php endwhile; ?> 
                                <?php endif; ?>
                            </span>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <?php else: ?>
                    <?php if($title): ?>
                        <h2 class="glowing-banner__title f-heading heading-banner c-white u-text-center"><?= $title ?></h2>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if($button): ?>
                    <div class="glowing-banner__button w-100 d-flex d-flex-center"> 
                        <a href="<?= $button["url"] ?>" target="<?= $button["target"]?>" class="glowing-banner__cta u-btn--white"><?= $button["title"]?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section> 