<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'is_popular'];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent', 'id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent', 'id');
    }

    public function products():HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
