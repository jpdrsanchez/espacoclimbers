<div class="swiper home-events-swiper">
  <div class="swiper-wrapper">
    @for($i = 0; $i < 10; $i++)
      <div class="swiper-slide home-events-swiper__item">
        <div class="home-events-swiper__wrapper">
          <div class="home-events-swiper__inner">
            <div class="home-events-swiper__content">
              <h3 class="page-title page-title--center">Casamento</h3>
              <p class="page-text page-text--center page-text--sm">Lorem ipsum dolor sit amet, consct adipiscing elit.
                ctetur
                adipiscing elit. adipiscing elit. Lorem ipsum dolor adipiscing elit. adipiscing elit.
              </p>
              <a href="#" class="button button--center">Conheça mais</a>
            </div>
          </div>
          <div class="home-events-swiper__image">
            <img src="https://picsum.photos/500" alt="Banner Image">
          </div>
        </div>
      </div>
    @endfor
  </div>
</div>

