<?php

namespace App\Livewire;

use App\Models\Carousel;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;

class HomeComponent extends Component
{
    public $category_id;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        //вывести товары недельной давности
        //->whereDate('created_at', Carbon::now()->subDays(7))->get();
        //$latestProducts = Product::orderBy('id', "DESC")->limit(9)->get();
        //********

        $categories = Category::orderBy('id', 'DESC')->get();
        $carousels = Carousel::orderBy('id', 'DESC')->get();

        $products = Product::all();

        $date = Carbon::now()->subDays(7);
        $newArrivals = Product::where('created_at', '>=', $date)->get();

        return view('livewire.home-component',
            compact('categories', 'carousels', 'products', 'newArrivals')

        );
    }
}
