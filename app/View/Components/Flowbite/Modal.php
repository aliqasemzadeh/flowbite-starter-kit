<?php

namespace App\View\Components\Flowbite;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string $id The ID of the modal
     * @param string $size The size of the modal (sm, md, lg, xlg, full)
     */
    public function __construct(
        public string $id = 'default-modal',
        public string $size = 'md'
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.flowbite.modal');
    }
}
