<?php

namespace App\Livewire;

use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class ContactComponent extends Component
{
    #[Validate('required|min:3')]
    public $name;
    #[Validate('required|email')]
    public $email;
    #[Validate('required|min:3')]
    public $subject;
    #[Validate('required|min:10')]
    public $message;
    #[Validate('required|min:10')]
    public $phone;



    public function render()
    {
        return view('livewire.contact-component');
    }

    public function resetFields()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->subject = '';
        $this->message = '';
    }

    public function sendMessage(): void
    {
        $headers ='From: admin@kendir.tm'. "\r\n";
        $message_text = '
        Dear '.$this->name.'!'. "\r\n" .
        'Thanks for your letter. I confirm that I have received it and will review its contents as soon as possible.
    Next, I will discuss this issue with my team to provide you with a comprehensive answer.
    If there are any urgent issues that need immediate attention, please let me know.
    Thank you for your attention.
    Sincerely, Administrator of kendir.tm';
        if (\mail($this->email, 'From Kendir.loc', $message_text, $headers))
        {
            $this->validate();
            $message = new Contact();
            $message->name = $this->name;
            $message->email = $this->email;
            $message->phone = $this->phone;
            $message->subject = $this->subject;
            $message->message = $this->message;
            $message->save();
            $this->resetFields();
            session()->flash('success', __('Your message successfully sent!'));
            $this->dispatch('message');
        } else {
            session()->flash('error', __('Check your email address.'));
        }


    }
}
