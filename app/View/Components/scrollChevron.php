<?php

namespace App\View\Components;

use Illuminate\View\Component;

class scrollChevron extends Component
{
    public $link, $colour;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $colour, string $link)
    {
        $this->link = $link;
        $this->colour = $colour;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.scroll-chevron');
    }
}
