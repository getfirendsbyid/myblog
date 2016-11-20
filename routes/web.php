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

Route::get('/discussion','DiscussionController@index'); //论坛首页

Route::get('/quite','UsersController@quite'); //论坛

Route::get('/discussion/create','DiscussionController@create');  //发表帖子

Route::get('/passport/token/{token}','UsersController@token');  //发表帖子





Route::get('/login','UsersController@login');

Route::post('/login','UsersController@signin');

Route::get('/regist','UsersController@regist');

Route::post('/regist','UsersController@store');

Route::get('/article','ArticleController@index');


//Auth::routes();

Route::get('/home', 'HomeController@index');
