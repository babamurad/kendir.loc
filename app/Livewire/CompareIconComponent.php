<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class CompareIconComponent extends Component
{
    #[On('addToCompare')]
    #[On('removeCompare')]
    public function render()
    {
        return view('livewire.compare-icon-component');
    }
}
