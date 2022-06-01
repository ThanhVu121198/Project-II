@extends('front.layout.master')

@section('title', 'WishList')

@section('body')
        <!-- Main Header Area End Here -->

        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="front/images/breadcrumb/bg/1-1-1919x388.jpg">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h2 class="breadcrumb-heading">Wishlist Page</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>Wishlist</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wishlist-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="javascript:void(0)">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="product_remove">remove</th>
                                                <th class="product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="product-price">Unit Price</th>
                                                <th class="product-stock-status">Stock Status</th>
                                                <th class="cart_btn">add to cart</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product_remove">
                                                    <a href="#">
                                                        <i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true"
                                                    data-tippy-animation="shift-away" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="front/images/product/small-size/1-1-112x124.png" alt="Wishlist Thumbnail">
                                                    </a>
                                                </td>
                                                <td class="product-name"><a href="#">American Marigold</a></td>
                                                <td class="product-price"><span class="amount">$23.45</span></td>
                                                <td class="product-stock-status"><span class="in-stock">in stock</span></td>
                                                <td class="cart_btn"><a href="#">add to cart</a></td>
                                            </tr>
                                            <tr>
                                                <td class="product_remove">
                                                    <a href="#">
                                                        <i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true"
                                                    data-tippy-animation="shift-away" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="front/images/product/small-size/1-2-112x124.png" alt="Wishlist Thumbnail">
                                                    </a>
                                                </td>
                                                <td class="product-name"><a href="#">Black Eyed Susan</a></td>
                                                <td class="product-price"><span class="amount">$25.45</span></td>
                                                <td class="product-stock-status"><span class="in-stock text-danger">out
                                                stock</span></td>
                                                <td class="cart_btn"><a href="#">add to cart</a></td>
                                            </tr>
                                            <tr>
                                                <td class="product_remove">
                                                    <a href="#">
                                                        <i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true"
                                                    data-tippy-animation="shift-away" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="front/images/product/small-size/1-3-112x124.png" alt="Wishlist Thumbnail">
                                                    </a>
                                                </td>
                                                <td class="product-name"><a href="#">Bleeding Heart</a></td>
                                                <td class="product-price"><span class="amount">$30.45</span></td>
                                                <td class="product-stock-status"><span class="in-stock">in stock</span></td>
                                                <td class="cart_btn"><a href="#">add to cart</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->

        <!-- Begin Footer Area -->
        @endsection 