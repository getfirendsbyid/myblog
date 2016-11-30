@extends('layouts/home')

@section('content')



    <div class="container " style="margin-top: 100px">

        <div class="row">

            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="jumbotron">
                    <div class="blog-post">
                    <h2 class="blog-post-title">{{$article->title}}</h2>
                    <p class="blog-post-meta">{{$article->created_at}} by <a href="#"></a></p>
                    <p>{{$article->content}}</p>
                    </div>

                <!-- /.blog-post -->

                    <nav>
                    <ul class="pager">
                        <li><a href="/article/{{$article->id-1}}">上一篇</a></li>
                        <li><a href="/article/{{$article->id+1}}">下一篇</a></li>
                    </ul>
                    </nav>
                </div><!-- /.blog-main -->
            </div><!-- /.row -->

            <div class="col-md-3 col-sm-12 col-xs-12 ">
                <div class="list-group">
                    <a class="list-group-item disabled">
                        Cras justo odio
                    </a>
                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>


            </div><!-- /.blog-sidebar -->

         </div>


    </div>




@stop




