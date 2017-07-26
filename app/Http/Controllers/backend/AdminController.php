<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\admin;
use Hash;
use DB;
use Request;
use Auth;
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

    public function edit($id){
        $name = Request::get('name');
        $address = Request::get('address');
        $phoneNumber = Request::get('phoneNumber');
        if(Request::hasFile("avatar")){
            //thuc hien viec xoa anh cu
            $arr_old_avatar = DB::table("admins")->where("id","=",$id)->select("avatar")->first();
            $old_avatar = isset($arr_old_avatar->avatar)?$arr_old_avatar->avatar:"";
            //xoa anh cu neu anh nay ton tai
            if(file_exists("upload/avatars/$old_avatar"))
                unlink("upload/avatars/$old_avatar");
            $avatar = Request::file("avatar")->getClientOriginalName();
            //gan ham thoi gian vao truoc ten anh
            $avatar = time().$avatar;
            //thuc hien viec upload anh
            Request::file("avatar")->move("upload/avatars",$avatar);
            DB::table('admins')->where('id','=',$id)->update(['avatar'=>$avatar]);
        }
        //thực hiện sửa bảng trong csdl
        DB::table('admins')->where('id','=',$id)->update(['name'=>$name, 'address'=>$address, 'phoneNumber'=>$phoneNumber]);
        return redirect(url('admin/accounts'));
    }

    public function delete($id){
        //Lấy id của người dùng đang đăng nhập để tránh xóa chính tài khoản đang đăng nhập
        $id_user = Auth::user()->id;
        if($id != $id_user)
        {
            //thực hiện xóa ảnh khỏi file
            $arr_old_avatar = DB::table("admins")->where("id","=",$id)->select("avatar")->first();
            $old_avatar = isset($arr_old_avatar->avatar)?$arr_old_avatar->avatar:"";
            //xoa anh cu neu anh nay ton tai
            if(file_exists("upload/avatars/$old_avatar"))
                unlink("upload/avatars/$old_avatar");
            //xóa khỏi cơ sở dữ liệu
            DB::table('admins')->where('id','=',$id)->delete();
            return redirect(url('admin/accounts'));
        }
        //nếu xóa chính tài khoản đang đăng nhập thì đưa ra thông báo
        return redirect(url('admin/accounts?err=lap'));
    }
}
