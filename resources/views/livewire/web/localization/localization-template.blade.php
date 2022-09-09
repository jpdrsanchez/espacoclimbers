<div>
  <livewire:web.components.cover title="Localização"
                                 text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue tortor, lorem facilisis eu id porta orci scelerisque facilisi. Nullam eget consectetur egestas ut purus diam egestas dui tristique"/>
  <section class="localization">
    <div class="container localization__container">
      <h2 class="visually-hidden">Localização</h2>
      <div class="localization__map">
        <div style="width: 100%; height: 100%">
          <iframe style="border: none; margin: 0;" width="100%" height="100%"
                  src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Endere%C3%A7o:%20R.%20Carlos%20Weber,%201272%20-%20Vila%20Leopoldina,%20S%C3%A3o%20Paulo%20-%20SP,%2005303-000+()&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
          </iframe>
        </div>
      </div>
      <div class="localization__address">
        <img src="{{Vite::asset('resources/images/location.svg')}}" alt="Localização">
        <p class="page-text">Endereço: R. Carlos Weber, 1272 - Vila Leopoldina, São Paulo - SP, 05303-000</p>
      </div>
    </div>
  </section>
  <livewire:web.components.cta/>
</div>
