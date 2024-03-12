<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class ShopCategoryComponent extends Component
{
    public function render()
    {
        $categories = Category::with('children')
            ->with('cparent')
            ->orderBy('name', 'asc')
            ->get();
        //dd($categories->cparent);
        return view('livewire.shop-category-component', compact('categories'));
    }

    public function sendId($id)
    {
        $this->dispatch('sendCatId', $id);
    }
}
