<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    protected $table = "languages";
    public $timestamps = false;
    public function products()
    {
        return $this->hasMany('App\Model\Products', 'languageId', 'id');
    }
}
