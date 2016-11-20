@extends('blade/home')

@section('content')

    <div class="jumbotron">
        <div class="container">

            <h2>欢迎你的到来</h2>

            <p style="margin-bottom: 30px"><a class="btn btn-primary btn-lg pull-right" href="#" role="button">Learn more</a></p>

            <p>小站记录思想,感悟生活</p>

        </div>
    </div>

 <div class="container">
      <form method="post" action="/">
         <div class="col-md-10 col-sm-12 col-md-offset-1">
             <div class="form-group">
                 <label for="inputEmail3">标题</label>
                 <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="标题">
             </div>

             <div class="form-group">
                 <label for="inputEmail3">文章内容</label>
                 <textarea type="" name="body" class="form-control" id="inputEmail3" placeholder="文章内容"></textarea>
             </div>

             <div class="form-group">
                 <button type="submit"  class="form-control" id="inputEmail3" placeholder="">发表帖子</button>
             </div>

         </div>
      </form>
 </div>

@stop