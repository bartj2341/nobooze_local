<?php
$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$title = get_sub_field("title") ? get_sub_field("title") : "";
?>

<section class="video-row <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <div class="video-row__container wrapper-large">
        <?php if($title): ?>
            <h2 class="video-row__title heading-basic u-text-center"><?= $title ?></h2>
        <?php endif; ?>
        <?php if(have_rows("videos_repeater")): ?>
        <div class="video-row__row d-flex d-flex-wrap">
            <?php while(have_rows("videos_repeater")): the_row(); 
            $video = get_sub_field("video") ? get_sub_field("video") : "";
            ?>
            <div class="video-row__video ">
                <div class="video-row__responsive u-iframe">
                    <?= $video ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>