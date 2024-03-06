<?php

namespace App\Models;

use App\Livewire\Admin\ProductComponent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'slug',
      'short_description',
      'description',
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
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'id', 'brand_id');
    }
    public function options()
    {
        return $this->hasMany(ProductComponent::class, 'id', 'product_id');
    }

    public function specification()
    {
        return $this->hasOne(Specification::class);
    }
}
