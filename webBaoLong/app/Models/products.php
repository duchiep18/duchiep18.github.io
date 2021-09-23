<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';

    public function products_category() {
        return $this->belongsTo('App\Models\products_categories', 'categories_prd_id', 'id');
    }
}
