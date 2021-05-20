<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\User','user_id', 'id');
    }

    public function orderdetail() 
    {
        return $this->hasMany('App\OrderDetail','order_id', 'id');
    }
}

