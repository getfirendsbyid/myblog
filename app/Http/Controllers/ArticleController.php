<?php

namespace App\Http\Controllers;
use App\Articles;
use App\Discussion;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

$imgs = array();
$imgs[0] = '/back1.jpg';
$target = '/qrcode.png';//背景图片
$target_img = Imagecreatefromjpeg($target);
$source= array();
foreach ($imgs as $k=>$v){
    $source[$k]['source'] = Imagecreatefromjpeg($v);
    $source[$k]['size'] = getimagesize($v);
}
//imagecopy ($target_img,$source[0]['source'],2,2,0,0,$source[0]['size'][0],$source[0]['size'][1]);
//imagecopy ($target_img,$source[1]['source'],250,2,0,0,$source[1]['size'][0],$source[1]['size'][1]);
$num1=0;
$num=3; //控制列数，一行几列，0为1以此类推。
$tmp=2;
$tmpy=2; //图片之间的间距
for ($i=0; $i<4; $i++){
    imagecopy($target_img,$source[$i]['source'],$tmp,$tmpy,0,0,$source[$i]['size'][0],$source[$i]['size'][1]);
    $tmp = $tmp+$source[$i]['size'][0];
    $tmp = $tmp+5; //开源软件:phpfensi.com
    if($i==$num){
        $tmpy = $tmpy+$source[$i]['size'][1];
        $tmpy = $tmpy+5;
        $tmp=2;
        $num=$num+3;
    }
}
Imagejpeg($target_img,'pin.jpg');

echo '<img src="pin.jpg">';



//        $article = Articles::paginate(9);
//
//
//
//        return view('web.welcome',compact('article'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $article = Articles::find($id);


        if(empty($article)){

            abort('404');

        }



        return view('web/article/show',compact('article'));
        
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
