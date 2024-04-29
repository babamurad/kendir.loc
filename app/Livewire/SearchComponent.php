<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;

class SearchComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $perPage = 12;
    public $sort = 'ASC';
    public $category_id;

    public $minPrice, $maxPrice;

    public $id, $name, $pqty = 1, $sale_price, $image;

    public $searchTerm, $catId, $q;
    public $prodCount;

    public function render()
    {
        $name = 'name_' . session()->get('locale', default: 'ru');
        $selectedCat = Category::where('id', $this->catId)->first();
        $categories = Category::with('cparent')->with('products')->get();
        $latestProducts = Product::orderBy('id', 'desc')->limit(5)->get();
        $products_query = Product::query();


//        if (!empty($this->check_brands)) { $products_query->whereIn('brand_id', $this->check_brands); }
//        if (!empty($this->check_manufs)) { $products_query->whereIn('manufacturer_id', $this->check_manufs); }

        $products_query = Product::query()->active();
        if ($this->catId) { $products_query->whereIn('category_id', $this->catId); }
        if ($this->searchTerm) { $products_query->where($name, 'like', $this->searchTerm); }

        $products = $products_query

            ->orderBy($name, $this->sort)
            ->paginate($this->perPage);

//        $productsQuery = Product::query();
//
//        $productsQuery
//            ->join('specifications as s', 's.product_id', '=', 'products.id')
//            ->where('s.status', true);
//            if ($this->catId) { $productsQuery->whereIn('products.category_id', $this->catId); }
//            if ($this->searchTerm) { $productsQuery->where('products.name_ru', 'like', $this->searchTerm); }
//            $productsQuery->select('products.*')
//            ->get();
//        $products = $productsQuery;
//dd($products);
//        dd($products);
//        if ($this->catId){
//            if (!$this->searchTerm=='') {
//                $products = Product::
//                    with('specification')
//                    ->where('category_id', '=', $this->catId)
//                    ->where($name, 'like', $this->searchTerm)
//                    ->orderBy($name, $this->sort)
//                    ->paginate($this->perPage);
//            } else {
//                $products = Product::
//                    with('specification')
//                    ->where('category_id', '=', $this->catId)
//                    ->orderBy($name, $this->sort)
//                    ->paginate($this->perPage);
//            }
//        } else {
//            if (!$this->searchTerm==''){
//                $products = Product::where($name, 'like', $this->searchTerm)
//                    ->with('specification')
//                    ->orderBy($name, $this->sort)
//                    ->paginate($this->perPage);
//            } else {
//                $products = Product::
//                    with('specification')
//                    ->orderBy($name, $this->sort)
//                    ->paginate($this->perPage);
//            }
//        }

        $date = Carbon::now()->subDays(7);
        $newArrivals = Product::where('created_at', '>=', $date)->get();


        return view('livewire.search-component', compact('categories', 'latestProducts', 'products', 'newArrivals', 'selectedCat'));
    }

    public function mount()
    {
        $this->prodCount = Product::count();
        $this->fill(request()->only('q'));
        $this->searchTerm = '%' . $this->q . '%';
        //
        $this->fill(request()->only('catId'));

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

    public function selectCategory($id = '')
    {
        if ($id){
            $this->catId = $id;
        } else {
            $this->catId = '';
        }
        $this->searchTerm = '';
        //dd($this->catId);
        //redirect()->route('product.search');

    }

    public function allCategory()
    {
        $this->catId = '';
        $this->searchTerm = '';
        return redirect()->route('shop');
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
