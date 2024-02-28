<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserComponent extends Component
{

    public $name;
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function login()
    {
       $user = $this->validate();
       if (Auth::attempt($user))
       {
           Auth::user($user);
           session()->flash('success', __('You are logged in'));
       } else {
           session()->flash('error', __('The username or password is incorrect '));
       }
    }

    public function logout()
    {
        auth()->logout();
        session()->flash('error', 'You are logged out');
        $this->redirectRoute('home');
    }

    public function render()
    {
        return view('livewire.user-component');
    }
}
