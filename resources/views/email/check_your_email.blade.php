@extends('blade/home')

@section('content')

    <div class="container header-container">

         <div class="row">

            <div class="col-md-8 col-md-offset-2">

               <div class="jumbotron">

                   <div class="container">


                    <code>$this->SenEmailToYou('{{session('email')}}');      //请验证您的邮箱</code>


                   </div>

               </div>

            </div>

    </div>

</div>


@stop