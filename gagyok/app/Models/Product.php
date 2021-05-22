<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // satu produk id boleh banyak pesanan detail
    public function order_detail() 
    {
        return $this->hasMany('App\Models\OrderDetail','product_id', 'id');
    }

    // satu produk hanya boleh satu kategori
    public function category() 
    {
        return $this->belongsTo('App\Models\Category','product_category', 'category_name');
    }
}
