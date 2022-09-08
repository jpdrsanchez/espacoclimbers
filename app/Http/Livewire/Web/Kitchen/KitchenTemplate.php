<?php

namespace App\Http\Livewire\Web\Kitchen;

use Livewire\Component;

class KitchenTemplate extends Component
{
    public function render()
    {
        return view('livewire.web.kitchen.kitchen-template')
            ->layoutData(['title' => 'Nossa cozinha | Espaço Climber', 'description' => 'Espaço Climber Cozinha']);
    }
}
