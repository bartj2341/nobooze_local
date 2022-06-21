/**
 * SASS
 */
import '../sass/frontend.scss'

/**
 * JavaScript
 */

/**
 * Add here your JavasScript code
 */

import { handleWindow } from './modules/_helpers'
import { SwiperCarousel } from './modules/_swiper'
import { Accessibility } from './modules/_desktop-submenu'
import { Menu } from './modules/_mobile-menu'
import { BookingSummary } from './modules/_booking-summary' 
import { Parallax } from './modules/_parallax';

window.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.js-carousel')
    const bookingSummary = document.querySelector('.booking-section')
    const parallax = document.querySelector(".jarallax")

    new Accessibility();
    new Menu();

    if (carousel) {
        new SwiperCarousel()
    }

    if(bookingSummary) {
        new BookingSummary()
    }

    if(parallax) {
        new Parallax();
    }

    handleWindow()
})
