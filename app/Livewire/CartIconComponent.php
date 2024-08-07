<?php

namespace App\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class CartIconComponent extends Component
{
    #[On('addToCart')]
    #[On('incQty')]
    #[On('decQty')]
    #[On('delProd')]
    #[On('addToCartDetails')]
    public function render()
    {
        return view('livewire.cart-icon-component');
    }

    public function destroy($id)
    {
        Cart::instance('cart')->remove($id);
    }

    public function checkout()
    {
        return redirect()->route('checkout');
        // if (Auth::check()) {
        //     return redirect()->route('checkout');
        // } else {
        //     return redirect()->route('register');
        // }
    }
}
