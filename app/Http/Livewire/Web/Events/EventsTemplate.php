<?php

namespace App\Http\Livewire\Web\Events;

use Livewire\Component;

class EventsTemplate extends Component
{
    public function render()
    {
        return view('livewire.web.events.events-template')
            ->layoutData(['title' => 'Eventos | Espaço Climber', 'description' => 'Espaço Climber Eventos']);
    }
}
