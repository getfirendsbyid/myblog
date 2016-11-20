<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{

    public function quite()
    {
        Auth::logout();

        return redirect('/');
    }
    
    public function login()
    {

        return view('web/login');

    }

    public function regist()
    {

        return view('web/regist');

    }

    public function  token($confirm_code)
    {

        $user = User::where('confirm_code',$confirm_code)->first();

        if (is_null($user))
        {
            redirect('/login');
        }else{

            $data = ['is_confired'=>1];

            $save = User::where('confirm_code',$confirm_code)->save($data);

            return redirect('/');
        }

    }


    public function signin(Requests\UserLoginRequest $request)
    {

    if (Auth::attempt([

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
     */
    public function store(Requests\UserRegisterRequest $request)
    {

        $userdata = [

            'avatar'=>'/images/face.jpg',

            'confirm_code'=> str_random(34)

        ];

        $data = array_merge($request->all(),$userdata);

        User::register($data);

        return redirect('/');

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
