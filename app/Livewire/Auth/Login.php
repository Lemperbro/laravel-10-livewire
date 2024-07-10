<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Login extends Component
{
    #[Layout('components.layouts.auth')] 
    public function render()
    {
        return view('livewire.auth.login');
    }
}
