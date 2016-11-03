@extends('blade/blog')

@section('content')
<h1>Articles</h1>
    <hr>
@foreach($article as $article)
<h2><a href="{{ url('articles',$article->id) }}}">{{$article->title}}</a></h2>
    <article>
        <div class="body">
            {{$article->content}}
        </div>
    </article>
    @endforeach
@stop

