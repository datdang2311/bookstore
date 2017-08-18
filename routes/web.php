<?php
use Illuminate\Http\Request;

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
    Route::get('products/edit/{id}', 'backend\ProductsController@getEdit');
    Route::post('products/edit/{id}', 'backend\ProductsController@edit');
    Route::get('products/delete/{id}', 'backend\ProductsController@delete');

    Route::get('categories', 'backend\CategoriesController@getDanhsach');
    Route::get('categories/add', 'backend\CategoriesController@getAdd');
    Route::post('categories/add', 'backend\CategoriesController@add');
    Route::get('categories/edit/{id}', 'backend\CategoriesController@getEdit');
    Route::post('categories/edit/{id}', 'backend\CategoriesController@edit');
    Route::get('categories/delete/{id}', 'backend\CategoriesController@delete');

    Route::get('slides', 'backend\SlideController@getSlide');
    Route::get('slide/edit/{id}','backend\SlideController@getEdit');

    Route::get('news', 'backend\NewsController@getAll');
    Route::get('news/editView/{id}', 'backend\NewsController@editView');
    Route::post('news/edit', ['as' => 'editNew', 'uses' => 'backend\NewsController@edit']);
    Route::get('news/addView', 'backend\NewsController@addView');
    Route::post('news/add', ['as' => 'add', 'uses' => 'backend\NewsController@add']);
    Route::get('news/delete/{id}', 'backend\NewsController@delete');

    Route::get('orders', 'backend\OrderController@getAll');
    Route::get('orders/editView/{id}', 'backend\OrderController@editView');
//    Route::get('orders/deleteProduct/{orderId}/{orderItemId}','backend\OrderController@deleteProduct');

    //ROUTE phần AJAX
    Route::post('orders/removeProduct', ['as' => 'deleteProduct', 'uses' => 'backend\OrderController@deleteProduct']);

    Route::post('orders/edit', ['as' => 'editOrder', 'uses' => 'backend\OrderController@edit']);
    Route::get('news/delete/{id}', 'backend\OrderController@delete');


});


Route::get('login', function () {
    return view('backend.login');
});

Route::post('login', 'backend\loginController@checkLogin');

Route::get('logout', 'backend\loginController@logout');