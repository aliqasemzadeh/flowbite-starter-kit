<?php

namespace App\View\Components\Flowbite;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FileInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $id = '',
        public string $name = '',
        public string $label = 'Upload file',
        public string $size = 'md',
        public bool $disabled = false,
        public bool $readonly = false,
        public ?string $error = null,
        public ?string $modelName = null,
        public ?string $helperText = null,
        public string $class = '',
        public bool $multiple = false,
        public string $accept = ''
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.flowbite.file-input');
    }
}
