<?php

namespace App\Livewire\Admin;

use App\Models\Brand;
use App\Models\Carousel;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\Specification;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductEditComponent extends Component
{
    use WithFileUploads;
    public $name, $product_id;
    public $slug;
    public $name_en, $name_ru, $name_tm;
    public $short_description, $short_description_en, $short_description_ru, $short_description_tm;
    public $description, $description_en, $description_ru, $description_tm;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status = 'instock';
    public $featured = 0;
    public $quantity;
    public $image, $newimage;
    public $category_id;
    public $images, $newimages;
    public $activeTab;
    protected $messages = [
        'required' => 'заполните поле :attribute',
        'email'    => ':attribute должен быть корректным email адресом',
        'image'    => ':attribute должно быть изображение',
    ];
    public $brand_id, $manuf_id;

    public $model, $dl, $dw, $dh, $unit, $weight, $status, $type_roll, $dept, $diameter, $meter_int, $reinforcement_class, $articles;

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

    public function acTab($tabName)
    {
        $this->activeTab = $tabName;
    }

    public function updateProduct()
    {
        $this->validate([
            'slug'              => 'required',
            'short_description_en' => 'required',
            'description_en'       => 'required',
            'short_description_ru' => 'required',
            'description_ru'       => 'required',
            'short_description_tm' => 'required',
            'description_tm'       => 'required',
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
        $product->name_en = $this->name_en;
        $product->name_ru = $this->name_ru;
        $product->name_tm = $this->name_tm;
        $product->slug = $this->slug;
        $product->short_description_en = $this->short_description_en;
        $product->description_en = $this->description_en;
        $product->short_description_ru = $this->short_description_ru;
        $product->description_ru = $this->description_ru;
        $product->short_description_tm = $this->short_description_tm;
        $product->description_tm = $this->description_tm;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->sku = $this->sku;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;

        if ($this->newimage) {
            if (file_exists('images/products/' . $product->image)) {
                // Удалить файл
                unlink('images/products/' . $product->image);
            }
//dd('new Image???');
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('products', $imageName);
            $product->image = $imageName;
        }

        if ($this->newimages) {
            if ($product->images) {
                $images = explode(',', $product->images);
                foreach ($images as $image) {
                    if ($image) {
                        if (file_exists('images/products/' . $product->image)) {
                            // Удалить файл
                            unlink('images/products/' . $product->image);
                        }
                    }
                }
            }
            //***
            $imagesName = '';
            foreach ($this->newimages as $key => $image) {
                $imageName = Carbon::now()->timestamp . $key . '.' . $image->extension();
                $image->storeAs('products', $imageName);
                if ($imagesName == '') {
                    $imagesName = $imageName;
                } else {
                    $imagesName = $imagesName . ',' . $imageName;
                }
            }
            $product->images = $imagesName;
        }
        $this->reset('images');
        $product->category_id = $this->category_id;
        $product->brand_id = $this->brand_id;
        $product->manufacturer_id = $this->manuf_id;
        $product->update();

        $spec = Specification::where('product_id', '=', $this->product_id)->first();
        $spec->model = $this->model;
        $spec->dl = $this->dl?:0;
        $spec->dw = $this->dw?:0;
        $spec->dl = $this->dl?:0;
        $spec->dh = $this->dh?:0;
        $spec->unit = $this->unit;
        $spec->weight = $this->weight?:0;
        $spec->status = $this->status?:0;
        $spec->type_roll = $this->type_roll?:"Hot";
        $spec->dept = $this->dept;
        $spec->diameter = $this->diameter?:0;
        $spec->meter_int = $this->meter_int;
        $spec->articles = $this->articles;
        $spec->update();
        redirect()->route('admin.products');
        session()->flash('success', 'Product has been updated!');
    }

    public function mount($product_id)
    {

        $this->activeTab = 'details';

        $product = Product::find($product_id);
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->name_en = $product->name_en;
        $this->name_ru = $product->name_ru;
        $this->name_tm = $product->name_tm;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;
        $this->short_description_en = $product->short_description_en;
        $this->description = $product->description;
        $this->description_en = $product->description_en;
        $this->short_description_ru = $product->short_description_ru;
        $this->description_ru = $product->description_ru;
        $this->short_description_tm = $product->short_description_tm;
        $this->description_tm = $product->description_tm;
        $this->regular_price = $product->regular_price;
        $this->sale_price = $product->sale_price; //dd($product->sku);
        $this->sku = $product->SKU;
        $this->stock_status = $product->stock_status;
        $this->featured = $product->featured;
        $this->quantity = $product->quantity;
        $this->image = $product->image;
        $this->images = explode(',', $product->images);
        $this->category_id = $product->category_id;
        $this->brand_id = $product->brand_id;
        $this->manuf_id = $product->manufacturer_id;
        // Specification
        $spec = Specification::where('product_id', '=', $product_id)->first();
        $this->model = $spec->model;
        $this->dl = $spec->dl;
        $this->dw = $spec->dw;
        $this->dl = $spec->dl;
        $this->dh = $spec->dh;
        $this->unit = $spec->unit;
        $this->weight = $spec->weight;
        $this->status = $spec->status;
        $this->type_roll = $spec->type_roll;
        $this->dept = $spec->dept;
        $this->diameter = $spec->diameter;
        $this->meter_int = $spec->meter_int;
        $this->articles = $spec->articles;
    }

    public function delImage($id)
    {
        $product = Product::find($this->product_id);
        $images = explode(',', $product->images);
        //dd($images[$id]);
        $img = $images[$id];//название файла которое нужно удалить
        unset($images[$id]);//удалить название выбранного изображение с поля таблицы images
        if (file_exists('images/products/' . $img)) {
            // Удалить файл если существует
            unlink('images/products/' . $img);
        }
        $imeNames = '';
        foreach ($images as $image) {
            $imeNames = $imeNames . ',' . $image;
        }
        $product->images = $imeNames;

        $product->update();
        $this->images = explode(',', $imeNames);
    }

    public function render()
    {
        $brands = Brand::all();
        $manufacturers = Manufacturer::all();

        return view('livewire.admin.product-edit-component', compact('brands', 'manufacturers'))
            ->layout('components.layouts.admin.app');
    }
}
