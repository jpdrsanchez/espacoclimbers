<?php

namespace App\Http\Livewire\Web\Components;

use Livewire\Component;

class Cover extends Component
{
    public string $title;
    public string $text;

    public function mount(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function render()
    {
        return view('livewire.web.components.cover');
    }
}
