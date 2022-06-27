<?php
/**
 * Template name: Booking
 */

get_header(); 
?>

<main class="booking-wrapper">
    <section class="booking-section">
        <div class="booking-section__wrapper wrapper-box">
            <div class="booking-section__container">
                <?php echo do_shortcode('[ssa_booking type=consultation-phone-call] ') ?> 
            </div>
        </div>
    </section>
</main>

<?php
get_footer();