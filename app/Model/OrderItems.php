<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $table = "order_item";
    public $timestamps = false;
    public function product()
    {
        return $this->belongsTo('App\Model\Products', 'productId', 'id');
    }

    public function order()
    {
        return $this->belongsTo('App\Model\Orders', 'orderId', 'id');
    }
}
