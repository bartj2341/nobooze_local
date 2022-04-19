import Swiper, { Navigation, Autoplay, Pagination } from 'swiper'  

export class SwiperCarousel {
  constructor() {
    Swiper.use([Navigation, Autoplay, Pagination]);

    this.logos
    this.init()
  }

  init() {
    this.logosCarousel();
  }

  logosCarousel() {
    this.logos = new Swiper(".l-carousel__carousel", {
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 5000,
      },
      breakpoints: {
        768: {
          slidesPerView: 4,
          slidesPerGroup: 4,
          resistanceRatio: 0,
          autoplay: {
            delay: 5000,
          },
        }
      }

      
    });
  }
}