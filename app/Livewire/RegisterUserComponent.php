<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegisterUserComponent extends Component
{
    public $email, $password;
    #[Validate('required|min:3|max:50')]
    public $rname;
    #[Validate('required|email')]
    public $remail;
    #[Validate('required|min:6')]
    public $rpassword;

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
        $this->validate();
        $user = new User();
        $user->name = $this->rname;
        $user->email = $this->remail;
        $user->password = $this->rpassword;
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
