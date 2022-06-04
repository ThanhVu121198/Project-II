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
               <th>name</th>
               <th>Total product</th>
               <th>status</th>
               <th>create at</th>
               <th>update at</th>
               <th class="text-right">actions</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($data as $cat)
               <tr>
                   <td>{{$cat->id}}</td>
                   <td>{{$cat->name}}</td>
                   <td>{{$cat->products? $cat->products->count():0}}</td>
                   <td>
                       @if($cat->status==0)
                       <span class="badge bg-primary">still selling</span>
                       @else
                       <span class="badge bg-secondary">stop selling</span>
                       @endif
                   </td>
                   <td>{{$cat->created_at->format('m-d-y')}}</td>
                   <td>{{$cat->updated_at->format('m-d-y')}}</td>
                   <td class="text-right">
                  
                    <a class="btn btn-sm btn-success"> 
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="{{}}" class="btn btn-sm btn-danger btndelete"> 
                        <i class="fas fa-trash"></i>
                    </a>
                   </td>
               </tr>
           @endforeach
       </tbody>
   </table>
   <form action="">
    @csrf @method('DELETE')
   </form>
    <hr>
    <div class="">
        {{$data->appends(request()->all())->links()}}
    </div>   
@endsection
@section('js')
    <script>
       $('.btndelete').click(
           function(ev){
            ev.prevenDefault();
            var _href=$(this).attr('href')
            alert(_href)
           }
       )
        </script>
@endsection