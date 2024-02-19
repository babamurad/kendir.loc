<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $slug;
    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        //dd($product->images);
        return view('livewire.details-component', compact('product'));
    }

    public function mount($slug)
    {

        $this->product_id = $slug;
        //dd($this->product_id);
    }
}
