<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $color;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = 'yellow')
    {
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }

    public function prueba(){
        //podemos agregar logica como que color pintar acoder a un tipo, etc.
        if ($this->color == "red") {
            return "es una alerta de peligro";
        }
    }

}
