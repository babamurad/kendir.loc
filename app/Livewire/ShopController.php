<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class ShopController extends Component
{
    public function render()
    {
        $cat_count =Category::find(36);
            dd($cat_count->products->count());

        $categories =
            Category::with('cparent')->with('products')->get();
                //->where('name', 'like', '%'.$this->search.'%')
//                ->orderBy('id', 'desc')
//                ->paginate($this->perPage);
        return view('livewire.shop-controller', compact('categories'));
    }
}
