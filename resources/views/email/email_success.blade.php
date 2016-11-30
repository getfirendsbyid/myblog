@extends('layouts/home')

@section('content')

<div class="container header-container" style="margin-top: 100px" >

     <div class="row">

        <div class="col-md-8  col-md-offset-2 role='main'">

            <div class="jumbotron">

                <div class="container">

                        <code> $this->MessagesToYou('跨过万水千山,终于等到你...');</code>

                        <a href="/user/login" class="btn btn-success ">点击登录</a>

                </div>

            </div>

        </div>

   </div>

</div>


@stop
