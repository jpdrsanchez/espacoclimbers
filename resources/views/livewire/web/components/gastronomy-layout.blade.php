<div class="gastronomy-template">
  <section class="gastronomy-template__section">
    <div class="container gastronomy-template__container">
      <div class="gastronomy-template__content">
        <h2 class="page-title gastronomy-template__title">Gastronomia impecável</h2>
        <p class="page-text gastronomy-template__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue
          tortor, lorem facilisis eu id porta orci scelerisque facilisi. Nullam eget consectetur egestas ut purus diam
          egestas dui tristique Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Congue tortor, lorem facilisis eu id porta orci scelerisque facilisi.</p>
      </div>
      <div class="gastronomy-template__buttons">
        <a href="#" class="button">Orçamento</a>
        <a href="#" class="button button--large">Conheça nossa Cozinha</a>
      </div>
    </div>
    <div class="gastronomy-template__carousel">
      <div class="gastronomy-template__carousel__inner">
        <livewire:web.components.gastronomy-carousel/>
      </div>
    </div>
  </section>
  <section class="gastronomy-template__gallery">
    <div class="container gastronomy-template__gallery__container">
      @for($i = 0; $i < 1; $i++)
        <div class="gastronomy-template__gallery__wrapper">
          @for($j = 0; $j < 8; $j++)
            <div class="gastronomy-template__gallery__item">
              <img src="https://picsum.photos/400" alt="Imagem">
            </div>
          @endfor
        </div>
      @endfor
    </div>
  </section>
</div>
