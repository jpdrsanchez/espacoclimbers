import Swiper, { EffectCards } from 'swiper'
import 'swiper/css'
import 'swiper/css/effect-cards'

export const mainSwiper = new Swiper('.home-main-swiper', {
  autoplay: {
    disableOnInteraction: true,
    delay: 2000
  },
  centeredSlides: true,
  slidesPerView: 'auto',
  loop: true,
  spaceBetween: 30
})

export const eventsSwiper = new Swiper('.home-events-swiper', {
  autoplay: {
    disableOnInteraction: true,
    delay: 2000
  },
  slidesPerView: 'auto',
  loop: true
})

export const gastronomySwiper = new Swiper('.gastronomy-swiper', {
  autoplay: {
    delay: 2000,
    disableOnInteraction: true
  },
  slidesPerView: 'auto',
  loop: true,
  spaceBetween: 30
})

export const homeGastronomySwiper = new Swiper('.home-gastronomy-swiper', {
  loop: true,
  effect: 'cards',
  grabCursor: true,
  modules: [EffectCards]
})

export const homePartnersSwiper = new Swiper('.home-partners-swiper', {
  autoplay: {
    delay: 2000,
    disableOnInteraction: true
  },
  slidesPerView: 'auto',
  loop: true,
  spaceBetween: 60
})
