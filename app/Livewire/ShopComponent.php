<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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
    public $prCount;
    public $check_brands = [];
    public $check_manufs = [];

    #[On('selectBrand')]
    #[On('selectManuf')]
    public function render()
    {
        //->whereBetween('sale_price', [$this->minPrice, $this->maxPrice])
        $categories = Category::with('cparent')->with('products')->get();
        $this->prCount = Product::all()->count();
        $latestProducts = Product::orderBy('id', 'desc')->limit(5)->get();
// 1  0  0
        if ( $this->category_id && empty($this->check_brands) && empty($this->check_manufs) ){
            $this->active_id = $this->category_id;
            $products = Product::with('specification')
                ->with('brands')
                ->with('manufacturers')
                ->where('category_id', '=', $this->category_id)
                ->orderBy('name', $this->sort)
                ->paginate($this->perPage);
        } // 1 1 0
        elseif ($this->category_id && !empty($this->check_brands) && empty($this->check_manufs)) {
            $this->active_id = $this->category_id;
            $products = Product::with('specification')
                ->with('brands')
                ->with('manufacturers')
                ->where('category_id', '=', $this->category_id)
                ->whereIn('brand_id', $this->check_brands)
                ->orderBy('name', $this->sort)
                ->paginate($this->perPage);
        } // 1 1 1
        elseif ($this->category_id && !empty($this->check_brands) && !empty($this->check_manufs)){
            $this->active_id = $this->category_id;
            $products = Product::with('specification')
                ->with('brands')
                ->with('manufacturers')
                ->where('category_id', '=', $this->category_id)
                ->whereIn('brand_id', $this->check_brands)
                ->whereIn('manufacturer_id', $this->check_manufs)
                ->orderBy('name', $this->sort)
                ->paginate($this->perPage);
        }// 0 1 1
        elseif (!$this->category_id && !empty($this->check_brands) && !empty($this->check_manufs)){
            $this->active_id = $this->category_id;
            $products = Product::with('specification')
                ->with('brands')
                ->with('manufacturers')
                ->whereIn('brand_id', $this->check_brands)
                ->whereIn('manufacturer_id', $this->check_manufs)
                ->orderBy('name', $this->sort)
                ->paginate($this->perPage);
        }// 0 0 1
        elseif (!$this->category_id && empty($this->check_brands) && !empty($this->check_manufs)){
            $this->active_id = $this->category_id;
            $products = Product::with('specification')
                ->with('brands')
                ->with('manufacturers')
                ->whereIn('manufacturer_id', $this->check_manufs)
                ->orderBy('name', $this->sort)
                ->paginate($this->perPage);
        }// 1 0 1
        elseif ($this->category_id && empty($this->check_brands) && !empty($this->check_manufs)){
            $this->active_id = $this->category_id;
            $products = Product::with('specification')
                ->with('brands')
                ->with('manufacturers')
                ->where('category_id', '=', $this->category_id)
                ->whereIn('manufacturer_id', $this->check_manufs)
                ->orderBy('name', $this->sort)
                ->paginate($this->perPage);
        }// 0 1 0
        elseif (!$this->category_id && !empty($this->check_brands) && empty($this->check_manufs)){
            $this->active_id = $this->category_id;
            $products = Product::with('specification')
                ->with('brands')
                ->with('manufacturers')
                ->whereIn('brand_id', $this->check_brands)
                ->orderBy('name', $this->sort)
                ->paginate($this->perPage);
        }
        //0 0 0
        else {
            $products = Product::with('specification')
                ->with('brands')
                ->with('manufacturers')
                ->orderBy('name', $this->sort)
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

    public function mount($id = null)
    {
        $this->category_id = $id;

        $this->prodCount = Product::count();
        $this->minPrice = DB::table('products')->min('sale_price');
        $this->maxPrice = DB::table('products')->max('sale_price');
    }

    public function checkBrand($id)
    {
        if (!in_array($id, $this->check_brands)) {
            array_push($this->check_brands, $id);

        } else {
            foreach ($this->check_brands as $key => $value) {
                if ($value === $id) {
                    unset($this->check_brands[$key]);
                    break;
                }
            }
        }
        $this->dispatch('selectBrand');
    }

    public function checkManuf($id)
    {
        if (!in_array($id, $this->check_manufs)) {
            array_push($this->check_manufs, $id);

        } else {
            foreach ($this->check_manufs as $key => $value) {
                if ($value === $id) {
                    unset($this->check_manufs[$key]);
                    break;
                }
            }
        }
        $this->dispatch('selectManuf');
    }

    public function dbr()
    {
        dd($this->check_manufs);
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

    public function addToCompare($product_id, $product_name, $product_price)
    {
        $prod = Product::with('specification')->find($product_id);
        //dd($prod->SKU);
        Cart::instance('compare')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        $this->dispatch('addToCompare');
    }

    public function removeCompare($id)
    {
        foreach (Cart::instance('compare')->content() as $witem)
        {
            if ($witem->id == $id)
            {
                Cart::instance('compare')->remove($witem->rowId);
                $this->dispatch('removeCompare');
                return;
            }
        }
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
