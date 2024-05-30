<?php

namespace App\View\Components\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class create_item extends Component
{
    /**
     * Create a new component instance.
     */
    public $locations;

    public function __construct($locations)
    {
        $this->locations = $locations;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.create_item');
    }
}
