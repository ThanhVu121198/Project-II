@extends('front.layout.master')

@section('title', 'Cart')

@section('body')
        <!-- Main Header Area End Here -->

        <!-- Begin Main Content Area -->
        <!-- @if(count($products) != 0) -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="front/images/breadcrumb/bg/1-1-1919x388.jpg">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h2 class="breadcrumb-heading">Cart Page</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>Cart Page</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="javascript:void(0)" method="post" >
                                <div class="table-content table-responsive">
                                @php $total = 0; @endphp
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="product_remove">remove</th>
                                                <th class="product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="product-price">Unit Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $key => $product)
                                            @php
                                                $price = $product->price;
                                                $priceEnd = $price * $carts[$product->id];
                                                $total += $priceEnd;
                                            @endphp
                                            <tr>
                                                <td class="product_remove">
                                                    <a href="/cart/delete/{{ $product->id }}">
                                                        <i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true"
                                                    data-tippy-animation="shift-away" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img style="max-height: 200px" src="front/images/product/{{ $product->productImages[0]->path }}" alt="Cart Thumbnail">
                                                    </a>
                                                </td>
                                                <td class="product-name"><a href="#">{{ $product->name }}</a></td>
                                                <td class="product-price"><span class="amount">${{ number_format($product->price, 0, '', '.') }}.00</span></td>
                                                <td class="quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" name="num_product[{{ $product->id }}]" value="{{ $carts[$product->id] }}" type="text">
                                                        <div class="dec qtybutton">
                                                            <i class="fa fa-minus"></i>
                                                        </div>
                                                        <div class="inc qtybutton">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">${{ $priceEnd }}.00</span></td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                                <input class="button mt-xxs-30" name="apply_coupon" value="Apply coupon" type="submit">
                                            </div>
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Update cart" type="submit" formaction="/update-cart">

                                            </div>
                                            @csrf
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal <span>${{ $total }}.00</span></li>
                                                <li>Total <span>${{ $total }}.00</span></li>
                                            </ul>
                                            <a href="./checkOut">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @else
            <div style ><h2>Giỏ hàng trống</h2></div>
        @endif
        <!-- Main Content Area End Here -->
        @endsection
        <!-- Begin Footer Area -->
