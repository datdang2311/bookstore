<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Languages extends Model
{
    protected $table = "languages";
    public $timestamps = false;
    public function products()
    {
        return $this->hasMany('App\Model\Products', 'languageId', 'id');
    }

    public function getIdByName($name){
        $language_id = DB::table('languages')->where('name',$name)->first()->id;
        return $language_id;
    }
}
