<?php
/**
 * Template name: Newsletter
 */

$title = get_field("title") ? get_field("title") : "";
$message = get_field("message") ? get_field("message") : ""; 

get_header(); 
?>

<main>
    <section class="newsletter-message main-wrapper">
        <div class="newsletter-message__wrapper wrapper-box">
            <div class="newsletter-message__container">
            <?php if($title): ?>
                <h1 class="newsletter-message__title u-text-center"><?= $title ?></h1>
            <?php endif; ?>

            <?php if($message): ?>
                <p class="newsletter-message__text list-basic"><?= $message ?></div>
            <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php 
get_footer();