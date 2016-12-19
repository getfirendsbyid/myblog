@extends('layouts/home')

@section('content')


<div class="jumbotron">
<div class="container">


    <div class="containers header-container">
        <div class="col-md-12">
        <form method="post" action="/discussion/create">
            {{--@if($errors->any())--}}
                {{--<ul class="list-group">--}}

                    {{--@foreach($errors->all() as $error)--}}

                        {{--<li class="list-group-item list-group-item-danger">{{$error}}</li>--}}

                    {{--@endforeach--}}

                {{--</ul>--}}
            {{--@endif--}}

            {{--@if(Session::has('user_login_failed'))--}}
                {{--<ul class="list-group">--}}

                    {{--<li class="list-group-item list-group-item-danger">{{Session::get('user_login_failed')}}</li>--}}

                    {{--@endif--}}
            {{csrf_field()}}
            <div class="col-md-10 col-sm-12 col-md-offset-1">
                <div class="form-group">
                    <label for="inputEmail3">标题</label>
                    <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="标题">
                </div>

                @include('editor::head')

                 <div class="editor" >

                    <textarea id='myEditor' name="body"></textarea>

                </div>

                <div class="form-group">
                    <button type="submit"  class="form-control" id="inputEmail3" placeholder="">发表帖子</button>
                </div>

            </div>

        </form>

    </div>
    </div>
</div>
</div>
@stop