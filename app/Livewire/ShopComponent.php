<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShopComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $perPage = 12;
    public $sort = 'ASC';
    public $category_id;
    public $min_price, $max_price;
    public $minPrice, $maxPrice;

    public $name, $sale_price, $image;

    public function render()
    {
//        $cat_count =Category::find(36);
//        dd($cat_count->products->count());
        //->where('name', 'like', '%'.$this->search.'%')
//                ->orderBy('id', 'desc')
//                ->paginate($this->perPage);
        $categories = Category::with('cparent')->with('products')->get();
        $latestProducts = Product::orderBy('id', 'desc')->limit(5)->get();
        if ($this->category_id){
            $products = Product::where('category_id', $this->category_id)->orderBy('name', $this->sort)->paginate($this->perPage);
        } else {
            $products = Product::orderBy('name', $this->sort)->paginate($this->perPage);
        }

        $date = Carbon::now()->subDays(7);
        $newArrivals = Product::where('created_at', '>=', $date)->get();


        return view('livewire.shop-component', compact('categories', 'latestProducts', 'products', 'newArrivals'));
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success', 'Item added in Cart');
        $this->dispatch('addToCart');
        return redirect()->back();
    }

    public function mount()
    {
        $this->minPrice = DB::table('products')->min('sale_price');
        $this->maxPrice = DB::table('products')->max('sale_price');
    }

    public function selectCategory($id)
    {
        $this->category_id = $id;
    }

    public function productDetails($id)
    {
        $product = Product::find($id);
        $this->name = $product->name;
        $this->image = $product->image;
        $this->sale_price = $product->sale_price;
    }
}
