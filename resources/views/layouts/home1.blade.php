<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/favicon.ico" rel="shortcut icon">
    <title>首页</title>

    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">

</head>

<body class="pace-done mini-navbar">

<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">

             @if(\Auth::check())
                    <div class="dropdown profile-element">
                        <span>
                            <img alt="image" class="img-circle"  style="height: 48px;width: 48px" src="{{\Auth::user()->avatar}}" />
                        </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs"> <strong class="font-bold">{{\Auth::user()->name}}<b class="caret"></b></strong></span>
                            </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="#">个人中心</a></li>
                            <li><a href="#">修改密码</a></li>
                            <li><a href="#">我的收藏</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('user/logout')}}">登出</a></li>
                        </ul>
                    </div>
             @else
                        <div class="dropdown profile-element">
                        <span>
                            <img alt="image" class="img-circle"  style="height: 48px;width: 48px" src="" />
                        </span>
                            <a  href="{{url('user/login')}}">
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">登录</strong>
                             </span>
                            </span>
                        </a>

                        </div>
             @endif

                    <div class="logo-element">
                        <a href="{{url('')}}">一栖</a>
                    </div>
                </li>
                <li>
                    <a href="{{url('#')}}">
                        <i class="fa fa-th-large"></i>
                        <span class="nav-label">文章</span>
                        <span class="fa arrow"></span>
                    </a>
                    {{--<ul class="nav nav-second-level collapse">--}}
                        {{--<li><a href="index.html">Dashboard v.1</a></li>--}}
                    {{--</ul>--}}
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="查找你想要的东东" class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">小站记录生活,感悟人生</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="#">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="grid_options.html">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>

                    @if(\Auth::check())

                    <li>
                        <a href="{{url('user/logout')}}">
                            <i class="fa fa-sign-out"></i> 登出
                        </a>
                    </li>
                    @else

                        <li>
                            <a href="{{url('user/login')}}">
                                <i class="fa fa-sign-out"></i> 登录
                            </a>
                        </li>

                    @endif


                </ul>

            </nav>
        </div>

     @yield('content')

         <div class="footer">
            <div class="pull-right">

                <a href="http://www.miibeian.gov.cn/" target="_blank"><strong>蜀</strong>ICP备16007338号-2</a>

            </div>
            <div>
                © yuvlife 2016. All rights reserved.

            </div>
        </div>

    </div>
</div>


<!-- Mainly scripts -->
<script src="{{asset('admin/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('admin/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Peity -->
<script src="{{asset('admin/js/plugins/peity/jquery.peity.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('admin/js/inspinia.js')}}"></script>
<script src="{{asset('admin/js/plugins/pace/pace.min.js')}}"></script>

<!-- iCheck -->
<script src="{{asset('admin/js/plugins/iCheck/icheck.min.js')}}"></script>

<!-- Peity -->
<script src="{{asset('admin/js/demo/peity-demo.js')}}"></script>
<script src="{{asset('admin/js/plugins/jsTree/jstree.min.js')}}"></script>
<script src="{{asset('admin/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<!-- markdown-->
<script src="{{asset('admin/js/plugins/bootstrap-markdown/bootstrap-markdown.js')}}"></script>
<script src="{{asset('admin/js/plugins/bootstrap-markdown/markdown.js')}}"></script>
<script>
    $("#content").markdown({autofocus:false,savable:false})
</script>
</body>

</html>
