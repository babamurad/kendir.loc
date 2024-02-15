<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminHeader extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-header')->layout('components.layouts.admin.app');
    }

    public function logout()
    {
        auth()->logout();
        session()->flash('error', 'You are logged out');
        $this->redirectRoute('home');
    }
}
