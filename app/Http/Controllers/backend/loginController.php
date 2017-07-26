<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\admin;
use Request;
use DB;
use Hash;

class loginController extends Controller
{
    public function checkLogin(){
    	$user = Request::get('user');
    	$password = Request::get('pass');
    	if(Auth::attempt(["account"=>$user, "password"=>$password]))
    		return view('backend.home');
    	else return view('backend.login');
    }
}
