@extends('app')

@section('content')
    <h1>{{$articles->title}}</h1>
    <hr>

    <article>
            <div class="body">
                {{$articles->content}}
            </div>
        </article>
@stop

