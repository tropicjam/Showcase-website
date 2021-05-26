<?php

namespace App\View\Components;

use Illuminate\View\Component;

class call-to-action extends Component
{
    public $title, $link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $link)
    {
        $this->title = $title;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.call-to-action');
    }
}
