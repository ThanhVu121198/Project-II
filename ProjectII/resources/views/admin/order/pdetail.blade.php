@extends('admin.adminmain')
@section('content')

    <div class="row">
    <div class="col-md-12 product-box">
        <div class="product">
        <p><b style="">Customer name:</b> <span style="" class="product_name">{{$customer->first_name." ".$customer->last_name}}</span> </p>
        <span class="laber">Phone: </span>{{$customer->phone}}
        <br>
        <span class="laber">email: </span>{{$customer->email}}
        <div class="num">
        <p><span class="laber">Company name: </span>{{$customer->company_name}}</p>
        <p><span class="laber">address: </span>{{$customer->address}}</p>
        <p><span class="laber">town: </span>{{$customer->town}}</p>
        <p><span class="laber">customer note: </span>{{$customer->checkout_mess}} kg</p>
        </div>
        @if ($customer->status==0)
            <p><span class="laber">status: </span>new order</p>
        @elseif($customer->status==1)
            <p><span class="laber">status: </span>Processing</p>
        @elseif($customer->status==2){
                <p><span class="laber">status: </span>complete</p>
            }
        @endif
      
            <p>
                <span class="laber">created at: </span><?php
                    echo \Carbon\Carbon::createFromTimeStamp(strtotime($customer->created_at))->diffForHumans()
                    ?></p>
            </div>
    </div>
    <div class="cart col-12">

        <table class="table">
            <thead>
                <tr>
                    <th>stt</th>
                    <th>quantity</th>
                    <th>buy_price</th>
                    <th>buy_price</th>
                    <th>buy_price</th>
                </tr>
            </thead>
            <?php 
            $stt=1;
            $allprice=0;
            ?>
            <tbody>
                @foreach ($carts as $cart)
               <?php
               $allprice=$allprice+$cart->quantity*$cart->buy_price;
               ?>
                <tr>
                    <td>{{$stt++}}</td>
                    <td>{{$cart->quantity}}</td>
                    <td>{{$cart->buy_price}}</td>
                    <td>{{$cart->product->name}}</td>
                    {{-- <td><img src="front\images\product\" alt=""> --}}
                       <td> <img style="width: 20vw;" src="/front/images/product/{{$cart->product->productImages[0]->path}}" alt=""></td>
                </tr>   
            @endforeach
        </tbody>
    </table>
    <h3>total money: {{number_format($allprice)}}<span>$</span></h3>
                 
    </div>

 

<hr>
<div class="row"> 
    <a href="/admin/order/pc/{{$customer->id}}" class="btn btn-primary btn-lg cm col-12" id="confirn">processing confirmation</a></div>

@endsection 