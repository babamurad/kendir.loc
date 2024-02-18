<?php

namespace App\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Attributes\On;
use Livewire\Component;

class CartIconComponent extends Component
{
    #[On('addToCart')]
    #[On('incQty')]
    #[On('decQty')]
    #[On('delProd')]
    public function render()
    {
        return view('livewire.cart-icon-component');
    }

    public function destroy($id)
    {
        Cart::instance('cart')->remove($id);
    }
}
