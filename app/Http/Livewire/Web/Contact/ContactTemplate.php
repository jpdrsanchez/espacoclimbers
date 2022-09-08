<?php

namespace App\Http\Livewire\Web\Contact;

use Livewire\Component;

class ContactTemplate extends Component
{
    public function render()
    {
        return view('livewire.web.contact.contact-template')
            ->layoutData(['title' => 'Contato | Espaço Climber', 'description' => 'Espaço Climber Contato']);
    }
}
