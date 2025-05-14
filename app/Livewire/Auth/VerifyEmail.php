<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Component;
use WireUi\Traits\WireUiActions;

class VerifyEmail extends Component
{
    use WireUiActions;
    /**
     * Send an email verification notification to the user.
     */
    public function sendVerification(): void
    {
        if (Auth::user()->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('user.dashboard.index', absolute: false), navigate: false);

            return;
        }

        Auth::user()->sendEmailVerificationNotification();

        $this->notification()->send([
            'icon' => 'info',
            'title' => __('Verification Email Sent'),
            'description' => __('A new verification link has been sent to the email address you provided during registration.'),
        ]);
    }

    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: false);
    }

    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.auth.verify-email');
    }
}
