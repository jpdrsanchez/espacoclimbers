import.meta.glob([
  '/resources/images/**'
])
import '@fontsource/montserrat/100.css'
import '@fontsource/montserrat/100-italic.css'
import '@fontsource/montserrat/200.css'
import '@fontsource/montserrat/200-italic.css'
import '@fontsource/montserrat/300.css'
import '@fontsource/montserrat/300-italic.css'
import '@fontsource/montserrat/400.css'
import '@fontsource/montserrat/400-italic.css'
import '@fontsource/montserrat/500.css'
import '@fontsource/montserrat/500-italic.css'
import '@fontsource/montserrat/600.css'
import '@fontsource/montserrat/600-italic.css'
import '@fontsource/montserrat/700.css'
import '@fontsource/montserrat/700-italic.css'
import '@fontsource/montserrat/800.css'
import '@fontsource/montserrat/800-italic.css'
import '@fontsource/montserrat/900.css'
import '@fontsource/montserrat/900-italic.css'
import Alpine from 'alpinejs'

import { eventsSwiper, homeGastronomySwiper, homePartnersSwiper } from './modules/swiper'

window.Alpine = Alpine

Alpine.start()

Alpine.store('slides', {
  eventPrev: () => eventsSwiper.slidePrev(500),
  eventNext: () => eventsSwiper.slideNext(500),
  gastronomyPrev: () => homeGastronomySwiper.slidePrev(500),
  gastronomyNext: () => homeGastronomySwiper.slideNext(500),
  partnersNext: () => homePartnersSwiper.slideNext(500),
  partnersPrev: () => homePartnersSwiper.slidePrev(500)
})
