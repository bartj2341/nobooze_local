import Swiper, { Navigation, Autoplay, Pagination } from 'swiper'  

export class SwiperCarousel {
  constructor() {
    Swiper.use([Navigation, Autoplay, Pagination]);

    this.logos
    this.emblems
    this.init()
  }

  init() {
    this.logosCarousel();
    this.emblemsCarousel();
  }

  logosCarousel() {
    this.logos = new Swiper(".logo-carousel__carousel", {
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 20,
      loop: true,
      breakpoints: {
        768: {
          slidesPerView: 4,
          slidesPerGroup: 4,
          resistanceRatio: 0,
        }
      }
    });
  }

  emblemsCarousel() {
    this.logos = new Swiper(".emblems-carousel__carousel", {
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 20,
      loop: true,
      breakpoints: {
        768: {
          slidesPerView: 3,
          slidesPerGroup: 3,
          resistanceRatio: 0,
        }
      }
    });
  }
}