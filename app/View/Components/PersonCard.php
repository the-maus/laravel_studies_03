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
        public string $person,
        public array $languages
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.person-card');
    }

    public function shouldRender(): bool // default Component method (condition to render component)
    {
        // only renders the component if person speaks more than one language
        return count($this->languages) > 1;
    }

    public function colorName(): bool // custom method can be called using {{ $colorName() }} inside component
    {
        // if person is John, highlight name
        return $this->person === 'John';
    }
}
