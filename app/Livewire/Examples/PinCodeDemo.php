<?php

namespace App\Livewire\Examples;

use Livewire\Component;

class PinCodeDemo extends Component
{
    public $pinCode = [];
    public $message = '';
    public $error = '';

    protected $rules = [
        'pinCode.*' => 'required|numeric',
    ];

    public function mount()
    {
        // Initialize the pin code array with empty values
        $this->pinCode = array_fill(0, 4, '');
    }

    public function validatePin()
    {
        $this->validate();

        // Join the pin code digits into a single string
        $pin = implode('', $this->pinCode);

        // Example validation - in a real app, you would validate against a stored value
        if ($pin === '1234') {
            $this->message = 'Pin code is valid!';
            $this->error = '';
        } else {
            $this->error = 'Invalid pin code. Please try again.';
            $this->message = '';
        }
    }

    public function render()
    {
        return view('livewire.examples.pin-code-demo');
    }
}
