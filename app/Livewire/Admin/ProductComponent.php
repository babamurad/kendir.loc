<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use App\Models\Specification;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ProductComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    public $search = '';
    public $us_count;
    public $sortBy = 'created_at';
    public $sortDirection = 'DESC';
    public $sortIcon = '<i class="fas fa-sort ml-1"></i>';

    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status = 'instock';
    public $featured = 0;
    public $quantity;
    public $image;
    public $category_id;
    public $images;
    public $del_name, $del_id, $spec_id;

    public function deleteId($id)
    {
        $product = Product::findOrFail($id);
        $this->del_id = $product->id;
        $this->del_name = $product->name;
    }
    public function deleteProduct()
    {
        $product = Product::find($this->del_id);
        $product->delete();

        $this->dispatch('closeDeleteProductModal');
        session()->flash('error', __('Product has been deleted!'));
    }

    public function mount()
    {
        $this->category_id = session()->get('category', default: '');
    }

    public function updatedСategory_id()
    {
        dd('cat');
        session()->put('category', $this->category_id);
        dd(session()->get('category', default: ''));
    }

    public function render()
    {
        $pcount = Product::all();
        $categories = Category::with('children', 'products')->get();

        $name = 'name_' . session()->get('locale');

        if ($this->category_id){
            $products = Product::
            where($name, 'LIKE', '%'.$this->search.'%')
                ->with('category')
                ->where('category_id', '=', $this->category_id)
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            $catc = Product::where('category_id', '=', $this->category_id)->count();
        } else {
            $products = Product::
            where($name, 'LIKE', '%'.$this->search.'%')
                ->with('category')
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            $catc = Product::count();
        }

        return view('livewire.admin.product-component',
            compact('products', 'pcount', 'categories', 'catc'))
            ->layout('components.layouts.admin.app');
    }
}
