<div>
  <main class="home-main">
    <div class="home-main__content">
      <div class="container home-main__container">
        <div class="home-main__intro">
          <h1 class="page-title page-title--center page-title--white home-main__title">Espaço Rústico, Moderno e
            Acolhedor</h1>
          <p class="page-text page-text--center page-text--white page home-main__text">Lorem ipsum dolor sit amet,
            consectetur
            adipiscing elit.
            Congue tortor, lorem facilisis eu id porta orci scelerisque facilisi. Nullam eget consectetur egestas ut
            purus
            diam egestas dui tristique</p>
        </div>
        <livewire:web.home.components.main-carousel/>
        <div class="home-main__grid">
          <div></div>
          <a href="#space" class="button button--white button--center">Continue explorando</a>
          <div class="home-main__information">
            <ul class="home-main__list">
              <li class="home-main__list__item">
                <a href="#" class="home-main__list__link">
                  <ion-icon name="logo-whatsapp"></ion-icon>
                  <span class="visually-hidden">Whatsapp</span>
                </a>
              </li>
              <li class="home-main__list__item">
                <a href="#" class="home-main__list__link">
                  <ion-icon name="logo-instagram"></ion-icon>
                  <span class="visually-hidden">Instagram</span>
                </a>
              </li>
              <li class="home-main__list__item">
                <a href="#" class="home-main__list__link">
                  <ion-icon name="logo-facebook"></ion-icon>
                  <span class="visually-hidden">Facebook</span>
                </a>
              </li>
            </ul>
            <time class="home-main__year" datetime="{{now()}}">&copy; {{now()->year}}</time>
          </div>
        </div>
      </div>
    </div>
  </main>

  <section class="home-space" id="space">
    <div class="container home-space__container">
      <div class="home-space__content">
        <h2 class="page-title page-title--center home-space__title">O espaço</h2>
        <p class="page-text page-text--center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue tortor,
          lorem facilisis eu id porta orci scelerisque facilisi. Nullam eget consectetur egestas ut purus diam egestas
          dui
          tristique Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Congue tortor, lorem facilisis eu id porta orci scelerisque facilisi.</p>
      </div>
    </div>
    <div class="home-space__grid">
      <div class="home-space__grid__item">
        <div class="home-space__grid__content">
          <h3 class="page-title page-title--center page-title--white home-space__grid__content__title">Espaço Rústico,
            Moderno e
            Acolhedor</h3>
          <p class="page-text page-title--center page-text--white">Lorem ipsum dolor sit amet, consectetur adipiscing
            elit. Congue tortor,
            lorem facilisis eu id porta orci scelerisque facilisi. Nullam eget consectetur egestas ut purus diam egestas
            dui
            tristique</p>
        </div>
        <div class="home-space__grid__item__bg"></div>
        <img class="home-space__grid__item__image" src="{{Vite::asset('resources/images/home/space-one.jpg')}}"
             alt="Espaço 1">
      </div>
      <div class="home-space__grid__item">
        <div class="home-space__grid__content">
          <h3 class="page-title page-title--center page-title--white home-space__grid__content__title">Espaço Rústico,
            Moderno e
            Acolhedor</h3>
          <p class="page-text page-title--center page-text--white">Lorem ipsum dolor sit amet, consectetur adipiscing
            elit. Congue tortor,
            lorem facilisis eu id porta orci scelerisque facilisi. Nullam eget consectetur egestas ut purus diam egestas
            dui
            tristique</p>
        </div>
        <div class="home-space__grid__item__bg"></div>
        <img class="home-space__grid__item__image" src="{{Vite::asset('resources/images/home/space-two.jpg')}}"
             alt="Espaço 2">
      </div>
    </div>
    <a href="#" class="button button--center">Conheça mais</a>
  </section>

  <section class="home-events" x-data>
    <div class="container home-events__container">
      <h2 class="page-title home-events__title">Eventos</h2>
      <p class="page-text home-events__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue tortor,
        lorem
        facilisis eu id
        porta orci scelerisque facilisi. Nullam eget consectetur egestas ut purus diam egestas dui tristique Lorem ipsum
        dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue tortor, lorem
        facilisis eu id porta orci scelerisque facilisi.</p>
    </div>
    <div class="home-events__carousel">
      <livewire:web.home.components.events-carousel/>
      <div class="home-events__navigation">
        <button @click="$store.eventSlide.slidePrev(500)">
          <ion-icon name="chevron-back-outline"></ion-icon>
        </button>
        <button @click="$store.eventSlide.slideNext(500)">
          <ion-icon name="chevron-forward-outline"></ion-icon>
        </button>
      </div>
    </div>
  </section>
</div>
