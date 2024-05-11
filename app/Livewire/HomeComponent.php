<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class HomeComponent extends Component
{
    public $category_id;
    protected $paginationTheme = 'bootstrap';
    public $id, $name, $pqty = 1, $qty, $sale_price, $image;

    #[On('locale')]
    public function render()
    {
        //вывести товары недельной давности
        //->whereDate('created_at', Carbon::now()->subDays(7))->get();
        //$latestProducts = Product::orderBy('id', "DESC")->limit(9)->get();
        //********

        $categories = Category::with('cparent', 'children' )->get();
        //dd($categories->count());
        $rcategories = Category::with('children')->where('parent_id', '=', '0')->get();
        //dd($categories->count());
        $carousels = Carousel::orderBy('id', 'DESC')->get();

        $products = Product::active()->get();
        //dd($products->count());
        $brands = Brand::all();
        $date = Carbon::now()->subDays(7);
        $newArrivals = Product::active()->where('created_at', '>=', $date)->get();
        //$blya = 'Blyat suka blyat nahuy';
        $posts = Post::orderBy('id', 'desc')->get();
        return view('livewire.home-component',
            compact('categories', 'carousels', 'products', 'newArrivals', 'rcategories', 'posts', 'brands')

        )->layout('components.layouts.app', ['rcategories' => $rcategories]);
    }

    public function store($product_id, $product_name, $product_price)
    {
        //dd($this->pqty);
        $pqty = $this->pqty?$this->pqty:1;

        Cart::instance('cart')->add($product_id, $product_name, $pqty, $product_price)->associate('App\Models\Product');
        $this->pqty = 1;
        session()->flash('success', 'The product has been added to the cart');
        $this->dispatch('addToCart');
        return redirect()->back();
    }

    public function toShop ()
    {
        return $this->redirect('/shop', navigate: true);
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
}
