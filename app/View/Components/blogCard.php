<?php

namespace App\View\Components;

use Illuminate\View\Component;

class blogCard extends Component
{

    public $blog;
    public $index;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($blog, $index)
    {
        $this->blog = $blog;
        $this->index = $index;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blog-card');
    }
}
