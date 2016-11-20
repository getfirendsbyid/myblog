<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{{asset('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/bower_components/bootstrap/dist/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <script src="{{asset('/bower_components/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <title>一栖</title>

    <meta name="description" content="Bootstrap是Twitter推出的一个用于前端开发的开源工具包。它由Twitter的设计师Mark Otto和Jacob Thornton合作开发，是一个CSS/HTML框架。目前，Bootstrap最新版本为3.0 。Bootstrap中文网致力于为广大国内开发者提供详尽的中文文档、代码实例等，助力开发者掌握并使用这一框架。">
    <meta name="keywords" content="Bootstrap,CSS,CSS框架,CSS framework,javascript,bootcss,bootstrap开发,bootstrap代码,bootstrap入门">
    {{--<style>--}}
        {{--.navbar{--}}
            {{--margin-bottom:0px;--}}
        {{--}--}}
    {{--</style>--}}
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

            <form class="navbar-form navbar-left" role="search">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">搜索</button>
                            </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </form>
            {{--搜索组件--}}

            <ul class="nav navbar-nav">

                <li><a href="/discussion">讨论</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">

                            <li><a href="/user/center">个人中心</a></li>

                            <li class="divider"></li>
                            <li><a href="/quite">退出</a></li>
                        </ul>

                    </li>
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" height="32" src="{{Auth::user()->avatar}}" class="img-circle">
                    </a>

                   @else
                <li><a href="/login">登录</a></li>
                <li class="active"><a href="/regist">注册</a></li>
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