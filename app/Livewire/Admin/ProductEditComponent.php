<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductEditComponent extends Component
{
    use WithFileUploads;
    public $name, $product_id;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status = 'instock';
    public $featured = 0;
    public $quantity;
    public $image, $newimage;
    public $category_id;
    public $images, $newimages;
    public function toProductsLis()
    {
        return redirect()->route('admin.products');
    }

    public function subBack()
    {
        $this->updateProduct();
        return redirect()->route('admin.products');
    }
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }
    public function updateProduct()
    {
        $this->validate([
            'name'              => 'required',
            'slug'              => 'required',
            'short_description' => 'required',
            'description'       => 'required',
            'regular_price'     => 'required|numeric',
            'sale_price'        => 'numeric',
            'sku'               => 'required',
            'stock_status'      => 'required',
            'featured'          => 'required',
            'quantity'          => 'required|numeric',
            'image'             => 'required',
            'images'            => 'required',
            'category_id'       => 'required',
        ]);

        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->sku = $this->sku;
        //dd($product->sku);
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;

        if ($this->newimage){
            unlink('images/products/'.$product->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('products', $imageName);
            $product->image = $imageName;
        }

        if ($this->newimages)
        {
            if ($product->images)
            {
                $images = explode(',', $product->images);
                foreach ($images as $image)
                {
                    if ($image)
                    {
                        unlink('images/products/'.$product->image);
                    }
                }
            }
            //***
            $imagesName = '';
//            dd($this->newimages);
            foreach ($this->newimages as $key=>$image)
            {
                $imageName = Carbon::now()->timestamp . $key . '.' . $image->extension();
                $image->storeAs('products', $imageName);
                if ($imagesName == '')
                {
                    $imagesName = $imageName;
                } else { $imagesName =$imagesName.','. $imageName; }

            }
            $product->images = $imagesName;
        }
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('success', 'Product has been updated!');

    }
    public function mount($product_id)
    {
        $product = Product::findOrFail($product_id);
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;
        $this->description = $product->description;
        $this->regular_price = $product->regular_price;
        $this->sale_price = $product->sale_price;//dd($product->sku);
        $this->sku = $product->sku;
        $this->stock_status = $product->stock_status;
        $this->featured = $product->featured;
        $this->quantity = $product->quantity;
        $this->image = $product->image;
        $this->images = explode(',', $product->images);
        $this->category_id = $product->category_id;
    }

    public function render()
    {
        return view('livewire.admin.product-edit-component')->layout('components.layouts.admin.app');
    }
}
