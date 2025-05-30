<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    public User $user;
    public $userId;
    public $password = '';

    protected $rules = [
        'password' => 'required',
    ];

    public function mount($userId)
    {
        $this->userId = $userId;
        $this->user = User::findOrFail($userId);
    }

    public function delete()
    {
        $this->validate();

        // Check if the password matches the current user's password
        if (!Hash::check($this->password, Auth::user()->password)) {
            $this->addError('password', 'The password is incorrect.');
            return;
        }

        $this->user->delete();
        $this->dispatch('userDeleted');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.user.delete');
    }
}
