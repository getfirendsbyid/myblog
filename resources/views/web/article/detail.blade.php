@extends('blade/home')

@section('content')

    <div class="jumbotron">

    <div class="container">


        <div class="row">

            <div class="col-sm-8 blog-main">

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



            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="list-group">
                    <a href="#" class="list-group-item disabled">
                        Cras justo odio
                    </a>
                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>

                <div class="sidebar-module">
                    <h4>Archives</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </div>
</div>




@stop




