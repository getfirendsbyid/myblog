<?php

use Illuminate\Support\Facades\Redis;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'ArticleController@index');// 首页

Route::resource('/article', 'ArticleController');// 首页

Route::get('/admin',function (){

    return view('admin.login');

});



Route::get('/user/login','UsersController@login');

Route::post('/login','UsersController@signin');

Route::get('/regist','UsersController@regist');

Route::post('/regist','UsersController@store');

Route::get('/article','ArticleController@index');

Route::resource('/favorite','FavoritesController');


