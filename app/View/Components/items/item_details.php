<?php

namespace App\View\Components\items;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class item_details extends Component
{
    /**
     * Create a new component instance.
     */
    public $item_details;

    public function __construct($item_details)
    {
        $this->item_details = $item_details;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.items.item_details');
    }
}
