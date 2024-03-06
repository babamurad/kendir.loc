<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;
    protected $fillable = ['model', 'dl', 'dw', 'dh', 'unit', 'weight', 'status', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
