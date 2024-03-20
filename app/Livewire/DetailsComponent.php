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
        $product = Product::with('specification')
            ->with('brands')
            ->with('manufacturers')
            ->where('slug', $this->slug)->first();
        $products = Product::with('specification')->where('category_id', '=', $product->category_id)->get();
        //dd($product->manufacturers);
        return view('livewire.details-component', compact('product', 'products'))->layout('components.layouts.app');
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
//        $yes = 0;
//        foreach (Cart::instance('wishlist')->content() as $witem) {
//            if ($witem->id == $product_id) {
//                Cart::instance('wishlist')->remove($witem->rowId);
//                $this->dispatch('removeFromWishlist');
//                $yes = 1;
//                exit();
//            } else {
//                $yes = 0;
//            }
//        }
        //if (!$yes)
        {
            Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        }

       $this->dispatch('addToWishlist');
    }


    public function removeWishlist($id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem)
        {
            if ($witem->id == $id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->dispatch('removeFromWishlist');
                return;
            }
        }
    }

    public function addToCompare($product_id, $product_name, $product_price)
    {
        $prod = Product::with('specification')->find($product_id);
        //dd($prod->SKU);
        Cart::instance('compare')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        $this->dispatch('addToCompare');
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

}
