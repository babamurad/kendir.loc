<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryDetailsComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $perPage = 12;
    public $slug;
    public $sort = 'ASC';
    public $active_id;

    public $id, $name, $pqty = 1, $sale_price, $image;

    public function render()
    {
        $latestProducts = Product::orderBy('id', 'desc')->limit(5)->get();
        $products = Product::where('id', $this->active_id)->orderBy('name', $this->sort)->paginate($this->perPage);
        $date = Carbon::now()->subDays(7);
        $newArrivals = Product::where('created_at', '>=', $date)->get();
        //dd($products);
        $category = Category::with('products')->where('slug', $this->slug)->first();
        $ccount = Product::all();
        return view('livewire.category-details-component', compact('latestProducts', 'products', 'category', 'ccount', 'newArrivals'));
    }

    public function mount($slug)
    {
        $this->slug = $slug;
        $cat = Category::where('slug', $this->slug)->first();

        $this->active_id = $cat->id;
    }

    public function productDetails($id)
    {
        $product = Product::find($id);
        $this->id = $product->id;
        $this->name = $product->name;
        //$this->qty = $product->qty;
        $this->image = $product->image;
        $this->sale_price = $product->sale_price;
    }
}
