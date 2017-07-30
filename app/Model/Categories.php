<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Categories extends Model
{
    protected $table = "categories";
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany('App\Model\Products', 'categoryId', 'id');
    }
    public function getById($id)
    {
        $categories = DB::table('categories')->where('id', '=', $id)->first();
        $categories_name = $categories->name;
        return $categories_name;
    }

    public function getIdByName($name){
        $category_id = DB::table('categories')->where('name',$name)->first()->id;
        return $category_id;
    }
}
