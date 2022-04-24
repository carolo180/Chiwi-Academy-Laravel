<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Evento;

class Events extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $eventos = Evento::all();
         return view('components.events', ['eventos' => $eventos]);
        
    }
}
