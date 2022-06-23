@extends('admin.adminmain')
@section('content')
   <table class="table">
       <thead>
           <tr>
               <th>id</th>
               <th>first name</th>
               <th>company name</th>
               <th>Delivery address</th>
               <th>town</th>
               <th>phone</th>
               <th>note</th>
               <th>product total</th>
               <th>create at</th>
               <th class="text-right">actions</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($customer as $cs)
               <tr>
                   <td>{{$cs->id}}</td>
                   <td>{{$cs->first_name}}</td>
                   <td>{{$cs->company_name}}</td>
                   <td>{{$cs->address}}</td>
                   <td>{{$cs->town}}</td>
                   <td>{{$cs->phone}}</td>
                   <td>{{$cs->checkout_mess}}</td>
                   <td>{{$cs->carts ? $cs->carts->count():0}}</td>
                   <td>
                       <?php
                       echo \Carbon\Carbon::createFromTimeStamp(strtotime($cs->created_at))->diffForHumans()
                       ?>
                       </td>
                   <td class="text-right">
                    <a class="btn btn-sm btn-primary" 
                 href="/admin/order/detail/{{$cs->id}}"> 
                 <i class="fas fa-eye"></i>
                    </a>

                  <a href="/admin/order/delete/{{$cs->id}}" class="btn btn-sm btn-danger" id="btndelete" onclick="return confirm('Do you want to delete this invoice and related information ?')" > 
                         <i class="fas fa-trash"></i>
                     </a>
                   </td>
               </tr>
           @endforeach
       </tbody>
   </table>

<hr>
<div class="">
    {{$customer->appends(request()->all())->links()}}
</div>
@endsection
