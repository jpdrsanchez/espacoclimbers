<?php

namespace App\Http\Livewire\Web\Gastronomy;

use Livewire\Component;

class GastronomyTemplate extends Component
{
    public function render()
    {
        return view('livewire.web.gastronomy.gastronomy-template')
            ->layoutData(['title' => 'Gastronomia | Espaço Climber', 'description' => 'Espaço Climber Gastronomia']);
    }
}
