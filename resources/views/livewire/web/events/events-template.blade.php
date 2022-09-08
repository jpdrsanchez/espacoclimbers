<div>
  <livewire:web.components.cover title="Eventos"
                                 text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue tortor, lorem facilisis eu id porta orci scelerisque facilisi. Nullam eget consectetur egestas ut purus diam egestas dui tristique"/>
  @for($i = 1; $i <= 7; $i++)
    <livewire:web.events.components.event-section :index="$i" :wire:key="'item-'.$i"/>
  @endfor
  <livewire:web.components.cta/>
</div>
