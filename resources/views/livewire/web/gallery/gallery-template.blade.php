<div>
  <livewire:web.components.cover title="Veja nossa galeria de fotos"
                                 text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue tortor, lorem facilisis eu id porta orci scelerisque facilisi. Nullam eget consectetur egestas ut purus diam egestas dui tristique"/>
  <section class="gallery">
    <h2 class="visually-hidden">Galeria de Fotos</h2>
    <div class="container gallery__container">
      @for($i = 0; $i < 2; $i++)
        <div class="gallery__wrapper">
          @for($j = 0; $j < 8; $j++)
            <div class="gallery__item">
              <img src="https://picsum.photos/400" alt="Imagem">
            </div>
          @endfor
        </div>
      @endfor
    </div>
  </section>
  <livewire:web.components.cta/>
</div>
