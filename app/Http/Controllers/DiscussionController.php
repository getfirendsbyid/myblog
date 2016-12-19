<?php

namespace App\Http\Controllers;

use App\Discussion;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use App\Http\Requests;

class DiscussionController extends Controller
{


    function __construct()
    {

//        $this->middleware('auth',['only'=>['create','store','edit','update']]); //必须登录之后才能访问这些方法,否者跳回user/login

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $discussion = Discussion::paginate(8);

        return view('web.discussion.index',compact('discussion'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('web.discussion.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Requests\CreateDiscussionRequest $request)
    {

        $discussiondata = array_merge($request->all(),['user_id'=>\Auth::id(),'last_user_id'=>\Auth::id()]);

        $res = Discussion::creatediscussion($discussiondata);

        return redirect()->action('DiscussionController@show',['id'=>$res->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $discussion = Discussion::findOrFail($id);

//        $this->authorize('show-post',$discussion);

        return view('web.discussion.show',compact('discussion'));

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
