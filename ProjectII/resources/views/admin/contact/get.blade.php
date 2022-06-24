@extends('admin.adminmain')
@section('content')

    <div class="row">
    <div class="col-md-12 product-box">
        <div class="product">
        <p><b style="">Customer name:</b> <span style="" class="product_name">{{$contact->first_name." ".$contact->last_name}}</span> </p>
        <span class="laber">Phone: </span>{{$contact->phone}}
        <br>
        <span class="laber">email: </span>{{$contact->email}}
        <div class="num">
        <p><span class="laber">mess: </span>{{$contact->mess}}</p>
        </div>
        @if ($contact->status==0)
            <p><span class="laber">status: </span>new message</p>
        @elseif($contact->status==1)
            <p><span class="laber">status: </span>reading message</p>
        @endif

            <p>
                <span class="laber">created at: </span><?php
                    echo \Carbon\Carbon::createFromTimeStamp(strtotime($contact->created_at))->diffForHumans()
                    ?></p>
            </div>
    </div>
   
    </div>




<hr>
<div class="row" style="margin:30px"> 
    <a href="/admin/readctt/{{$contact->id}}" class="btn btn-primary btn-lg cm" id="confirn"><i class="fas fa-check"></i> read confirmation</a>
    </div>
@endsection
