<?php

namespace App\Livewire\Admin;

use App\Models\Contact;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AdminArchiveMessageComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;

    #[On('ToArchive')]
    public function render()
    {
        $contacts = Contact::orderBy('id', 'desc')->where('arhiw', '=', 1) ->paginate($this->perPage);
        return view('livewire.admin.admin-archive-message-component', compact('contacts'))
            ->layout('components.layouts.admin.app');
    }
}
