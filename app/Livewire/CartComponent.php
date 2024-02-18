<?php

namespace App\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Attributes\On;
use Livewire\Component;

class CartComponent extends Component
{
    public function render()
    {
        return view('livewire.cart-component');
    }

    public function increaseQty($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
        $this->dispatch('incQty');
    }

    public function decreaseQty($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
        $this->dispatch('decQty');
    }

    public function destroy($id)
    {
        Cart::remove($id);
        $this->dispatch('delProd');
    }
}
