<?php

namespace App\Livewire\User\Settings;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Profile extends Component
{
    #[Layout('components.layouts.panel')]
    public function render()
    {
        return view('livewire.user.settings.profile');
    }
}
