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
        <p><span>Product Name:</span> {{$product->description}}</p>
        <p>{{$product->content}}</p>
        <p>{{$product->price}}$</p>
        <p>{{$product->qty}}</p>
        <p>{{$product->discount}}%</p>
        <p>{{$product->weight}}</p>
        @if ($product->featured==0)
            <p>featured</p>
        @else
            <p>no featured</p>
        @endif
        <p>{{$product->featured}}</p>
        <p>{{$product->status}}</p>
        <p>{{$product->created_at}}</p>
        <hr>
    <div class="table_detail col-12">
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
                        <td>{{$dt->id}}</td> 
                        <td>{{$dt->id}}</td>
                        <td>{{$dt->id}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
       
        


    </div>
    
    <div class="col-md-4">
        <h2>image</h2> 
        @foreach ($img as $item)
            <div>
                <img class="col-8" style="height:200qpx;" src="/front/images/product/{{$item->path}}" alt="">
                {{-- <img class="col-12" style="height:150px" src='front/images/product/small-size/{{$item->path}}'> --}}
                {{-- <img class="col-12" style="height: 30px;" src="front/images/product/small-size/dsBuffer.bmp.png" alt=""> --}}
            </div>
        @endforeach
    </div>
</div>
@endsection
