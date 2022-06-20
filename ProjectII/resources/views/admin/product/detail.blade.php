@extends('admin.adminmain')
@section('content')
    {{-- <h2>{{$product->name}}</h2>
    {{-- @foreach ($img as $item)
        <p>{{$item->id}}
        </p>
    @endforeach --}}
    <div class="row">
    <div class="col-md-8" style="border: 1px black solid">
        <h2 class="product_name" style="text-align: center"><span>Product Name:</span>{{$product->name}}</h2>
        <p><span>Product Name:</span> {{$product->name}}</p>
        <p> {{$product->description}}</p>
        <p>{{$product->content}}</p>
        <p>{{$product->price}}$</p>
        <p>{{$product->qty}}</p>
        <p>{{$product->discount}}%</p>
        <p>{{$product->weight}}</p>
        @if ($product->featured==0)
            <p><span class="laber">featured: </span>featured</p>
        @else
            <p><span class="laber">featured: </span>no featured</p>
        @endif
        @if($product->status==0)
          <p><span class="laber">status: </span>still selling</p>
          @else
          <p><span class="laber">status: </span>stop selling</p>
          @endif
            <p>
                <span class="laber">created at: </span><?php
                    echo \Carbon\Carbon::createFromTimeStamp(strtotime($product->created_at))->diffForHumans()
                    ?></p>
    </div>

    <hr>

    <div class="table_detail col-12">
        <h4>product Detail</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>color</th>
                    <th>size</th>
                    <th>qty</th>
                    <th>create at</th>
                    <th class="text-right">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detail as $dt)
                    <tr>
                        <td>{{$dt->id}}</td>
                        <td>{{$dt->color}}</td>
                        <td>{{$dt->size}}</td>
                        <td>{{$dt->qty}}</td>
                        <td>
                        <?php
                       echo \Carbon\Carbon::createFromTimeStamp(strtotime($dt->created_at))->diffForHumans()
                       ?>
                       </td>
                       <td class="text-right">
                        <a href="/admin/product/deletedetail/{{$dt->id}}" class="btn btn-sm btn-danger" id="btndeletr" onclick="return confirm('are you sure ?')">
                            <i class="fas fa-trash"></i>
                       </a>
                       </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
    <hr>

   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Add Detail</button>

  <!-- Modal -->
    <form action="/admin/product/adddetail/{{$product->id}}" method="POST">
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="row mb-2">
          <label for="color" class="">color:</label>
          <input type="text" name="color" class="form-control ">
        </div>
        <div class="row mb-2">
          <label for="qty" class="col-2">qty:</label>
          <input type="number" name="qty" class="form-control">
        </div>
        <div class="row mb-2">
          <label for="size" class="">size:</label>
          <input type="number" name="size" class="form-control">
        </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">submit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
  @csrf
</form>
        {{-- <a href="/admin/product/addimg/{{$product->id}}" class="btn btn-primary">add a new image</a> --}}

    </div>

    <div class="col-md-4">
        <h4>Product Image</h4>
        @foreach ($img as $item)
            <div>
                <img class="col-10" style="height:300px;" src="/front/images/product/{{$item->path}}" alt="">
                <a href="/admin/product/deleteimg/{{$item->id}}" class="btn btn-sm btn-danger" id="btndelete" onclick="return confirm('are you sure ?')">
                      {{-- <a href="/admin/product/destroyimg/{{$item->id}}" class="btn btn-sm btn-danger" id="btndelete" onclick="removeRowImage({{$item->id}},'/admin/product/deleteimg')" >  --}}
                    <i class="fas fa-trash"></i>
               </a>
                <hr>
                {{-- <img class="col-12" style="height:150px" src='front/images/product/small-size/{{$item->path}}'> --}}
                {{-- <img class="col-12" style="height: 30px;" src="front/images/product/small-size/dsBuffer.bmp.png" alt=""> --}}
            </div>
        @endforeach
        <!-- Button trigger modal -->
<hr>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">Add Image</button>

  <!-- Modal -->
    <form action="/admin/product/addimg/{{$product->id}}" method="POST" enctype="multipart/form-data">
  <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="custom-file col-12">
                <input type="file" class="custom-file-input" name="img" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose image</label>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">submit</button>
        </div>

      </div>
    </div>
  </div>
  @csrf
</form>
        {{-- <a href="/admin/product/addimg/{{$product->id}}" class="btn btn-primary">add a new image</a> --}}
    </div>
</div>
<hr>
<div class="row"> <a href="/admin/product/list" class="btn btn-primary btn-lg cm" id="confirn">confirm</a></div>

@endsection
