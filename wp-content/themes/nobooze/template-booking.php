<?php
/**
 * Template name: Booking
 */

get_header(); 
?>

<main class="main-wrapper">
    <section class="booking-section">
        <div class="booking-section__container wrapper-large">
            <?php echo do_shortcode('[ssa_booking type=consultation-phone-call] ') ?> 
        </div>
    </section>
</main>

<?php
get_footer();