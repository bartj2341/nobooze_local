import { vh, handleWindow } from './js/helpers'
import { SwiperCarousel } from './js/swiper'

import $ from 'jquery';

window.addEventListener("DOMContentLoaded", () => {

    const carousel = document.querySelector(".js-carousel");
    
    if(carousel) {
        new SwiperCarousel()
    }
    
    handleWindow()
})