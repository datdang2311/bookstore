<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\admin;
use Hash;
use DB;
use Request;
class AdminController extends Controller
{
    public function getDanhsach(){
    	$data["arr"] = admin::paginate(10);
    	return view("backend.admin",$data);
    }

    public function getAdd(){
    	return view('backend.admin_add_edit');
    }

    public function add(){
    	$name = Request::get('name');
    	$account = Request::get('account');
    	$password = Request::get('password');
    	$password = Hash::make($password);//mã hóa mật khẩu
    	$name = Request::get('name');
    	$address = Request::get('address');
    	$phoneNumber = Request::get('phoneNumber');
    	$avatar = "";
    	if(Request::hasFile("avatar")){
			//lay ten anh
			$avatar = Request::file("avatar")->getClientOriginalName();
			//gan ham thoi gian vao truoc ten anh
			$avatar = time().$avatar;
			//thuc hien viec upload anh
			Request::file("avatar")->move("upload/avatars",$avatar);
		}
		//check xem tên đăng nhập có tồn tại trong hệ thống chưa
		$data = admin::get();
		foreach($data as $rows){
			if($rows->account == $account)
				return redirect('admin/accounts/add');
		}
		DB::table("admins")->insert(["name"=>$name,"account"=>$account,"password"=>$password,"address"=>$address,"phoneNumber"=>$phoneNumber,"avatar"=>$avatar]);
		return redirect('admin/accounts');
    }

    public function getEdit($id){
    	$data["arr"] = admin::get()->where('id','=',$id)->first();
    	return view('backend.admin_add_edit', $data);
    }
}
