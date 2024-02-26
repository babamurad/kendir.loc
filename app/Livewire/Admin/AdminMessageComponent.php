<?php

namespace App\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;

class AdminMessageComponent extends Component
{
    public $id;
    public $name, $email, $phone, $subject, $message, $arhiw;

    public function render()
    {
        $message = Contact::findOrFail($this->id)->get();
        return view('livewire.admin.admin-message-component', compact('message'))
            ->layout('components.layouts.admin.app');
    }

    public function mount($id)
    {
        $this->id = $id;
        $mes = Contact::findOrfail($id);
        $this->name = $mes->name;
        $this->email = $mes->email;
        $this->phone = $mes->phone;
        $this->subject = $mes->subject;
        $this->message = $mes->message;
        $this->arhiw = $mes->arhiw;
    }

    public function toArchive()
    {
        $message = Contact::findOrFail($this->id);
        $message->arhiw = $this->arhiw;
        $message->update();
        $this->dispatch('ToArchive');
    }
}
