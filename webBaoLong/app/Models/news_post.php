<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news_post extends Model
{
    protected $table = 'news_post';

    public function news_category() {
        return $this->belongsTo('App\Models\news_post_categories', 'category_news_id', 'id');
    }
}
