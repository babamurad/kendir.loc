<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Specification;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $id, $name, $sale_price, $slug;
    public $qty = 1;
    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        //dd($product->specification);
        return view('livewire.details-component', compact('product'))->layout('components.layouts.app');
    }
    public function mount($slug)
    {
        $this->product_id = $slug;
        $product = Product::where('slug', $this->slug)->first();
        $this->id = $product->id;
        $this->name = $product->name;
        $this->sale_price = $product->sale_price;
    }

    public function storeProduct($product_id, $product_name, $product_price)
    {
        //dd($this->qty);
        Cart::instance('cart')->add($product_id, $product_name, $this->qty, $product_price)->associate('App\Models\Product');
        session()->flash('success', 'Item added in Cart');
        $this->dispatch('addToCartDetails');
    }

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, $this->qty, $product_price)->associate('App\Models\Product');
        $this->dispatch('addToWishlistDetail');
    }

    public function removeWishlist($id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem)
        {
            if ($witem->id == $id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->dispatch('removeFromWishlistDetail');
                return;
            }
        }
    }
}
