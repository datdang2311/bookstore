<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = "orders";
    public $timestamps = false;
    public function customer()
    {
        return $this->belongsTo('App\Model\Customers', 'customerId', 'id');
    }

    public function orderItem()
    {
        return $this->hasMany('App\Model\OrderItems', 'orderId', 'id');
    }
}
