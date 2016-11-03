
@extends('blade/home')

@section('content')

    <style>
        .navbar {
            position: relative;
            min-height: 50px;
            margin-bottom: 0px;
            border: 1px solid transparent;
        }

        #form {
            position: relative;
            width: 400px;
            text-align: center;
            margin: 0 auto 0;
        }
    </style>

    <div class="jumbotron">

        <div class="container" >
            <div id="form">

                <form class="form-horizontal" action="/doregist" method="post" role="form">

                      {{ csrf_field() }}

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 ">用户名</label>
                        <div class="col-sm-12">
                            <input type="text" name="name"  class="form-control" id="inputEmail3" placeholder="用户名">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 ">邮箱</label>
                        <div class="col-sm-12">
                            <input type="email" name="email"  class="form-control" id="inputEmail3" placeholder="邮箱">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 ">密码</label>
                        <div class="col-sm-12">
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="密码">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="form-control btn btn-default">注册</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@stop