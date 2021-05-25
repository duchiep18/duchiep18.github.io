<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'posts';

    use HasFactory;

    public function category(){
        return $this->belongsTo('App\Models\news_categories', 'category_id', 'id');
    }
}
