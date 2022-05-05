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

window.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.js-carousel')

    if (carousel) {
        new SwiperCarousel()
    }

    handleWindow()
})
