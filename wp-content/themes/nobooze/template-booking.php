<?php
/**
 * Template name: Booking
 */

get_header(); 
?>

<main class="main-wrapper">
    <section class="booking-section">
        <div class="booking-section__container wrapper-large">
            <?php echo do_shortcode('[CP_APP_HOUR_BOOKING id="3"]') ?> 
        </div>
    </section>
</main>

<?php
get_footer();