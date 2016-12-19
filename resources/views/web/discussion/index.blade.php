@extends('layouts/home')

@section('content')

         <div class="container header-container" style="margin-top: 100px" >

             <div class="col">

                 <div class="col-md-4 col-xs-12 col-sm-12 "   style="float: right">

                     <div class="jumbotron" >

                         <a  href="/discussion/create" class="btn btn-success btn-lg btn-block"  >编写问题</a>

                     </div>

                 </div>


             <div class="col-md-8  col-xs-12 col-sm-12"  style="float: right">

                 <div class="jumbotron" >

                         <div class="bs-example">

                              @foreach($discussion->chunk(9) as $row)

                                 @foreach($row as $discussions)

                                 <div class="media">

                                         <a class="media-left" href="#">

                                              <img class="media-object img-circle" data-src="holder.js/64x64" alt="64x64" src="{{$discussions->user->avatar}}" data-holder-rendered="true" style="width: 64px; height: 64px;">
                                         </a>
                                          <div class="media-body">

                                         <h5 class="media-heading">{{$discussions->title}}<a class="pull-right">ASD</a></h5>

                                         <m>{{$discussions->body}}</m>

                                 </div>
                             </div>

                                 @endforeach
                                     {{--分页开始--}}
                                     <div class="media">
                                         <ul class="pagination pull-right">
                                     {{ $discussion->render()}}
                                         </ul>
                                     </div>
                                     {{--分页结束--}}
                             @endforeach


                         </div>

                     </div>

             </div>



             </div>




          </div>

@stop