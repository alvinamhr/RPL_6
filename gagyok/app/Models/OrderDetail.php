<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo('App\Product','product_id', 'id');
    }

    public function order() 
    {
        return $this->belongsTo('App\Order','order_id', 'id');
    }
}
