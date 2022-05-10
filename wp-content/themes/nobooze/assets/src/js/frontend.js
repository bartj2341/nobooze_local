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

window.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.js-carousel')

    new Accessibility();
    new Menu();

    if (carousel) {
        new SwiperCarousel()
    }

    handleWindow()
})
