<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserPasswordComponent extends Component
{
    #[Validate('required')]
    public $curpassword;
    #[Validate('required|min:6')]
    public $password;
//    #[Validate('required|min:6')]
    public $confirmed_password;

    public function render()
    {
        return view('livewire.user-password-component');
    }

    public function change()
    {
        $this->validate();

        if (Auth::check()){
            $user = User::find(auth()->user()->id);
            $user->password = $this->password;
            $user->update();
            redirect()->route('dashboard');
            session()->flash('success', __('Password changed.'));
        } else {
            session()->flash('error', __('Something went wrong.'));
        }
    }
}
