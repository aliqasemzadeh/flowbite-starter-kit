<?php

namespace App\View\Components\Flowbite;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string $id The ID of the checkbox
     * @param string $label The label text
     * @param bool $checked Whether the checkbox is checked
     * @param bool $disabled Whether the checkbox is disabled
     * @param string $color The color of the checkbox (primary, blue, green, red, yellow, purple, etc.)
     * @param string $value The value of the checkbox
     * @param string $name The name of the checkbox
     * @param string $class Additional classes for the checkbox
     */
    public function __construct(
        public string $id = 'checkbox',
        public string $label = 'Checkbox',
        public bool $checked = false,
        public bool $disabled = false,
        public string $color = 'blue',
        public string $value = '',
        public string $name = '',
        public string $class = '',
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.flowbite.checkbox');
    }
}
