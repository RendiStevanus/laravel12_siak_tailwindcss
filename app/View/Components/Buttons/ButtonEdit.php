<?php

namespace App\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonEdit extends Component
{
    public $id;
    public $action;
    /**
     * Create a new component instance.
     */
    public function __construct($id = null, $action = null)
    {
        $this->id = $id;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buttons.button-edit');
    }
}
