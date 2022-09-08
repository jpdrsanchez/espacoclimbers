<?php

namespace App\Http\Livewire\Web\Home;

use Illuminate\View\View;
use Livewire\Component;

class HomeTemplate extends Component
{
    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.web.home.home-template')
            ->layoutData(['title' => 'Home | Espaço Climber', 'description' => 'Espaço Climber Homepage']);
    }
}
