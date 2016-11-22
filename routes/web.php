<?php

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

Route::get('/user/token/{token}','UsersController@token');  //发表帖子

Route::get('/check_your_email','UsersController@check_your_email');  //查看邮箱是提示页面

Route::get('/email_success','UsersController@email_success');  //查看邮箱是提示页面

Route::get('/discussion/create','DiscussionController@create');  //查看邮箱是提示页面

Route::get('/login','UsersController@login');

Route::post('/login','UsersController@signin');

Route::get('/regist','UsersController@regist');

Route::post('/regist','UsersController@store');

Route::get('/article','ArticleController@index');


//Auth::routes();

Route::get('/home', 'HomeController@index');
