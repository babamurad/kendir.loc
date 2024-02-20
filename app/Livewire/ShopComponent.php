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

    public $minPrice, $maxPrice;

    public $id, $name, $pqty = 1, $sale_price, $image;
    public $prodCount;
    public $active_id;

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
            $this->active_id = $this->category_id;
            $products = Product::where('category_id', $this->category_id)
                ->whereBetween('sale_price', [$this->minPrice, $this->maxPrice])
                ->orderBy('name', $this->sort)->paginate($this->perPage);
        } else {
            $products = Product::orderBy('name', $this->sort)
                ->whereBetween('sale_price', [$this->minPrice, $this->maxPrice])
                ->paginate($this->perPage);
        }

        $date = Carbon::now()->subDays(7);
        $newArrivals = Product::where('created_at', '>=', $date)->get();


        return view('livewire.shop-component', compact('categories', 'latestProducts', 'products', 'newArrivals'));
    }

    public function store($product_id, $product_name, $product_price)
    {
        //dd($this->pqty);
        $pqty = $this->pqty?$this->pqty:1;

        Cart::instance('cart')->add($product_id, $product_name, $pqty, $product_price)->associate('App\Models\Product');
        $this->pqty = 1;
        session()->flash('success', 'Item added in Cart');
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

    public function mount()
    {
        $this->prodCount = Product::count();
        $this->minPrice = DB::table('products')->min('sale_price');
        $this->maxPrice = DB::table('products')->max('sale_price');
    }

    public function selectCategory($id)
    {
        $this->category_id = $id;
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
