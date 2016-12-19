@extends('layouts/home1')
<link href="{{asset('admin/css/plugins/bootstrap-markdown/bootstrap-markdown.min.css')}}" rel="stylesheet">

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2> {!! Breadcrumbs::render('article') !!}</h2>
        </div>
    </div>


    <div class="wrapper wrapper-content  animated fadeInRight article">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="pull-right">
                            <button class="btn btn-white btn-xs" type="button">Model</button>
                            <button class="btn btn-white btn-xs" type="button">Publishing</button>
                            <button class="btn btn-white btn-xs" type="button">Modern</button>
                        </div>
                        <div class="text-center article-title">
                            <span class="text-muted"><i class="fa fa-clock-o"></i> {{$article->published_at}}</span>
                            <h1>
                                {{$article->title}}
                            </h1>
                        </div>
                       <p>
                           {!!  \YuanChao\Editor\EndaEditor::MarkDecode($article->content) !!}
                       </p>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>标签:</h5>
                                <button class="btn btn-primary btn-xs" type="button">Model</button>
                                <button class="btn btn-white btn-xs" type="button">Publishing</button>
                            </div>
                            <div class="col-md-6">
                                <div class="small text-right">
                                    <h5>统计:</h5>
                                    <div> <i class="fa fa-comments-o"> </i> 56 条评论 </div>
                                    <i class="fa fa-eye"> </i> 144 阅读
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">


                                <textarea name="content" data-provide="markdown" rows="10"></textarea>


                                <h2>回帖:</h2>
                                <div class="social-feed-box">
                                    <div class="social-avatar">
                                        <a href="" class="pull-left">
                                            <img alt="image" src="头像">
                                        </a>
                                        <div class="media-body">
                                            <a href="#">
                                               用户名
                                            </a>
                                            <small class="text-muted">发表时间</small>
                                        </div>
                                    </div>
                                    <div class="social-body">
                                        <p>
                                              内容
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>



        <nav>
            <ul class="pager">
                <li><a href="/article/{{$article->id-1}}">上一篇</a></li>
                <li><a href="/article/{{$article->id+1}}">下一篇</a></li>
            </ul>
        </nav>


@stop



