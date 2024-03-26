<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;
    protected $fillable = ['model', 'dl', 'dw', 'dh', 'unit', 'weight', 'status', 'product_id', 'type_roll', 'dept', 'diameter', 'meter_int', 'reinforcement_class', 'articles'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
