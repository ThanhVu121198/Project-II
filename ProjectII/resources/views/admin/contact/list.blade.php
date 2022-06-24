@extends('admin.adminmain')
@section('content')
   <table class="table">
       <thead>
           <tr>
            <th>id</th>
            <th>name</th>
            <th>phone</th>
            <th>email</th>
            <th>created at</th>
            <th>action</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($contacts as $ct)
               <tr>
                   <td>{{$ct->id}}</td>
                   <td>{{$ct->first_name." ".$ct->last_name}}</td>
                   <td>{{$ct->phone}}</td>
                   <td>{{$ct->email}}</td>
                   <td><p>
                    <?php
                        echo \Carbon\Carbon::createFromTimeStamp(strtotime($ct->created_at))->diffForHumans()
                        ?></p></td>
                   <td><a class="btn btn-sm btn-primary" 
                   href="contactread/{{$ct->id}}"> 
                   <i class="fas fa-eye"></i>
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
    {{$contacts->appends(request()->all())->links()}}
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