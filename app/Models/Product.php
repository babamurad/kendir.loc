<?php

namespace App\Models;

use App\Livewire\Admin\ProductComponent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = [
      'name',
      'name_en',
      'name_ru',
      'name_tm',
      'slug',
      'short_description',
      'short_description_en',
      'short_description_ru',
      'short_description_tm',
      'description',
      'description_en',
      'description_ru',
      'description_tm',
      'regular_price',
      'sale_price',
      'SKU',
      'stock_status',
      'featured',
      'quantity',
      'image',
      'images',
      'category_id',
      'rating',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id');
    }
    public function brands()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function manufacturers()
    {
        return $this->belongsTo(Manufacturer::class, 'manufacturer_id', 'id');
    }


    public function specification()
    {
        return $this->hasOne(Specification::class);
    }

    protected $lang_fileds = ['name', 'short_description', 'description'];

    public function getAttribute($key)
    {
        $default = parent::getAttribute($key);
        if ( isset($this->lang_fileds) && is_array($this->lang_fileds) && in_array($key, $this->lang_fileds) ) {
            return $this->{ $key.'_'.app()->getLocale() } ?? '';
        }

        return $default;
    }

    protected function salePrice(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value == 0 ? __('Price is negotiable') : $value,
            set: fn($value) => $value
        );
    }
}
