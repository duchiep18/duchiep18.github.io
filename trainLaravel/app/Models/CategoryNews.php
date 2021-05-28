<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryNews extends Model
{   
    protected $table = 'news_categories';
    use HasFactory;

    public function news(){
        return $this->hasMany('App\Models\News', 'category_id', 'id');
    }
}
