<?php

namespace App\Livewire;

use App\Models\About;
use Livewire\Component;

class ReturnComponent extends Component
{
    public function render()
    {
        $return = About::findOrFail(2);
        return view('livewire.return-component', compact('return'));
    }
}
