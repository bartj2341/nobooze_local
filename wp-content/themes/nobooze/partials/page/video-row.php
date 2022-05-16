<?php
$title = get_sub_field("title") ? get_sub_field("title") : "";
$video = get_sub_field("video") ? get_sub_field("video") : "";
?>

<section class="video-row">
    <div class="video-row__container wrapper-large">
        <div class="video-row__title heading-basic c-white u-text-center"><?= $title ?></div>
        <div class="video-row__video">
            <div class="video-row__responsive">
                <?= $video ?>
            </div>
        </div>
    </div>
</section>