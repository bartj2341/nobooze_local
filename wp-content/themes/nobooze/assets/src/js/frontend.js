/**
 * SASS
 */
import '../sass/frontend.scss'
import { Accessibility } from './modules/_desktop-submenu'

/**
 * JavaScript
 */

/**
 * Add here your JavasScript code
 */

import { handleWindow } from './modules/_helpers'
import { SwiperCarousel } from './modules/_swiper'

window.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.js-carousel')

    new Accessibility();

    if (carousel) {
        new SwiperCarousel()
    }

    handleWindow()
})
