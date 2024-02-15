<?php

namespace App\Livewire;

use App\Models\Carousel;
use App\Models\Category;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $categories = Category::all();
        $carousels = Carousel::all();
        return view('livewire.home-component',
        [
            'categories' => $categories,
            'carousels' => $carousels,
        ]);
    }
}
