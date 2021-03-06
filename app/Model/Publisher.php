<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = "publisher";
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany('App\Model\Products', 'publishId', 'id');
    }
}
