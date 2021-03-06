<?php

namespace App\View\Components;
use App\Models\Jeu;
use Illuminate\View\Component;

class Jeux extends Component
{
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id=$id;
    }



    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $j=Jeu::find($this->id);
        return view('components.jeu',['j'=>$j]);
    }
}
