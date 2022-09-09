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
    <a href="{{route('web.spaces')}}" class="button button--center">Conheça mais</a>
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
        <button x-on:click="$store.slides.eventPrev()">
          <ion-icon name="chevron-back-outline"></ion-icon>
        </button>
        <button x-on:click="$store.slides.eventNext()">
          <ion-icon name="chevron-forward-outline"></ion-icon>
        </button>
      </div>
    </div>
  </section>

  <section class="home-gallery">
    <div class="container home-gallery__container">
      <div class="home-gallery__images">
        <img src="https://picsum.photos/400" alt="">
        <img src="https://picsum.photos/400" alt="">
        <img src="https://picsum.photos/400" alt="">
        <img src="https://picsum.photos/400" alt="">
      </div>
      <div class="home-gallery__content">
        <div class="home-gallery__content__wrapper">
          <h2 class="page-title page-title--right">Galeria</h2>
          <p class="page-text page-text--right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue tortor,
            lorem facilisis eu id porta orci scelerisque facilisi. Nullam eget consectetur egestas ut purus diam egestas
            dui tristique Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur adipiscing
            elit. Congue tortor, lorem facilisis eu id porta orci scelerisque facilisi.</p>
          <a href="#" class="button button--right">Conheça mais</a>
        </div>
        <div class="home-gallery__content__images">
          <img src="https://picsum.photos/400" alt="">
          <img src="https://picsum.photos/400" alt="">
        </div>
      </div>
    </div>
  </section>
  <section class="home-gastronomy">
    <div class="container home-gastronomy__container">
      <div class="home-gastronomy__content">
        <h2 class="page-title home-gastronomy__title">Gastronomia</h2>
        <p class="page-text home-gastronomy__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue
          tortor, lorem facilisis eu id porta orci scelerisque facilisi. Nullam eget consectetur egestas ut purus diam
          egestas dui tristique Lorem ipsum dolor sit amet, consectetur.
          <br/><br/>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue tortor, lorem facilisis eu id porta orci
          scelerisque facilisi. Nullam eget consectetur egestas ut purus diam egestas dui tristique Lorem ipsum dolor
          sit amet, consectetur Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue tortor, lorem facilisis
          eu id porta orci scelerisque facilisi. Nullam eget consectetur egestas ut purus diam egestas dui tristique
          Lorem ipsum dolor sit amet, consectetur </p>
        <a href="#" class="button">Conheça mais</a>
      </div>
      <div class="home-gastronomy__carousel" x-data="data">
        <button x-on:click="$store.slides.gastronomyPrev()" class="home-gastronomy__carousel__prev">
          <ion-icon name="chevron-back-outline"></ion-icon>
        </button>
        <livewire:web.home.components.gastronomy-carousel/>
        <button x-on:click="$store.slides.gastronomyNext()" class="home-gastronomy__carousel__next">
          <ion-icon name="chevron-forward-outline"></ion-icon>
        </button>
      </div>
    </div>
  </section>

  <section class="home-partners" x-data="data">
    <div class="container home-partners__container">
      <h2 class="page-title page-title--center home-partners__title">Clientes Corporativos</h2>
      <p class="page-text page-text--center home-partners__text">Lorem ipsum dolor sit amet, consectetur adipiscing
        elit. Congue tortor, lorem facilisis eu id porta orci scelerisque facilisi. Nullam eget.</p>
      <livewire:web.home.components.partners-carousel/>
      <div class="home-partners__grid">
        <div class="home-partners__grid__buttons">
          <button x-on:click="$store.slides.partnersPrev()" class="home-gastronomy__carousel__prev">
            <ion-icon name="chevron-back-outline"></ion-icon>
          </button>
          <button x-on:click="$store.slides.partnersNext()" class="home-gastronomy__carousel__prev">
            <ion-icon name="chevron-forward-outline"></ion-icon>
          </button>
        </div>
        <a href="#" class="button button--center">Conheça mais</a>
      </div>
    </div>
  </section>
  <livewire:web.components.cta/>
</div>
