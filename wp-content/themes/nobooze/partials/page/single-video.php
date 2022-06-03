<?php
$modifier = get_sub_field("modifier") ? get_sub_field("modifier") : [];
$title = get_sub_field("title") ? get_sub_field("title") : "";
$video = get_sub_field("video") ? get_sub_field("video") : "";
?>

<section class="single-video <?php foreach ($modifier as $value) { echo(' ' . $value); } ?>">
    <div class="single-video__container wrapper-large">
        <?php if($title): ?>
            <h2 class="single-video__title heading-basic c-white u-text-center"><?= $title ?></h2>
        <?php endif; ?>

        <?php if($video): ?>
            <div class="single-video__video">
                <div class="single-video__responsive u-iframe">
                    <?= $video ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>