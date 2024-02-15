<?php

namespace App\Livewire;

use App\Models\Carousel;
use App\Models\Category;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        $carousels = Carousel::orderBy('id', 'DESC')->get();
        return view('livewire.home-component',
        compact('categories', 'carousels')

        );
    }
}
