<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class CartMobileIconComponent extends Component
{
    #[On('addToCart')]
    #[On('incQty')]
    #[On('decQty')]
    #[On('delProd')]
    #[On('addToCartDetails')]
    public function render()
    {
        return view('livewire.cart-mobile-icon-component');
    }
}
