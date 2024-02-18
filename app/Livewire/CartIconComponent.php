<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class CartIconComponent extends Component
{
    #[On('addToCart')]
    public function render()
    {
        return view('livewire.cart-icon-component');
    }
}
