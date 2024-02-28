<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegisterUserComponent extends Component
{
    //#[Validate('required|min:3|max:255')]
    public $name;
    //#[Validate('required|email')]
    public $email;
    //#[Validate('required|min:6')]
    public $password;

    public function login()
    {
        $user = $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (Auth::attempt($user))
        {
            Auth::user($user);
            $this->redirectRoute('home');
            session()->flash('success', __('You are logged in'));
        } else {
            session()->flash('error', __('The username or password is incorrect '));
        }


    }

    public function registerUser()
    {
        $this->validate([
            'name' => 'required|max:200',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->save();

        session()->flash('success', 'Successful registration');
        Auth::login($user);

        $this->redirectRoute('home');
    }

    public function render()
    {
        return view('livewire.register-user-component');
    }
}
