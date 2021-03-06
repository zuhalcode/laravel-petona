<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Hero extends Component
{
    public $credential;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($credential)
    {
        $this->credential = $credential;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.hero');
    }
}
