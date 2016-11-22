@extends('blade/home')

@section('content')

    <div class="jumbotron header-container">
        <div class="container">

            <h2>欢迎你的到来</h2>

            <p style="margin-bottom: 30px"><a class="btn btn-primary btn-lg pull-right" href="#" role="button">Learn more</a></p>

            <p>小站记录思想,感悟生活</p>

        </div>
    </div>

    <div class="container">

     <div class="row-fluid">

         <div class="col-md-8">

     @foreach($article as $article )

        <div class="col-sm-4 col-md-3">

            <div class="thumbnail" >

              <a href="/article/{{$article->id}}">  <img src="{{$article->article_img_url}}" alt="..."></a>

                <div class="caption">

                    <p>{{$article->title}}</p>

                </div>

            </div>

        </div>

        @endforeach
         </div>

         <div class="col-md-4">

             <div class="col-sm-4 col-md-12">

             <div class="thumbnail" >

                 <a href="/article/{{$article->id}}">  <img src="{{$article->article_img_url}}" alt="..."></a>

                 <div class="caption">

                     <h3>{{$article->title}}</h3>

                 </div>

             </div>
             </div>
         </div>

      </div>

    <div>
    </div>
    </div>
@stop