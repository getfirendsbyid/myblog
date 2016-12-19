
@extends('layouts/home1')

@section('content')


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


                            <div class="middle-box text-center loginscreen animated fadeInDown">
                                <div>
                                    <div>

                                        <h1 class="logo-name"></h1>

                                    </div>

                                    <h3>Welcome To Your Blog Program</h3>

                                    <p>
                                        Record something in life
                                    </p>

                                    <p>
                                        Seek something better in life
                                    </p>
                                    <form class="m-t" role="form" action="{{url('user/login')}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="email" class="form-control"  name="email" value="{{ old('email')}}" placeholder="Username" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password" required="">
                                        </div>
                                        <button type="submit" class="btn btn-primary block full-width m-b">登录</button>

                                        <a href="#"><small>忘记密码?</small></a>
                                        <p class="text-muted text-center"><small>还没有账号?</small></p>
                                        <a class="btn btn-sm btn-white btn-block" href="register.html">创建账号</a>
                                    </form>
                                   </div>
                            </div>



@stop