<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{{asset('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/bower_components/bootstrap/dist/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/Font/css/font-awesome.min.css')}}">

    <script src="{{asset('/bower_components/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
</head>

<body>
<header>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{asset('')}}">一栖</a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Php <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Composer</a></li>
                        <li><a href="#">Laravel</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Php</a></li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Linux <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Mac</a></li>
                        <li><a href="#">Ubuntu</a></li>
                    </ul>
                </li>

            </ul>

            <form class="nav navbar-form navbar-left" role="search">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                            <button class="btn btn-default"  type="button">
                                <i class="icon-search "></i>
                            </button>
                            </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </form>
       {{--<ul class="nav navbar-nav">--}}

            {{----}}
       {{--</ul>--}}
            {{--搜索组件--}}

            <ul class="nav navbar-nav">

                <li><a href="/discussion">讨论</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())

                    <li class="dropdown">
                        <a href="#"  style="padding: 9px"  class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <span class="caret"></span>
                            <img alt="Brand" style="height: 32px;width: 32px" src="{{Auth::user()->avatar}}" class="img-circle">
                        </a>

                        <ul class="dropdown-menu" role="menu">

                            <li><a href="/user/center"> <span class="glyphicon glyphicon-user"></span> 个人中心</a></li>
                            <li><a href="/user/updatepassword"><span class="glyphicon glyphicon-th"></span> 修改密码</a>
                            </li><li class="divider"></li>
                            <li><a href="/user/collect"><span class="glyphicon glyphicon-heart"></span> 个人收藏</a></li>
                            </li><li class="divider"></li>
                            <li><a href="/user/quite"><span class="glyphicon glyphicon-off"></span> 退出</a></li>

                        </ul>

                    </li>
                    <a class="navbar-brand" href="#">
                    </a>

                   @else
                <li><a href="/user/login">登录</a></li>
                <li class="active"><a href="/user/regist">注册</a></li>
                 @endif
            </ul>

        </div>

    </div>
</nav>
</header>




@yield('content')


<footer>
    <div class="container-fluid">
        <div class="row footer-top">
            <div class="col-sm-6 col-lg-6">
                <h4>
                    会当击水三千里,各领风骚数百年
                </h4>
                <p>Powered By <a href="#">YV</a><hr>Run On <a href="#" target="_blank">阿里云ECS服务器</a></p>
            </div>
            <div class="col-sm-6  col-lg-5 col-lg-offset-1">
                <div class="row about">
                    <div class="col-xs-6">
                        <h4>关于</h4>
                        <ul class="list-unstyled">
                            <li><a href="/about/">关于我们</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6">
                        <h4>联系方式</h4>
                        <ul class="list-unstyled">
                            <li><a href="mailto:admin@bootcss.com">电子邮件</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row footer-bottom">
            <ul class="list-inline text-center">
                <li>© yuvlife 2016. All rights reserved.</li>
                <li><a href="http://www.miibeian.gov.cn/" target="_blank">蜀ICP备16007338号-2</a></li>
            </ul>
        </div>
    </div>
</footer>

</body>

</html>