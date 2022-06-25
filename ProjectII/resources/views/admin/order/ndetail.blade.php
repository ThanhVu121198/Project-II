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
        <p><span class="laber">customer note: </span>{{$customer->checkout_mess}}</p>
        </div>
        @if ($customer->status==0)
            <p><span class="laber">status: </span>new order</p>
        @elseif($customer->status==1)
            <p><span class="laber">status: </span>Processing</p>
        @elseif($customer->status==2)
            <p><span class="laber">status: </span>complete</p>
            
        @elseif($customer->status==2)
            <p><span class="laber">status: </span>cancel</p>
            
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
                    <th>product name</th>
                    <th>image</th>
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
    <hr>
    <h3 style="padding: 30px">total money: {{number_format($allprice)}}<span>$</span></h3>
                 
    </div>
<div class="row" style="padding:30px"> 
    <hr>
    <a href="/admin/order/cd/{{$customer->id}}" class="btn btn-primary btn-lg" id="confirn"><i class="fas fa-shipping-fast"></i> confirmation</a>
    <a href="/admin/order/cs/{{$customer->id}}"
        class="btn btn-danger btn-lg" id="btndelete" style="margin-left: 20px;"
        onclick="return confirm('Do you want to cancel this order ?')" > 
       <i class="fas fa-window-close"></i> cancel order</a>
</div>

@endsection 