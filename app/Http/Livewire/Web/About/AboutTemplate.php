<?php

namespace App\Http\Livewire\Web\About;

use Livewire\Component;

class AboutTemplate extends Component
{
    public function render()
    {
        return view('livewire.web.about.about-template')
            ->layoutData(['title' => 'Nosso Espaço | Espaço Climber', 'description' => 'Espaço Climber Nosso Espaço']);
    }
}
