<?php

namespace App\Http\Controllers\backend;

use App\categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public  function getDanhsach(){
        $categories = new categories();
        $data["arr"] = $categories->paginate(10);
        return view('backend.category',$data);
    }
}
