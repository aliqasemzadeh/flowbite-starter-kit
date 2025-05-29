<?php

namespace App\Livewire\User\Settings;

use App\Livewire\Auth\Logout;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Component;
use WireUi\Traits\WireUiActions;

class Profile extends Component
{
    use WireUiActions;
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public string $password = '';

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $this->first_name = Auth::user()->first_name;
        $this->last_name = Auth::user()->last_name;
        $this->email = Auth::user()->email;
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateProfileInformation(): void
    {
        $user = Auth::user();

        $validated = $this->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],

            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($user->id)
            ],
        ]);

        $user->fill($validated);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        $this->notification()->send([
            'icon' => 'info',
            'title' => __('kit.system_message'),
            'description' => __('kit.saved'),
        ]);
    }

    /**
     * Send an email verification notification to the current user.
     */
    public function resendVerificationNotification(): void
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('user.dashboard.index', absolute: false));

            return;
        }

        $user->sendEmailVerificationNotification();

        $this->notification()->send([
            'icon' => 'info',
            'title' => __('Verification Email Sent'),
            'description' => __('A new verification link has been sent to the email address you provided during registration.'),
        ]);
    }

    public function closeDialog(): void
    {
        $this->reset('password');
        $this->dialog()->close();
    }

    public function deleteUser(Logout $logout): void
    {
        $this->validate([
            'password' => ['required', 'string', 'current_password'],
        ]);

        tap(Auth::user(), $logout(...))->delete();

        $this->redirect('/', navigate: false);
    }

    #[Layout('components.layouts.panel')]
    public function render()
    {
        return view('livewire.user.settings.profile');
    }
}
