<?php

namespace App\Livewire;

use App\Models\PasswordResetToken;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Livewire\Component;

class ForgotPasswordComponent extends Component
{
    public $email;
    public function render()
    {
        return view('livewire.forgot-password-component');
    }

    public function sendPasswordResetLink()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $this->email)->first();
        $token = Password::broker()->createToken($user);
        $url = route('password.reset', ['token' => $token, 'email' => $this->email]);
        $headers ='From: admin@kendir.com.tm'. "\r\n";
        $message_text = '
        Dear '.$user->name.'!'. "\r\n" .
            'Link to reset password:'.$url. "\r\n" .
            'Sincerely, Administrator of kendir.tm';

        if ($user){
            if (\mail($this->email, 'From Kendir.com.tm', $message_text, $headers)){
//                $reset_token = PasswordResetToken::where('email', '=', $this->email)->fist();
//                $reset_token->token = $token;
//                $reset_token->updated_at = Carbon::now();
//                $reset_token->save();
                redirect()->back()->with('success', __('Password reset email has been sent.'));
            }

        } else {
            session()->flash('error', __('A user with this email was not found.'));
        }
    }

}
