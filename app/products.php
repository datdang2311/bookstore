<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class products extends Model
{
    public $table = "products";
    public $timestamps = false;

    public function getCategory($id){
        $categories = DB::table('categories')->where('id','=',$id)->first();
        $categories_name = $categories->name;
        return $categories_name;
    }
}
