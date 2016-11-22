<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * 邮箱验证成功
     *
     */
   public  function email_success()
   {

       return view('/email.email_success');
   }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * 提醒用户邮箱验证页面
     */

    public function  check_your_email()
    {

        return view('email.check_your_email');

    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * 登录退出
     */
    public function quite()
    {

        Auth::logout();

        return redirect('/');

    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 登录页面
     */
    public function login()
    {

        return view('web/login');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     *  注册页面
     */
    public function regist()
    {

        return view('web/regist');

    }

    /**
     * @param $confirm_code
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function  token($confirm_code)
    {

        $user = User::where('confirm_code',$confirm_code)->first();

        if (is_null($user))
        {

            Session::flash('user_regist_failed','邮箱验证失败');

            return redirect('/regist');

        }else{

            $data = ['is_confirmed' => 1];

            $updateres = User::where('confirm_code',$confirm_code)->update($data);

            if ($updateres)

            {

                return redirect('/email_success');

            }

        }

    }

    /**
     * @param Requests\UserLoginRequest $request  注入验证
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *
     *  登录服务
     */
    public function signin(Requests\UserLoginRequest $request)
    {

    if (\Auth::attempt([

        'email'=>$request->get('email'),

        'password'=>$request->get('password'),

        'is_confirmed'=>1

    ])){

        return redirect('/');

    }else{

        Session::flash('user_login_failed','密码不正确或邮箱不正确');

        return  redirect('/login')->withInput(['email'=>$request->get('email')]);

    }

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * 注册服务
     */
    public function store(Requests\UserRegisterRequest $request)
    {

        $confirm_code = str_random(34);

        $userdata = [

            'avatar'=>'/images/face.jpg',

            'confirm_code'=>$confirm_code,

        ];

        $data = array_merge($request->all(),$userdata);

        User::register($data);

        return redirect('/check_your_email');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
