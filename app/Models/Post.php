<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = 'id';
    public function authorPost()
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }
}
