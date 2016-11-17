
@extends('blade/home')

@section('content')


    <div class="jumbotron">

        <div class="container" >

            <div id="form">



                    @if($errors->any())
                        <ul class="list-group">

                            @foreach($errors->all() as $error)

                                <li class="list-group-item list-group-item-danger">{{$error}}</li>

                            @endforeach

                        </ul>
                    @endif





                <form   class="form-horizontal col-xs-12  col-md-12 "  action="/regist" method="post" role="form">

                      {{ csrf_field() }}


                    <div class="form-group">

                            <label for="inputEmail3">用户名</label>
                            <input type="text" name="name"  class="form-control" id="inputEmail3" placeholder="用户名">

                    </div>

                    <div class="form-group">

                            <label for="inputEmail3">邮箱</label>
                            <input type="email" name="email"  class="form-control " id="inputEmail3" placeholder="邮箱">

                    </div>
                    <div class="form-group">

                            <label for="inputPassword3" >密码</label>
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="密码">

                    </div>

                    <div class="form-group">
                         <label for="inputEmail3" >重复密码</label>
                         <input type="password" name="password_confirmation"  class="form-control" id="inputEmail3" placeholder="重复密码">
                    </div>

                    <div class="form-group">
                        <div class="">
                            <button type="submit" class="form-control btn btn-default">注册</button>
                        </div>
                    </div>

                </form>

                    <div style="clear: both"></div>

            </div>
            </div>
        </div>
    </div>
@stop