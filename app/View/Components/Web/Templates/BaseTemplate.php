<?php

namespace App\View\Components\Web\Templates;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BaseTemplate extends Component
{
    /**
     * Create a new component instance.
     * @return void
     */
    public function __construct(public string $title, public string $description)
    {
    }

    /**
     * Get the view / contents that represent the component.
     * @return View
     */
    public function render(): View
    {
        return view('components.web.templates.base-template');
    }
}
