<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";
    public $timestamps = false;
    public function languages()
    {
        return $this->belongsTo('App\Model\Languages', 'languageId', 'id');
    }

    public function publisher()
    {
        return $this->belongsTo('App\Model\Publisher', 'publishId', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Categories', 'categoryId', 'id');
    }

    public function orderItem()
    {
        return $this->hasMany('App\Model\OrderItems', 'productId', 'id');
    }
}
