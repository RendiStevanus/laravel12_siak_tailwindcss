<?php

namespace App\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonAdd extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $action;
    public $class;
    public $title;

    public function __construct($id = null, $action = null, $class = null, $title = 'Add Data')
    {
        $this->id = $id;
        $this->action = $action;
        $this->class = $class;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buttons.button-add');
    }
}
