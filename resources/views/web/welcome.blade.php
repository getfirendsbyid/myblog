@extends('layouts/home')

@section('content')

    <div class="jumbotron header-container">

        <div class="container">

            <h2>欢迎你的到来</h2>

            <p style="margin-bottom: 30px">
                <a class="btn btn-primary btn-lg pull-right" href="#" role="button">Learn more</a>
            </p>

            <p>小站记录思想,感悟生活</p>

        </div>
    </div>


         <div class="col-md-9">

     @foreach($article as $article )

                 <div class="panel panel-default">
                     <!-- Default panel contents -->
                     <div class="panel-heading ">
                     <a href="/article/{{$article->id}}" class="btn btn-link">
                         {{$article->title}}
                     </a>
                     </div>
                     <div class="panel-body">

                         <div class="col-md-3 col-xs-12 col-sm-4">
                             <a href="/article/{{$article->id}}" class="thumbnail">
                                 <img src="/back1.jpg" alt="...">
                             </a>
                         </div>
                         <div class="col-md-9 col-xs-12 col-sm-8">
                             <p>
                                 {{str_limit($article->content,150,$end = '...') }}
                             </p>
                         </div>
                          </div>

                     <!-- List group -->
                 </div>

        @endforeach
         </div>

    <div class="col-md-3">

        <div class="list-group">
            <a class="list-group-item disabled">
                About Me
            </a>
            <a class="list-group-item">
                <p>喜歡物件導向、函數式編程、單元測試、重構、設計模式相關領域，努力學習寫出符合 SOLID 原則的程式碼。</p>
            </a>

        </div>

        <div class="list-group">
            <a class="list-group-item disabled">
                Links
            </a>
            <ul class="list-group">
                <li class="list-group-item">
                    <i class="icon-github">
                        <a href="https://github.com/getfirendsbyid">&nbsp;My Github</a>
                    </i>
                </li>
                <li class="list-group-item">
                    <i class="icon-envelope">
                        <a href="https://github.com/getfirendsbyid">&nbsp;My Email</a>
                    </i>
                </li>
            </ul>

        </div>





    </div>

    <div>
    </div>
@stop