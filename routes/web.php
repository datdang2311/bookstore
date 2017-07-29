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
    Route::get('accounts/delete/{id}', 'backend\AdminController@delete');

    Route::get('products', 'backend\ProductsController@getDanhsach');
    Route::get('products/add', 'backend\ProductsController@getAdd');
    Route::post('products/add', 'backend\ProductsController@add');

    Route::get('categories', 'backend\CategoriesController@getDanhsach');
    Route::get('categories/add', 'backend\CategoriesController@getAdd');
    Route::post('categories/add', 'backend\CategoriesController@add');
    Route::get('categories/edit/{id}', 'backend\CategoriesController@getEdit');
    Route::post('categories/edit/{id}', 'backend\CategoriesController@edit');
    Route::get('categories/delete/{id}', 'backend\CategoriesController@delete');

    Route::get('news', 'backend\NewsController@getAll');
    Route::get('orders', 'backend\OrderController@getAll');

});


Route::get('login', function () {
    return view('backend.login');
});

Route::post('login', 'backend\loginController@checkLogin');

Route::get('logout', 'backend\loginController@logout');
