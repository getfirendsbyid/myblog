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

Route::get('', ['as' => 'home',function () {
//
    $article = \App\Articles::paginate(9);

    return view('web.welcome',compact('article'));

}
]);// 首页


Route::get('blog', ['as' => 'blog', function () {

        return view('home1');

    }
]);

Route::get('test', ['as' => 'article', function () {

        return view('home2');

    }
]);




/**
 *  User控制器
 *
 */
Route::group(['prefix'=>'user'],function(){

    Route::get('login', 'UsersController@login');//登录页面
    Route::post('login','UsersController@signin');//登录服务
    Route::get('regist', 'UsersController@regist');//注册页面
    Route::post('regist','UsersController@store');//注册服务
    Route::get('center','UsersController@center');//个人中心
    Route::get('updatepassword','UsersController@updatepassword');//修改密码
    Route::get('collect','UsersController@collect'); //个人收藏
    Route::get('logout','UsersController@logout');  //退出
    Route::get('token/{token}','UsersController@token');  //验证token是否为真
    Route::get('check_your_email','UsersController@check_your_email');  //查看邮箱是提示页面
    Route::get('email_success','UsersController@email_success');  //查看邮箱是提示页面

});

/**
 *  User 命名空间
 */

Route::group(['prefix'=>'user','middleware'=>'auth','namespace'=>'User'],function(){

    Route::get('upload','AvatarController@upload'); //头像修改页面
    Route::post('upload','AvatarController@uploadavatar'); //头像修改处理方法

});

/**
 *    Article 属性
 *
 */
Route::group(['middleware'=>'auth','prefix'=>'article'],function(){

    Route::get('{id}','articleController@show'); //文章列表

});


/**
 *   论坛控制器
 */


Route::group(['middleware'=>'auth','prefix'=>'discussion'],function (){

    Route::get('{id}','DiscussionController@show');  //展示某个帖子内容
    Route::post('create','DiscussionController@store');  //帖子创建页面
    Route::get('','DiscussionController@index'); //论坛首页
    Route::get('create','DiscussionController@create');  //发表帖子

});


/**
 * 项目
 */

Route::resource('admin/login','Admin\LoginController');
Route::get('admin/logout','Admin\LoginController@logout');

Route::get('discussion/','DiscussionController@create');

/**
 * 后台功能,需验证管理员权限
 */
Route::group(['prefix' => 'admin','middleware'=>'admin','namespace'=>'Admin'],function (){

//    Route::resource('login','LoginController');
    Route::resource('index','IndexController');
    Route::get('permission','PermissionController@index');
    Route::get('permission/createroles','PermissionController@createroles');

});




