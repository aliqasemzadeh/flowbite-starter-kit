<?php

namespace App\Livewire\Admin\User;

use LivewireUI\Modal\ModalComponent;

class Edit extends ModalComponent
{
    public function render()
    {
        return view('livewire.admin.user.edit');
    }
}
