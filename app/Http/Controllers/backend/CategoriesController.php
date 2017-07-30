<?php

namespace App\Http\Controllers\backend;

use App\Model\Categories;
use Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public  function getDanhsach(){
        $categories = new Categories();
        $data["arr"] = $categories->paginate(10);
        return view('backend.category',$data);
    }

    public function  getAdd(){
        return view('backend.category_add_edit');
    }

    public function add(){
        $name = Request::get('name');

        $categories = new Categories();
        foreach($categories->get() as $category){
            if($category->name == $name)
                return redirect('admin/category_add_edit?err=invalid');
        }
        $description = Request::get('description');
        $imageUrl = "";

        //lấy ảnh và upload
        if(Request::hasFile('imageUrl')){
            $imageUrl = Request::file("imageUrl")->getClientOriginalName();
            $imageUrl = time().$imageUrl;
            Request::file("imageUrl")->move("upload/categories",$imageUrl);
        }


        $categories->insert(["name"=>$name, "description"=>$description, "imageUrl"=>$imageUrl]);

        return redirect('admin/categories');
    }

    public function  getEdit($id){
        $categories = new Categories();
        $data["arr"] = $categories->where('id','=',$id)->first();
        return view('backend.category_add_edit', $data);
    }

    public function  edit($id){
        $categories = new Categories();
        $name = Request::get('name');
        $description = Request::get('description');
        //lấy ảnh và upload

        if(Request::hasFile('imageUrl')) {
            //xóa ảnh cũ
            $arr_old_image = $categories->where("id","=",$id)->select("imageUrl")->first();
            $old_image = ($arr_old_image->imageUrl != "")?$arr_old_image->imageUrl:"test";
            if(file_exists("upload/categories/$old_image"))
                unlink("upload/categories/$old_image");

            $imageUrl = Request::file("imageUrl")->getClientOriginalName();
            $imageUrl = time() . $imageUrl;
            Request::file("imageUrl")->move("upload/categories", $imageUrl);

            $categories->where('id','=',$id)->update(["imageUrl"=>$imageUrl]);
        }

        $categories->where('id','=',$id)->update(["name"=>$name, "description"=>$description]);
        return redirect('admin/categories');
    }

    public function delete($id){
        $categories = new Categories();
        $categories->where('id','=',$id)->delete();
        //xóa ảnh
        $arr_old_image = $categories->where("id","=",$id)->select("imageUrl")->first();
        $old_image = ($arr_old_image->imageUrl != "")?$arr_old_image->imageUrl:"test";
        if(file_exists("upload/categories/$old_image"))
            unlink("upload/categories/$old_image");
        return redirect('admin/categories');
    }
}
