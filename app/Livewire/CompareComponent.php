<?php

namespace App\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CompareComponent extends Component
{
    public function render()
    {

        return view('livewire.compare-component');
    }

    public function addToCart($product_id, $product_name, $product_price)
    {
        //dd($product_price);
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success', 'The product has been added to the cart');
        $this->dispatch('addToCart');
    }

    public function removeCompare($id)
    {
        foreach (Cart::instance('compare')->content() as $witem)
        {
            if ($witem->id == $id)
            {
                Cart::instance('compare')->remove($witem->rowId);
                $this->dispatch('removeCompare');
                return;
            }
        }
    }

    public function destroy($id)
    {
        Cart::instance('cart')->remove($id);
        $this->dispatch('delProd');
    }
}
