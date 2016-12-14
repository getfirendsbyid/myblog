<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台登录</title>
    <link href="{{asset('/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">

    @if($errors->any())
        <ul class="list-group">

            @foreach($errors->all() as $error)

                <li class="list-group-item list-group-item-danger">{{$error}}</li>

            @endforeach

        </ul>
    @endif

    @if(Session::has('user_login_failed'))
        <ul class="list-group">

            <li class="list-group-item list-group-item-danger">{{Session::get('user_login_failed')}}</li>

            @endif
    <div>
        <div>
            {{--<h1 class="logo-name">GO</h1>--}}
        </div>
        <h3>Welcome To Your Blog Program</h3>
        <p>
            Seek something better in life
        </p>

        <p>
            Record something in life
        </p>

        <form class="m-t" role="form" action="{{url('admin/login')}}" method="post">
                 {{csrf_field()}}
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Username" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            {{--<a href="#"><small>Forgot password?</small></a>--}}

            {{--<p class="text-muted text-center"><small>Do not have an account?</small></p>--}}

            {{--<a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>--}}

        </form>

        <p class="m-t"><small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{asset('/admin/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('/admin/js/bootstrap.min.js')}}"></script>

</body>

</html>
