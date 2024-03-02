<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;

class CategoryComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $perPage = 12;
    public $sort = 'ASC';
    public $category_id;
    public $min_price, $max_price;
    public $minPrice, $maxPrice;
    public $slug;
    public $prodCount;

    public $id, $name, $pqty = 1, $sale_price, $image;

    public function render()
    {
        $categories = Category::with('cparent')->with('products')->get();
        $latestProducts = Product::orderBy('id', 'desc')->limit(5)->get();

        $category = Category::where('slug', $this->slug)->first();
        //dd($category);
        $category_id = $category->id;
        $products = Product::where('category_id', $category_id)->orderBy('name', $this->sort)->paginate($this->perPage);

        $date = Carbon::now()->subDays(7);
        $newArrivals = Product::where('created_at', '>=', $date)->get();


        return view('livewire.category-component', compact('categories', 'latestProducts', 'products', 'newArrivals'));
    }

    public function store($product_id, $product_name, $product_price)
    {
        //dd($this->pqty);
        $pqty = $this->pqty?$this->pqty:1;

        Cart::add($product_id, $product_name, $pqty, $product_price)->associate('App\Models\Product');
        $this->pqty = 1;
        session()->flash('success', 'Item added in Cart');
        $this->dispatch('addToCart');
        return redirect()->back();
    }

    public function mount($slug = '')
    {
        if ($slug){
            $this->slug = $slug;
        } else {
            $category = Category::first();
            $this->slug = $category->slug;
        }
        $this->prodCount = Product::count();
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
        $this->id = $product->id;
        $this->name = $product->name;
        $this->qty = $product->qty;
        $this->image = $product->image;
        $this->sale_price = $product->sale_price;
    }

    public function qtyInc()
    {
        ++$this->pqty;
    }

    public function qtyDec()
    {
        --$this->pqty;
    }
}
