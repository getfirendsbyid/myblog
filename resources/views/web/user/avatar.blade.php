@extends('layouts/home')

@section('content')




    <div class="jumbotron ">

    <div class="container header-container">

        <div class="col">

            <div class="form-group col-md-2 col-md-offset-5 ">


                <img  src="{{Auth::user()->avatar}}" width="50px" height="50px" class="img-circle"  id="inputEmail3" >


            </div>

            <div class="form-group col-md-2 col-md-offset-5 ">

                <label for="inputEmail3">更改头像</label>

            </div>

        </div>


        <form action="/user/upload" method="POST" enctype="multipart/form-data">


            <div class="col-md-8 col-md-offset-2" >

                {{ csrf_field() }}

                <div class="form-group">

                      <input type="file" name="avatar" class="form-control" id="inputEmail3" placeholder="text">

                 </div>

                 <div class="form-group">

                      <input type="submit" class="form-control" id="inputEmail3" value="确认修改">

                 </div>

            </div>

        </form>

    </div>

    </div>

@stop
