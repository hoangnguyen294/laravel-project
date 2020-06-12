<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','PagesController@getHome');
Route::get('/detail-{id}','PagesController@getDetail');
Route::get('/category-{id}','PagesController@getCategory');
Route::post('/detail-{id}','PagesController@postComment');
Route::get('search','PagesController@getSearch');

Route::group(['namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'login','middleware'=>'CheckLogedIn'], function () {
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');
        });
    Route::get('logout','DashboardController@getLogout');
    Route::group(['prefix' => 'dashboard','middleware'=>'CheckLogedOut'], function () {
        Route::get('/','DashboardController@getDashboard',);
    });
    //Danh mục
    Route::get('/category','CategoryController@getCate');
    Route::post('/category','CategoryController@postCate');

    Route::get('/editcate-{id}','CategoryController@getEditCate');
    Route::post('/editcate-{id}','CategoryController@postEditCate');

    Route::get('/deletecate-{id}','CategoryController@getDeleteCate');



    //Sản phẩm
    Route::get('/product','ProductController@getProduct');

    Route::get('/addproduct','ProductController@getAddProduct');
    Route::post('/addproduct','ProductController@postAddProduct');

    Route::get('/editproduct-{id}','ProductController@getEditProduct');
    Route::post('/editproduct-{id}','ProductController@postEditProduct');

    Route::get('/deleteproduct-{id}','ProductController@getDeleteProduct');
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('add/{id}','CartController@getAddCart');

});
Route::get('showcart-{id}','CartController@getShowCart');

