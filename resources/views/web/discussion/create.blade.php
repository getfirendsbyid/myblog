@extends('blade/home')

@section('content')



 <div class="containers header-container">
      <form method="post" action="/discussion/create">
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