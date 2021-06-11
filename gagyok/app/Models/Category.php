<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Satu kategori memiliki banyak produk
    public function product() 
    {
        return $this->hasMany('App\Models\Product','category_name', 'product_category');
    }
}
