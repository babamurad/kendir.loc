<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MobileLogoutComponent extends Component
{
    public function render()
    {
        return view('livewire.mobile-logout-component');
    }

    public function logout()
    {
        Auth::logout();
        session()->flash('error', __('You are logged out'));
        return redirect()->route('register');
    }
}
