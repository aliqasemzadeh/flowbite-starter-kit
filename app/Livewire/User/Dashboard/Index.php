<?php

namespace App\Livewire\User\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('components.layouts.panel')]
    public function render()
    {
        return view('livewire.user.dashboard.index');
    }
}
