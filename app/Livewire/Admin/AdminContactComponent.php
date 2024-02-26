<?php

namespace App\Livewire\Admin;

use App\Models\Contact;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AdminContactComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;

    #[On('message')]
    public function render()
    {
        $contacts = Contact::orderBy('id', 'desc')->where('arhiw', '=', 0) ->paginate($this->perPage);
        return view('livewire.admin.admin-contact-component', compact('contacts'))
            ->layout('components.layouts.admin.app');
    }
}
