<?php

namespace App\View\Components\Flowbite;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PinCode extends Component
{
    /**
     * Create a new component instance.
     *
     * @param int $digits Number of digits in the pin code
     * @param string|null $error Validation error message
     * @param string|null $helper Helper text
     * @param string|null $wireModel Livewire wire:model attribute
     */
    public function __construct(
        public int $digits = 6,
        public ?string $error = null,
        public ?string $helper = null,
        public ?string $wireModel = null
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.flowbite.pin-code');
    }

    /**
     * Get the ordinal representation of a number (1st, 2nd, 3rd, etc.)
     *
     * @param int $number
     * @return string
     */
    public function getOrdinal(int $number): string
    {
        $suffixes = ['th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th'];

        if (($number % 100) >= 11 && ($number % 100) <= 13) {
            return $number . 'th';
        }

        return $number . $suffixes[$number % 10];
    }
}
