<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Post;
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
    public $category_id = [];

    public $minPrice, $maxPrice;

    public $id, $name, $pqty = 1, $sale_price, $image, $sslug;
    public $prodCount;
    public $active_id, $active_cat;
    public $collapce = 0;
    public $cat_name;
    public $prCount;
    public $check_brands = [];
    public $check_manufs = [];
    public $openClass = 'filter-categories-alt__item--open';
    public $catParent;

    #[On('selectBrand')]
    #[On('selectManuf')]
    #[On('resetAll')]
    public function render()
    {
        //->whereBetween('sale_price', [$this->minPrice, $this->maxPrice])
        $name = 'name_' . Session::get('locale');
        $categories = Category::with('cparent')->with('products')->get();
        $this->prCount = Product::all()->count();
        $latestProducts = Product::orderBy('id', 'desc')->limit(5)->get();

        $products_query = Product::query();

        if ($this->category_id) { $products_query->whereIn('category_id', $this->category_id); }
        if (!empty($this->check_brands)) { $products_query->whereIn('brand_id', $this->check_brands); }
        if (!empty($this->check_manufs)) { $products_query->whereIn('manufacturer_id', $this->check_manufs); }

        $products = $products_query
            ->with('specification')
            ->with('brands')
            ->with('manufacturers')
            ->orderBy($name, $this->sort)
            ->paginate($this->perPage);


        $date = Carbon::now()->subDays(7);
        $newArrivals = Product::where('created_at', '>=', $date)->get();

        $rcategories = Category::with('children')->where('parent_id', '=', '0')->get();
        $brands = Brand::with('products')->get();
        $manufacturers = Manufacturer::with('products')->get();

        $post = Post::first();

        return view('livewire.shop-component',
            compact('categories', 'latestProducts', 'products', 'newArrivals', 'rcategories', 'brands', 'manufacturers', 'post'));
    }

    public function mount($id = null)
    {
        if ($id != null) {
            $cats = Category::where('parent_id', '=', $id)->pluck('id', 'parent_id');

            if ($cats->count() > 0) {
                foreach ($cats as $cat) {
                    $param[] = explode(',', $cat);

                }
            } else {
                $param[] = explode(',', $id);
                $this->catParent = $id;
            }
            $this->category_id = $param;
            $this->catParent = Category::where('id', '=', $id)->pluck('parent_id')->toArray();
            //dd(Category::where('id', '=', $id)->pluck('parent_id'));

        } else {
            $this->category_id = null;
            $this->catParent[] = 0;
        }

        $this->prodCount = Product::count();

//        $this->minPrice = DB::table('products')->min('sale_price');
//        $this->maxPrice = DB::table('products')->max('sale_price');
    }

    public function getCategoryProducts($category_id)
    {
        $cat = Category::findOrFail($category_id);
        //dd($cat);
        $this->cat_name = $cat->name;

        $this->category_id[] = $cat->id;
        $this->prodCount = Product::count();
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

    public function store($product_id, $product_name, $product_price)
    {
        $pqty = $this->pqty ? $this->pqty : 1;
        Cart::instance('cart')->add($product_id, $product_name, $pqty, $product_price)->associate('App\Models\Product');
        $this->pqty = 1;
        session()->flash('success', __('The product has been added to the cart'));
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
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if ($witem->id == $id) {
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
        foreach (Cart::instance('compare')->content() as $witem) {
            if ($witem->id == $id) {
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
        dd($this->category_id);
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
        $this->sslug = $product->slug;
        //dd($this->sslug);
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
