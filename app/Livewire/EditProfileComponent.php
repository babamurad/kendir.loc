<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class EditProfileComponent extends Component
{
    #[Validate('required|min:3|max:255')]
    public $name;
    #[Validate('required|email')]
    public $email;
    public function render()
    {
        return view('livewire.edit-profile-component');
    }

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
    }

    public function save()
    {
        $this->validate();

        $id = auth()->user()->id;
        $user = \App\Models\User::findOrFail($id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->update();
        redirect()->route('dashboard');
        session()->flash('success', __('Name and email updated.'));
    }
}
