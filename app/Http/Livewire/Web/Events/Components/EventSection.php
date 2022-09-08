<?php

namespace App\Http\Livewire\Web\Events\Components;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class EventSection extends Component
{
    public bool $right;

    public function mount(int $index)
    {
        $this->right = $index % 2 === 0;
    }

    public function render(): View
    {
        return view('livewire.web.events.components.event-section');
    }
}
