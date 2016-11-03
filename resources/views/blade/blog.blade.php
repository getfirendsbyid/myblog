<!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>余威的网站</title>
    <meta name="renderer" content="webkit">
    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="alternate icon" type="image/png" href="i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="AMUI React"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="{{ asset('assets/js/jquery.min.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/amazeui.min.css') }}"/>

</head>
<style>

    .am-dropdown-content {

        background-color: rgba(0,0,0,.7);

    }

</style>

<body>
<header class="am-topbar ">
    <h1 class="am-topbar-brand">
        <a href="#">Amaze UI</a>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
            <li class="am-active"><a href="#">首页</a></li>
            <li><a href="#">项目</a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    下拉 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li class="am-dropdown-header">标题</li>
                    <li><a href="#">1. 去月球</a></li>
                    <li class="am-active"><a href="#">2. 去火星</a></li>
                    <li><a href="#">3. 还是回地球</a></li>
                    <li class="am-disabled"><a href="#">4. 下地狱</a></li>
                    <li class="am-divider"></li>
                    <li><a href="#">5. 桥头一回首</a></li>
                </ul>
            </li>
        </ul>

        <form class="am-topbar-form am-topbar-left am-form-inline" role="search">
            <div class="am-form-group">
                <input type="text" class="am-form-field am-input-sm" placeholder="搜索">
                <input type="submit" class="am-form-field am-input-sm" value="搜索">
            </div>
        </form>

        <div class="am-topbar-right">
            <div class="am-dropdown" data-am-dropdown="{boundary: '.am-topbar'}">
                <button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm am-dropdown-toggle" data-am-dropdown-toggle>其他 <span class="am-icon-caret-down"></span></button>
                <ul class="am-dropdown-content">
                    <li><a href="#">注册</a></li>
                    <li><a href="#">随便看看</a></li>
                </ul>
            </div>
        </div>

        <div class="am-topbar-right">
            <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm">登录</button>
        </div>
    </div>
</header>

@yield('content')

<footer data-am-widget="footer"
        class="am-footer am-footer-default"
        data-am-footer="{  }">

    <div class="am-footer-miscs ">

        <p>由 <a href="http://www.yunshipei.com/" title="诺亚方舟"

                target="_blank" class="">一栖</a>

            提供技术支持</p>

        <p>CopyRight©2014  AllMobilize Inc.</p>

        <p>京ICP备13033158</p>

    </div>

</footer>



<div data-am-widget="gotop" class="am-gotop am-gotop-default" >
    <a href="#top" title="回到顶部">
        <span class="am-gotop-title">回到顶部</span>
        <i class="am-gotop-icon am-icon-chevron-up"></i>
    </a>
</div>

</body>
</html>