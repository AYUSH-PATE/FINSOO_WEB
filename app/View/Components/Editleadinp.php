<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Editleadinp extends Component
{
    public $label;
    public $type;
    public $class;
    public $id;
    public $name;
    public $value;
    /**
     * Create a new component instance.
     */
    public function __construct($label,$type,$class,$id,$name,$value)
    {
        $this->label = $label;
        $this->type = $type;
        $this->class = $class;
        $this->id = $id;
        $this->name = $name;
        $this->value= $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.editleadinp');
    }
}
