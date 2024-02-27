<?php

namespace App\Livewire;

use Livewire\Component;

class PostDetailComponent extends Component
{
    public $id;
    public function render()
    {
        return view('livewire.post-detail-component');
    }

    public function mount($id)
    {
       $this->id = $id;
    }
}
