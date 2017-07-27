<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = "customers";

    public function order()
    {
        return $this->hasMany('App\Model\Orders', 'CustomerId', 'id');
    }
}
