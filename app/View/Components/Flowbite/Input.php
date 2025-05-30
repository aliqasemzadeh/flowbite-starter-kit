<?php

namespace App\View\Components\Flowbite;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type = 'text',
        public string $id = '',
        public string $name = '',
        public string $label = '',
        public string $placeholder = '',
        public string $value = '',
        public string $size = 'md',
        public bool $disabled = false,
        public bool $readonly = false,
        public ?string $error = null,
        public ?string $modelName = null,
        public ?string $helperText = null,
        public string $class = ''
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.flowbite.input');
    }
}
