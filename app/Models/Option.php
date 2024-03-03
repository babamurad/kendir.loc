<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = ['attribute_id', 'name', 'value'];

    public function attributes()
    {
        return $this->hasMany(Attribute::class, 'attribute_id', 'id');
    }

}
