<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Component;
use WireUi\Traits\WireUiActions;

class ForgetPassword extends Component
{
    use WireUiActions;
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        Password::sendResetLink($this->only('email'));

        $this->notification()->send([
            'icon' => 'info',
            'title' => __('Password Reset'),
            'description' => __('A reset link will be sent if the account exists.'),
        ]);

    }

    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.auth.forget-password');
    }
}
