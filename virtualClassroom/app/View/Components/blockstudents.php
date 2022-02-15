<?php

namespace App\View\Components;

use Illuminate\View\Component;

class blockstudents extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $dataitem;
    public function __construct($dataitem)
    {
        $this->dataitem = $dataitem;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blockstudents');
    }
}
