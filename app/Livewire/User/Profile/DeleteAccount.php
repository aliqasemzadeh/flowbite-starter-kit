<?php

namespace App\Livewire\User\Profile;

use App\Livewire\Auth\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DeleteAccount extends Component
{
    public string $password = '';

    /**
     * Delete the currently authenticated user.
     */
    public function deleteUser(Logout $logout): void
    {
        $this->validate([
            'password' => ['required', 'string', 'current_password'],
        ]);

        tap(Auth::user(), $logout(...))->delete();

        $this->redirect('/', navigate: true);
    }

    public function render()
    {
        return view('livewire.user.profile.delete-account');
    }
}
