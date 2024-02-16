<?php

namespace App\Livewire\Admin;

use App\Models\Product;
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
    public $del_name, $del_id;

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

    public function render()
    {
        $products = Product::
            where('name', 'LIKE', '%'.$this->search.'%')
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->perPage);
        return view('livewire.admin.product-component',
            compact('products'))
            ->layout('components.layouts.admin.app');
    }
}
