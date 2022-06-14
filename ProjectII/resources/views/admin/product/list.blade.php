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
               <th>product name</th>
               <th>category</th>
               <th>detail total</th>
               <th>image total</th>
               {{-- <th>content</th> --}}
               <th>price</th>
               <th>qty</th>
               <th>discount</th>
               <th>featured</th>
                <th>status</th>
               <th>create at</th>
               <th>actions</th>
               <th class="text-center">link</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($data as $product)
               <tr>
                   <td>{{$product->id}}</td>
                   <td>{{$product->name}}</td>
                   <td>{{$product->ProductCategory->name}}</td>
                   <td>{{$product->productDetails ? $product->productDetails->count():0}}</td>
                   <td>{{$product->productImages ? $product->productImages->count():0}}</td>
                   {{-- <td>{{$product->content}}</td> --}}
                   <td>{{$product->price}}</td>
                   <td>{{$product->qty}}</td>
                   <td>{{$product->discount}}</td>
                   <td>
                    @if($product->featured==0)
                    <span class="badge bg-primary">featured</span>
                    @else
                    <span class="badge bg-secondary">not featured</span>
                    @endif
                </td>
                   <td>
                    @if($product->status==0)
                    <span class="badge bg-primary">still selling</span>
                    @else
                    <span class="badge bg-secondary">stop selling</span>
                    @endif
                </td>
                   <td>
                       <?php
                       echo \Carbon\Carbon::createFromTimeStamp(strtotime($product->created_at))->diffForHumans()
                       ?>
                       </td>
                   <td>
                    <a class="btn btn-sm btn-success" 
                    href="/admin/blog/edit/{{$product->id}}"> 
                        <i class="fas fa-edit"></i>
                    </a>
                    
                    <a href="#" class="btn btn-sm btn-danger" id="btndelete" onclick="removeRowBlog({{$product->id}},'/admin/blog/destroy')" > 
                         <i class="fas fa-trash"></i>
                    </a>
                   </td>
                   <td class="text-right">
                    <a  href="/admin/product/productget/{{$product->id}}"><i class="fas fa-eye"></i> See details</a></td>
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