@extends('layouts/home1')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2> {!! Breadcrumbs::render('home') !!}</h2>

        </div>


    </div>

         <div class="row">
             <div class="col-lg-12">
                 <div class="wrapper wrapper-content animated fadeInRight">

                     @foreach($article->chunk(8) as $row)

                         @foreach($row as $articles)

                     <div class="vote-item">
                         <div class="row">
                             <div class="col-md-10">
                                 <div class="vote-actions">
                                     <a href="{{url('article')}}/{{$articles->id}}">
                                         <i class="fa fa-chevron-up"> </i>
                                     </a>
                                     <div>32</div>
                                     <a href="{{url('article')}}/{{$articles->id}}">
                                         <i class="fa fa-chevron-down"> </i>
                                     </a>
                                 </div>
                                 <a href="{{url('article')}}/{{$articles->id}}" class="vote-title">
                                     {{str_limit($articles->content,150,$end = '...') }}
                                 </a>
                                 <div class="vote-info">
                                     <i class="fa fa-comments-o"></i> <a href="">Comments (32)</a>
                                     <i class="fa fa-clock-o"></i> <a href="#">{{$articles->published_at}}</a>
                                     <i class="fa fa-user"></i> <a href="#">Andrew Williams</a>
                                 </div>
                             </div>
                             <div class="col-md-2 ">
                                 <div class="vote-icon">
                                     <i class="fa fa-css3"> </i>
                                 </div>
                             </div>
                         </div>

                     </div>
                         @endforeach

                     @endforeach
                         {{--分页开始--}}

                         {{ $article->render()}}
                         {{--分页结束--}}
                 </div>


             </div>

         </div>


@stop