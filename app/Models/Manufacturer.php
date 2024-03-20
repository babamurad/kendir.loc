<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;
    //protected $guarded = ['id'];
    protected $fillable = [
        'code',
        'name_en',
        'name_ru',
        'name_tm',
        'image',
    ];

    public function products()
    {
        return $this->hasMany(Product::class,'manufacturer_id', 'id');
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
