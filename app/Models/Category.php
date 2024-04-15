<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'is_popular', 'parent_id'];

    public function cparent():BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }
    public function products():HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }
    public function attribute()
    {
        return $this->hasMany(Attribute::class, 'id', 'category_id');
    }

    protected $lang_fileds = ['name'];

    public function getAttribute($key)
    {
        $default = parent::getAttribute($key);
        if ( isset($this->lang_fileds) && is_array($this->lang_fileds) && in_array($key, $this->lang_fileds) ) {

            return $this->{ $key.'_'.app()->getLocale() } ?? '';

        }

        return $default;
    }

}
