import { vh, handleWindow } from './js/helpers'
import { SwiperCarousel } from './js/swiper'

const carousel = document.querySelector(".js-carousel");

if(carousel) {
    new SwiperCarousel()
}

handleWindow()