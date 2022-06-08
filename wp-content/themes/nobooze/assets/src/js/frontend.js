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

window.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.js-carousel')
    const bookingSummary = document.querySelector('.booking-section')

    new Accessibility();
    new Menu();

    if (carousel) {
        new SwiperCarousel()
    }

    if(bookingSummary) {
        new BookingSummary()
    }

    handleWindow()
})
