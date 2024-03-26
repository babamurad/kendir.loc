<?php

namespace App\Livewire\Admin;

use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Option;
use App\Models\Product;
use App\Models\Specification;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProductComponent extends Component
{
    use WithFileUploads;

    public $name;
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
    public $image;
    public $category_id;
    public $images;
    public $activeTab;
    protected $messages = [
        'required' => 'заполните поле :attribute',
        'email'    => ':attribute должен быть корректным email адресом',
        'image'    => ':attribute должно быть изображение',
    ];
    public $brand_id, $manuf_id;
    // Specification
    public $model, $dl, $dw, $dh, $unit, $weight, $status, $product_id, $type_roll, $dept, $diameter, $meter_int, $reinforcement_class, $articles;

    /*
     *      $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('option_id')->unsigned();
     * */

    public function render()
    {
//        if ($this->category_id){
//            DB::select('call procAttr_to_Options("'.$this->category_id.'")');
//            $this->at_options = Option::all();
//        } else {
//            $this->at_options = '';
//        }

        $categories = Category::with('cparent')->with('children')->get();
        $attributes = Attribute::where('category_id', '=', $this->category_id)->get();
        $brands = Brand::all();
        $manufacturers = Manufacturer::all();

        return view('livewire.admin.add-product-component',compact('categories','attributes', 'brands', 'manufacturers'))
            ->layout('components.layouts.admin.app');
    }

    public function mount()
    {
        $this->activeTab = 'details';
    }
    public function editOption($id)
    {
        $option = Option::findOrFail($id);
        $this->opt_id = $option->id;
        $this->opt_name = $option->name;
    }

    public function update()
    {
        $option = Option::findOrFail($this->opt_id);
        //dd($this->opt_value);
        //$option->name = $this->opt_name;
        $option->value = $this->opt_value;
        $option->update();
        dd($option);
        $this->dispatch('closeEditOptionModal');
    }

    public function saveOpt()
    {
        dd($this->at_options);
    }
    public function acTab($tabName)
    {
        $this->activeTab = $tabName;
    }
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name_en);
    }

    public function subAndAdd()
    {
        $this->addProduct();
    }

    public function subAndBack()
    {
        $this->addProduct();
        return redirect()->route('admin.products');
    }

    public function addProduct()
    {
        $this->validate([
            'name_en'              => 'required',
            'name_ru'              => 'required',
            'name_tm'              => 'required',
            'slug'              => 'required',
            'short_description_en' => 'required',
            'short_description_ru' => 'required',
            'short_description_tm' => 'required',
            'description_en'       => 'required',
            'description_ru'       => 'required',
            'description_tm'       => 'required',
            'regular_price'     => 'required',
            'sale_price'        => 'required',
            'sku'               => 'required',
            'stock_status'      => 'required',
            'featured'          => 'required',
            'quantity'          => 'required',
            'image'             => 'required|image|max:1024',
            'category_id'       => 'required',
        ]);

        $product = new Product();
        $product->name = $this->name_en;
        $product->name_en = $this->name_en;
        $product->name_ru = $this->name_ru;
        $product->name_tm = $this->name_tm;
        $product->slug = $this->slug;
        $product->short_description_en = $this->short_description_en;
        $product->short_description_ru = $this->short_description_ru;
        $product->short_description_tm = $this->short_description_tm;
        $product->description_en = $this->description_en;
        $product->description_ru = $this->description_ru;
        $product->description_tm = $this->description_tm;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->SKU = $this->sku;
        $product->stock_status = $this->stock_status='In Stock'?:'Out of Stock';
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products', $imageName);
        $product->image = $imageName;

        if ($this->images)
        {
            $iamgesName = '';
            foreach ($this->images as $key=>$image)
            {
                $imageName = Carbon::now()->timestamp.$key.'.'.$image->extension();
                $image->storeAs('products', $imageName);
                if ($iamgesName == '')
                {
                    $iamgesName = $imageName;
                } else { $iamgesName =$iamgesName.','. $imageName; }

            }
            $product->images = $iamgesName;
        }

        $product->category_id = $this->category_id;
        $product->brand_id = $this->brand_id;
        $product->manufacturer_id = $this->manuf_id;
        $product->save();

        $sprec = new Specification();
        $sprec->model = $this->model;
        $sprec->dl = $this->dl;
        $sprec->dw = $this->dw;
        $sprec->dh = $this->dh;
        $sprec->unit = $this->unit;
        $sprec->weight = $this->weight;
        $sprec->status = $this->status;
        $sprec->product_id = $product->id;
        //************
        $sprec->type_roll = $this->type_roll;
        $sprec->dept = $this->dept;
        $sprec->diameter = $this->diameter;
        $sprec->meter_int = $this->meter_int;
        $sprec->articles = $this->articles;
        $sprec->save();

        $this->resetInputFileds();
        session()->flash('success', 'Product has been added!');
    }

    public function resetInputFileds()
    {
        $this->name = '';
        $this->slug = '';
        $this->short_description = '';
        $this->description = '';
        $this->regular_price = '';
        $this->sale_price = '';
        $this->sku = '';
        $this->stock_status = 'instock';
        $this->featured = 0;
        $this->quantity = '';
        $this->image = '';
        $this->images = '';
        $this->category_id = '';
        $this->brand_id = '';
        $this->manuf_id = '';

        $this->model = '';
        $this->dl = '';
        $this->dw = '';
        $this->dh = '';
        $this->unit = '';
        $this->weight = '';
        $this->status = 1;
    }

    public function createAttr()
    {
        //dd($this->attr_name);
        $attr = new Attribute();
        $attr->name = $this->attr_name;
        $attr->category_id = $this->category_id;
        $attr->save();
        $option = new Option();
        $option->attribute_id = $attr->id;
        $option->name = $attr->name;
        $option->save();
        $this->attr_name = '';
        $this->dispatch('closeCreateOptionModal');
        session()->flash('success', 'The attribute has been added.');
    }

    public function toProductsLis()
    {
        //dd('prodlist');
        return redirect()->route('admin.products');
    }
}
