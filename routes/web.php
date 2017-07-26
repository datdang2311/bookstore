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
Route::group(['prefix' => 'admin', 'middleware' => 'checkLogin'], function () {
    //Route cho tk admin
    Route::get('accounts', 'backend\AdminController@getDanhsach');
    Route::get('accounts/add', 'backend\AdminController@getAdd');
    Route::post('accounts/add', 'backend\AdminController@add');
    Route::get('accounts/edit/{id}', 'backend\AdminController@getEdit');
    Route::post('accounts/edit/{id}', 'backend\AdminController@edit');

    Route::get('products', 'backend\ProductController@getDanhsach');
    Route::get('products_add_edit', 'backend\ProductController@addedit');

    Route::get('categories', 'backend\CategoryController@getDanhsach');
    Route::get('categories_add_edit', 'backend\CategoryController@addedit');

    Route::get('news','backend\NewsController@getAll');
    Route::get('orders','backend\OrderController@getAll');

});


Route::get('login', function () {
    return view('backend.login');
});

Route::post('login', 'backend\loginController@checkLogin');

Route::get('/', function () {
    return view('welcome');
});