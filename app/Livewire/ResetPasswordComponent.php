<?php

namespace App\Livewire;

use App\Models\PasswordResetToken;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Livewire\Component;
use Psy\Util\Str;

class ResetPasswordComponent extends Component
{
    public $token;
    public $email;
    public $password, $password_confirmation;

    public function render()
    {
        return view('livewire.reset-password-component');
    }

    public function mount($token = null, $email = null)
    {
        $this->token = $token;
        $this->email = $email;
        //dd($this->email . '----' . $this->token);
    }

    public function resetPass()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'
        ]);

        $status = Password::reset(
            $this->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return redirect('register')->with('success', __('Password reset successful!'));
        }

        session()->flash('error', trans($status));
        return redirect()->back();

    }
}
