<?php

namespace App\View\Components;

use Illuminate\View\Component;

class userList extends Component
{
    public $usersList;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($usersList)
    {
        $this->usersList = $usersList;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user-list');
    }
}
