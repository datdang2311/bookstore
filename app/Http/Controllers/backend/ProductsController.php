<?php

namespace App\Http\Controllers\backend;

use App\Model\Categories;
use App\Model\Languages;
use App\Model\Products;
use Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function getDanhsach(){
        $products = new Products();
        $data["arr"] = $products->paginate(10);
        return view('backend.product',$data);
    }

    public function getAdd(){
        return view('backend.product_add_edit');
    }

    public function add(){

        $products = new Products();

        $name = Request::get('name');
        $author = Request::get('author');
        $published = Request::get('published');

        $category = Request::get('category');
        //lấy id danh mục theo tên danh mục
        $categories = new Categories();
        $category_id = $categories->where('name',$category)->first()->id;

        $year = Request::get('year1').Request::get('year2').Request::get('year3').Request::get('year4');
        $weight = Request::get('weight');

        $language = Request::get('language');
        //lấy id theo ngôn ngữ
        $languages = new Languages();
        $language_id = $languages->where('name',$language);

        $translatorName = Request::get('translatorName');
        $size = Request::get('size_z')."x".Request::get('size_y');
        $status_word = Request::get('status');
        ($status_word == "Còn hàng")?$status=1:$status=0;
        $coverPrice = Request::get('coverPrice');
        $salePrice = Request::get('salePrice');
        $description = Request::get('description');

        //xử lý ảnh

    }
}
