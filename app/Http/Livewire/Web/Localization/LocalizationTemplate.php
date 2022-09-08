<?php

namespace App\Http\Livewire\Web\Localization;

use Livewire\Component;

class LocalizationTemplate extends Component
{
    public function render()
    {
        return view('livewire.web.localization.localization-template')
            ->layoutData(['title' => 'Localização | Espaço Climber', 'description' => 'Espaço Climber Localização']);
    }
}
