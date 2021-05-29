<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products_categories extends Model
{
    use HasFactory;
    public function products(){
        return $this->hasMany('\App\Models\themsanpham', 'categories_prd_id', 'id');
    }
}
