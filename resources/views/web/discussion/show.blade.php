@extends('layouts/home')

@section('content')

    <div class="jumbotron">

        <div class="container header-container">
            <div class='col-md-6 col-md-offset-3'>
                <h4 class="media-heading">{{$discussion->title}}</h4>
            </div>
             <div class="col-md-12" role='main' style="margin-top: 30px">
                 <div class="media">

                     <a class="media-left" href="#">
                         <img style="height: 64px;width: 64px; " class="img-circle" src="{{$discussion->user->avatar}}" alt="{{$discussion->user->name}}的回答">
                     </a>

                     <div class="media-body">

                         <h4 class="media-heading">{{$discussion->user->name}} <i></i></h4>
                         <p>

                         {!!  \YuanChao\Editor\EndaEditor::MarkDecode($discussion->body) !!}

                         </p>
                     </div>
                     <a class="media-left" href="#" style="width: 100px;">

@can('update_discussion')

                         <a href="/discussion/update" class="btn btn-success  btn-block">修改问题</a>

@endcan
                     </a>

                 </div>

             </div>

        </div>

    </div>

@stop

