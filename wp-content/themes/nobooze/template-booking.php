<?php
/**
 * Template name: Booking
 */

get_header(); 
?>

<main class="main-wrapper">
    <section class="booking-section booking-wrapper">
        <div class="booking-section__wrapper">
            <div class="booking-section__container">
                <?php echo do_shortcode('[ssa_booking type=coaching-consultation-call] ') ?> 
            </div>
        </div>
    </section>
</main>

<?php
get_footer();