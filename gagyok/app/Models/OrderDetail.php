<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    //  satu detail pesanan dihubungkan ke satu barang
    public function product()
    {
        return $this->belongsTo('App\Models\Product','product_id', 'product_id');
    }

    // satu detail pesanan dihubungkan ke satu pesanan
    public function order() 
    {
        return $this->belongsTo('App\Models\Order','order_id', 'id');
    }
}
