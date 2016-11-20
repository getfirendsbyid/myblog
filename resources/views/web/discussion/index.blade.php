@extends('blade/home')

@section('content')

         <div class="container" style="margin-top: 80px">

             <div class="col-md-12">

                 <div class="col-md-8  col-sx-8 ">

                     <div class="jumbotron" >

                         <div class="bs-example">

                              @foreach($discussion as $discussion)

                                 <div class="media">

                                         <a class="media-left" href="#">

                                              <img class="media-object img-circle" data-src="holder.js/64x64" alt="64x64" src="{{$discussion->user->avatar}}" data-holder-rendered="true" style="width: 64px; height: 64px;">
                                         </a>
                                          <div class="media-body">

                                         <h5 class="media-heading">{{$discussion->title}}<a class="pull-right">ASD</a></h5>

                                         <m>{{$discussion->body}}</m>

                                 </div>

                             </div>

                              @endforeach
         {{--分页开始--}}
                               <div class="media">

                                   <ul class="pagination pull-right">
                                     <li><a href="#">&laquo;</a></li>
                                     <li><a href="#">1</a></li>
                                     <li><a href="#">2</a></li>
                                     <li><a href="#">3</a></li>
                                     <li><a href="#">4</a></li>
                                     <li><a href="#">5</a></li>
                                     <li><a href="#">&raquo;</a></li>
                                    </ul>

                               </div>
                         </div>
         {{--分页结束--}}
                     </div>
                  </div>

                 <div class="col-md-4 col-sx-4">

                     <div class="jumbotron" >

                         <button type="button"  class="btn btn-success " data-toggle="dropdown" aria-expanded="false">编写问题</button>

                     </div>

                 </div>

             </div>




          </div>

@stop