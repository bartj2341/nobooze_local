<?php
$author_name = get_the_author_meta("display_name"); 
?>

<section class="article-banner p-relative d-flex d-flex-column d-flex-align-c d-flex-justify-c">
    <div class="article-banner__container d-flex wrapper-large w-100 p-relative z-index-1">
        <div class="article-banner__content">
            <h1 class="article-banner__title heading-xlarge u-text-center"><?= the_title() ?></h1>
            <div class="article-banner__author heading-author f-heading u-text-center">By <span class="l-script--large"><?= $author_name ?></span></div>
        </div>
    </div>
    <div class="article-banner__bg d-flex d-flex-align-e">
        <img src="<?= get_template_directory_uri() ?>/assets/src/images/Alcohol-Coach-Blog.png" alt="article banner image" class="article-banner__img d-block">
    </div>
</section> 