import Swiper from 'swiper'
import 'swiper/css'

export const mainSwiper = new Swiper('.home-main-swiper', {
  autoplay: {
    disableOnInteraction: true
  },
  centeredSlides: true,
  slidesPerView: 'auto',
  loop: true,
  spaceBetween: 30
})

export const eventsSwiper = new Swiper('.home-events-swiper', {
  autoplay: {
    disableOnInteraction: true
  },
  slidesPerView: 'auto',
  loop: true
})
