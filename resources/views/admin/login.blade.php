<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{{asset('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/bower_components/bootstrap/dist/css/bootstrap-theme.min.css')}}">
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

<div class="container">

    <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" class="form-control" placeholder="Email address" required="" autofocus="">
        <input type="password" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div>
</body>

</html>