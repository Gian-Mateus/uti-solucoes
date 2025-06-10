<?php

namespace App\View\Components\page;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $content,
        public string $svg
    )
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page.card', ['cards' => $cards]);
    }
}
