<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Manufacturer;
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

    public $minPrice, $maxPrice;

    public $id, $name, $pqty = 1, $sale_price, $image;
    public $prodCount;
    public $active_id, $active_cat;
    public $collapce = 0;
    public $cat_name;

    public function render()
    {
        $categories = Category::with('cparent')->with('products')->get();
        $latestProducts = Product::orderBy('id', 'desc')->limit(5)->get();
        if ($this->category_id){
            $this->active_id = $this->category_id;
            $products = Product::with('specification')
                ->with('brands')
                ->with('manufacturers')
                ->where('category_id', '=', $this->category_id)
                //->whereBetween('sale_price', [$this->minPrice, $this->maxPrice])
                ->orderBy('name', $this->sort)->paginate($this->perPage);
            //dd($products);
        } else {
            $products = Product::with('specification')->orderBy('name', $this->sort)
                ->whereBetween('sale_price', [$this->minPrice, $this->maxPrice])
                ->paginate($this->perPage);
        }

        $date = Carbon::now()->subDays(7);
        $newArrivals = Product::where('created_at', '>=', $date)->get();

        $rcategories = Category::with('children')->where('parent_id', '=', '0')->get();
        $brands = Brand::with('products')->get();
        $manufacturers = Manufacturer::with('products')->get();

        return view('livewire.shop-component',
            compact('categories', 'latestProducts', 'products', 'newArrivals', 'rcategories', 'brands', 'manufacturers'));
    }

    public function getCategoryProducts($category_id)
    {
        $cat = Category::findOrFail($category_id);
        $this->cat_name = $cat->name;
        $this->category_id = $cat->id;
        //dd($this->cat_name);
    }

    public function store($product_id, $product_name, $product_price)
    {
        $pqty = $this->pqty?$this->pqty:1;
        Cart::instance('cart')->add($product_id, $product_name, $pqty, $product_price)->associate('App\Models\Product');
        $this->pqty = 1;
        session()->flash('success', 'The product has been added to the cart');
        $this->dispatch('addToCart');
        return redirect()->back();
    }

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        $this->dispatch('addToWishlist');
    }

    public function removeWishlist($id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem)
        {
            if ($witem->id == $id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->dispatch('removeFromWishlist');
                return;
            }
        }
    }

    public function mount($id = null)
    {
        $this->category_id = $id;

        $this->prodCount = Product::count();
        $this->minPrice = DB::table('products')->min('sale_price');
        $this->maxPrice = DB::table('products')->max('sale_price');
    }

    public function selectCategory($id)
    {
        $this->category_id = $id;
        $cat = Category::where('id', '=', $this->category_id)->first();
        $this->cat_name = $cat->name;
        $this->active_id = $cat->id;

    }

    public function allCategory()
    {
        $this->category_id = '';
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

    public function qtyInc()
    {
        ++$this->pqty;
    }

    public function qtyDec()
    {
        --$this->pqty;
    }
}
