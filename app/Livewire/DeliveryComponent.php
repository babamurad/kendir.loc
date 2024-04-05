<?php

namespace App\Livewire;

use App\Models\About;
use Livewire\Component;

class DeliveryComponent extends Component
{
    public function render()
    {
        $delivery = About::findOrFail(3);
        return view('livewire.delivery-component', compact('delivery'));
    }
}
