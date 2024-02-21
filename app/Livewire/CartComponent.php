<?php

namespace App\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
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
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->dispatch('incQty');
    }

    public function decreaseQty($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->dispatch('decQty');
    }

    public function destroy($id)
    {
        Cart::instance('cart')->remove($id);
        $this->dispatch('delProd');
    }

    public function checkout()
    {
        //dd('checkout');
        if (Auth::check()) {
            return redirect()->route('checkout');
        } else {
            return redirect()->route('register');
        }
    }
}
