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

        $year = Request::get('year');
        $weight = Request::get('weight');

        $language = Request::get('language');
        //lấy id theo ngôn ngữ
        $languages = new Languages();
        $language_id = $languages->where('name','=',$language)->first()->id;

        $translatorName = Request::get('translatorName');
        $size = Request::get('size_x')."x".Request::get('size_y');
        $status_word = Request::get('status');
        ($status_word == "Còn hàng")?$status=1:$status=0;
        $coverPrice = Request::get('coverPrice');
        $salePrice = Request::get('salePrice');
        $description = Request::get('product_description');
        $image = "";
        //xử lý ảnh
        if(Request::hasFile("image")){
            $image = Request::file("image")->getClientOriginalName();
            $image = time().$image;
            Request::file("image")->move("upload/products",$image);
        }

        $products->insert(["name"=>$name, "author"=>$author, "published"=>$published, "categoryId"=>$category_id, "year"=>$year,
        "weight"=>$weight, "languageId"=>$language_id, "translatorName"=>$translatorName, "size"=>$size, "status"=>$status,
        "coverPrice"=>$coverPrice, "salePrice"=>$salePrice, "description"=>$description, "image"=>$image]);

        return redirect('admin/products');
    }

    function getEdit($id){
        $products = new Products();
        $data["arr"] = $products->where('id','=',$id)->first();
        return view('backend.product_add_edit', $data);
    }

    function edit($id){
        $products = new Products();

        $name = Request::get('name');
        $author = Request::get('author');
        $published = Request::get('published');

        $category = Request::get('category');
        //lấy id danh mục theo tên danh mục
        $categories = new Categories();
        $category_id = $categories->where('name',$category)->first()->id;

        $year = Request::get('year');
        $weight = Request::get('weight');

        $language = Request::get('language');
        //lấy id theo ngôn ngữ
        $languages = new Languages();
        $language_id = $languages->where('name','=',$language)->first()->id;

        $translatorName = Request::get('translatorName');
        $size = Request::get('size_x')."x".Request::get('size_y');
        $status_word = Request::get('status');
        ($status_word == "Còn hàng")?$status=1:$status=0;
        $coverPrice = Request::get('coverPrice');
        $salePrice = Request::get('salePrice');
        $description = Request::get('product_description');
        $image = "";
        //xử lý ảnh
        if(Request::hasFile("image")){
            //xóa ảnh cũ
            $arr_old_image = $products->where("id","=",$id)->select("image")->first();
            $old_image = ($arr_old_image->image != "")?$arr_old_image->image:"test";
            if(file_exists("upload/products/$old_image"))
                unlink("upload/products/$old_image");
            $image = Request::file("image")->getClientOriginalName();
            $image = time().$image;
            Request::file("image")->move("upload/products",$image);
            $products->where('id','=',$id)->update(["image"=>$image]);
        }

        $products->where('id','=',$id)->update(["name"=>$name, "author"=>$author, "published"=>$published, "categoryId"=>$category_id, "year"=>$year,
            "weight"=>$weight, "languageId"=>$language_id, "translatorName"=>$translatorName, "size"=>$size, "status"=>$status,
            "coverPrice"=>$coverPrice, "salePrice"=>$salePrice, "description"=>$description]);

        return redirect('admin/products');
    }

    public function delete($id){
        $products = new Products();
        $arr_old_image = $products->where("id","=",$id)->select("image")->first();
        $old_image = ($arr_old_image->image != "")?$arr_old_image->image:"test";
        if(file_exists("upload/products/$old_image"))
            unlink("upload/products/$old_image");
        $products->where('id',"=",$id)->delete();
        return redirect('admin/products');
    }
}
