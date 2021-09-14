<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardProduct extends Component
{
    public $id;
    public $imagen;
    public $nombre;
    public $descripcion;
    public $precioinicial;
    public $preciofinal;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $imagen, $nombre, $descripcion, $precioinicial, $preciofinal)
    {
        $this->id=$id;
        $this->imagen=$imagen;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->precioinicial=$precioinicial;
        $this->preciofinal=$preciofinal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-product');
    }
}
