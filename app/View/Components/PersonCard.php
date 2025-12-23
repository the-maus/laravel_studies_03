<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PersonCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $personName, //person-name on component call
        public array $personLanguages //person-languages...
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.person-card');
    }
}
