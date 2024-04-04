<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class HeaderSearchComponent extends Component
{
    public function render()
    {
        $categories = Category::with('children')->get();
        return view('livewire.header-search-component', compact('categories'));
    }
}
