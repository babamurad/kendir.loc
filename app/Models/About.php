<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
      'title_en',
      'title_ru',
      'title_tm',
      'text_en',
      'text_ru',
      'text_tm',
      'image',
    ];
    protected $lang_fileds = ['title', 'text'];

    public function getAttribute($key)
    {
        $default = parent::getAttribute($key);
        if ( isset($this->lang_fileds) && is_array($this->lang_fileds) && in_array($key, $this->lang_fileds) ) {
            return $this->{ $key.'_'.app()->getLocale() } ?? '';
        }

        return $default;
    }
}
