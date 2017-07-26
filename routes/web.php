<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix'=>'admin', 'middleware'=>'checkLogin'],function(){
	//Route cho tk admin
	Route::get('accounts','backend\AdminController@getDanhsach');
	Route::get('accounts/add','backend\AdminController@getAdd');
	Route::post('accounts/add','backend\AdminController@add');
	Route::get('accounts/edit/{id}','backend\AdminController@getEdit');
	Route::post('accounts/edit/{id}','backend\AdminController@edit');

	Route::get('products','backend\ProductController@getDanhsach');
	Route::get('products_add_edit','backend\ProductController@addedit');

	Route::get('categories','backend\CategoryController@getDanhsach');
	Route::get('categories_add_edit','backend\CategoryController@addedit');
});

<<<<<<< HEAD
Route::get('home', function () {
    return view('backend.layout');
});

Route::get('login', function () {
    return view('backend.login');
});

Route::get('product', function () {
    return view('backend.product');
});

Route::get('admin', function () {
    return view('backend.admin');
});

Route::get('product_add_edit', function () {
    return view('backend.product_add_edit');
});

//Route::get('/', function(){
//	return view('backend.test');
//});

Route::get('admin_add_edit', function () {
    return view('backend.admin_add_edit');
});
=======
Route::get('login', function(){
	return view('backend.login');
});

Route::post('login','backend\loginController@checkLogin');
>>>>>>> 089f2790cee12920e55809a3c5e461664342e413
