<?php

namespace App\Http\Livewire\Web\Gallery;

use Livewire\Component;

class GalleryTemplate extends Component
{
    public function render()
    {
        return view('livewire.web.gallery.gallery-template')
            ->layoutData(['title' => 'Galeria | Espaço Climber', 'description' => 'Espaço Climber Galeria']);
    }
}
