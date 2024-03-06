<?php

namespace App\Livewire;

use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;

class CategoryProductsComponent extends Component
{
    public $category_id;
    public $id, $name, $pqty = 1, $sale_price, $image;

    public function render()
    {
        $products = Product::with('category')->paginate(8);
        $date = Carbon::now()->subDays(7);
        $newArrivals = Product::where('created_at', '>=', $date)->get();
        return view('livewire.category-products-component', compact('products', 'newArrivals'));
    }

    public function mount($category_id)
    {
        //dd($category_id);
        if ($category_id){
            $this->category_id = $category_id;
        } else {
            $this->category_id = 4;
        }

    }
}
