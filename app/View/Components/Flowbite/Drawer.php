<?php

namespace App\View\Components\Flowbite;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Drawer extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string $id The ID of the drawer
     * @param string $position The position of the drawer (left, right, top, bottom)
     * @param string $size The size of the drawer (width for left/right, height for top/bottom)
     * @param string $title The title of the drawer
     * @param bool $showCloseButton Whether to show the close button
     */
    public function __construct(
        public string $id = 'drawer-example',
        public string $position = 'left',
        public string $size = '80',
        public string $title = 'Info',
        public bool $showCloseButton = true
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.flowbite.drawer');
    }
}
