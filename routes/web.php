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

Route::get('/', function () {

    return view('web/welcome');

});


//Route::get('/email',function (){
//
//    Illuminate\Contracts\Mail\::to('1094692718@qq.com')->send(new App\Mail\);
//
//});


Route::get('/success',function (){

    return 'regist success';

});

Route::get('/login','passportController@login');

Route::get('/regist','passportController@regist');

Route::post('/doregist','passportController@store');

Route::get('/article','articleController@index');

Route::resource('/favorite','FavoritesController');


