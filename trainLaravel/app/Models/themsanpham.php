<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class themsanpham extends Model
{
    // protected $table = 'them_san_pham';
    use HasFactory;

    public function product_category() {
        return $this->belongsTo('App\Models\products_categories', 'categories_prd_id', 'id');
    }
}
