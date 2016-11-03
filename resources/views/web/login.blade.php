
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
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                    <div class="col-sm-12">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-sm-12">
                    <input   class="col-sm-1"  name="remember" type="checkbox" value="1">
                        <label for="remember" class=" col-sm-11" >两周内免登录</label>
                     </div>

                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="form-control btn btn-default">登录</button>
                    </div>
                </div>

            </form>
            </div>
        </div>
    </div>
@stop