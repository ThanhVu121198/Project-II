@extends('admin.adminmain')
@section('content')
<form style="margin-bottom: 20px" action="" class="form-inline" role="form">
    <div class="form-group">
        <input type="text" class="form-control" name="key" placeholder="search by name...">
    </div>
    <button style="margin-left: 10px" type="submit" class="btn btn-primary">
        <i class="fas fa-search"></i>
    </button>
</form>
   <table class="table">
       <thead>
           <tr>
               <th>id</th>
               <th>tilte</th>
               <th>image</th>
               <th>category</th>
               <th>create at</th>
               <th class="text-right">actions</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($data as $blog)
               <tr>
                   <td>{{$blog->id}}</td>
                   <td>{{$blog->title}}</td>
                   <td> <img style="width: 100px;height:80px;" src={{"/front/images/blog/medium-size/$blog->image"}}></td>
                   <td>{{$blog->category}}</td>
                   <td>
                       <?php
                       echo \Carbon\Carbon::createFromTimeStamp(strtotime($blog->created_at))->diffForHumans()
                       ?>
                       </td>
                   <td class="text-right">
                    <a class="btn btn-sm btn-success" 
                    href="/admin/blog/edit/{{$blog->id}}"> 
                        <i class="fas fa-edit"></i>
                    </a>
                    
                    <a href="#" class="btn btn-sm btn-danger" id="btndelete" onclick="removeRowBlog({{$blog->id}},'/admin/blog/destroy')" > 
                         <i class="fas fa-trash"></i>
                    </a>
                   </td>
               </tr>
           @endforeach
       </tbody>
   </table>
{{-- <form action="" method="POST" id="form_delete">
    @csrf @method('DELETE')
</form> --}}
<hr>
<div class="">
    {{$data->appends(request()->all())->links()}}
</div>
  
 @endsection
{{-- @section('js')
    <script>
       $('#btndelete').click(
        //    function(ev){
            // ev.prevenDefault();
            // var _href=$(this).attr('href')
            // alert(_href)
            // alert(123)
        //    }
       )
        </script> --}}
{{-- @endsection --}}