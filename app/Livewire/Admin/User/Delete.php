<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    public User $user;
    public $userId;
    public $password = '';

    protected $rules = [
        'password' => ['required', 'current_password'],
    ];

    public function mount($userId)
    {
        $this->userId = $userId;
        $this->user = User::findOrFail($userId);
    }

    public function delete()
    {
        $this->validate();

        $this->user->delete();
        $this->dispatch('userDeleted');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.user.delete');
    }
}
