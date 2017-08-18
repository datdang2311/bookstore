<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\ImageSlides;
use Hash;
use DB;
use Request;
use Auth;

class SlideController extends Controller{
    public function getSlide(){
        $slides = new ImageSlides();
        $data["arr"] = $slides->get();
        return view("backend.slide",$data);
    }

    public function getEdit($id){
        $slides = new ImageSlides();
        $data["arr"] = $slides->where('id','=',$id)->first();
        return view('backend.slide_edit',$data);
    }
}
?>