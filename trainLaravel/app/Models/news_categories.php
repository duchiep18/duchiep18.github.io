<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news_categories extends Model
{
        use HasFactory;
        
        public function news(){
                return $this->hasMany('App\Models\News', 'category_id', 'id');
            }
        
}
 