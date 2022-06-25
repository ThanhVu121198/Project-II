@extends('front.layout.master')

@section('title', 'Home')

@section('body')

    {{-- <form action="/addCartHome" method="post">
        @csrf --}}
        <!-- Begin Slider Area -->
        <div class="slider-area">

            <!-- Main Slider -->
            <div class="swiper-container main-slider swiper-arrow with-bg_white">
                <div class="swiper-wrapper">
                    <div class="swiper-slide animation-style-01">
                        <div class="slide-inner style-1 bg-height" data-bg-image="front/images/slider/bg/1-1.jpg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 order-2 order-lg-1 align-self-center">
                                        <div class="slide-content text-black">
                                            <span class="offer">65% Off</span>
                                            <h2 class="title">New Plant</h2>
                                            <p class="short-desc">Pronia, With 100% Natural, Organic & Plant Shop.</p>
                                            <div class="btn-wrap">
                                                <a class="btn btn-custom-size xl-size btn-pronia-primary" href="shop.html">Discover Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 order-1 order-lg-2">
                                        <div class="inner-img">
                                            <div class="scene fill">
                                                <div class="expand-width" data-depth="0.2">
                                                    <img src="front/images/slider/inner-img/1-1-524x617.png" alt="Inner Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animation-style-01">
                        <div class="slide-inner style-1 bg-height" data-bg-image="front/images/slider/bg/1-1.jpg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 order-2 order-lg-1 align-self-center">
                                        <div class="slide-content text-black">
                                            <span class="offer">65% Off</span>
                                            <h2 class="title">New Plant</h2>
                                            <p class="short-desc">Pronia, With 100% Natural, Organic & Plant Shop.</p>
                                            <div class="btn-wrap">
                                                <a class="btn btn-custom-size xl-size btn-pronia-primary" href="shop.html">Discover Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 order-1 order-lg-2">
                                        <div class="inner-img">
                                            <div class="scene fill">
                                                <div class="expand-width" data-depth="0.2">
                                                    <img src="front/images/slider/inner-img/1-2-524x617.png" alt="Inner Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination d-md-none"></div>

                <!-- Add Arrows -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>
        <!-- Slider Area End Here -->

        <!-- Begin Shipping Area -->
        <div class="shipping-area section-space-top-100">
            <div class="container">
                <div class="shipping-bg">
                    <div class="row shipping-wrap">
                        <div class="col-lg-4 col-md-6">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="front/images/shipping/icon/car.png" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h2 class="title">Free Shipping</h2>
                                    <p class="short-desc mb-0">Capped at $319 per order</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="front/images/shipping/icon/card.png" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h2 class="title">Safe Payment</h2>
                                    <p class="short-desc mb-0">With our payment gateway</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="front/images/shipping/icon/service.png" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h2 class="title">Best Services</h2>
                                    <p class="short-desc mb-0">Friendly & Supper Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shipping Area End Here -->

        <!-- Begin Product Area -->
        <div class="product-area section-space-top-100">
            <div class="container">
                <div class="section-title-wrap">
                    <h2 class="section-title mb-0">Our Products</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav product-tab-nav tab-style-1" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="active" id="featured-tab" data-bs-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">
                                    Featured
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="bestseller-tab" data-bs-toggle="tab" href="#bestseller" role="tab" aria-controls="bestseller" aria-selected="false">
                                    Bestseller
                                </a>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                                <a id="latest-tab" data-bs-toggle="tab" href="#latest" role="tab" aria-controls="latest" aria-selected="false">
                                    Latest
                                </a>
                            </li> --}}
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                <div class="product-item-wrap row">
                                    @foreach($featureProducts as $featureProduct)

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="shop/product/{{ $featureProduct->id }}">
                                                    <P>
                                                        <img class="primary-img" src="front/images/product/{{ $featureProduct->productImages[0]->path }}" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/{{ $featureProduct->productImages[1]->path }}" alt="Product Images">
                                                    </P>
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                        <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                            <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/addCartHome/{{ $featureProduct->id }}" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <button style = "padding: 0px; border: 0px solid;" type="submit" >
                                                                    <i class="pe-7s-cart"></i>
                                                                </button>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="shop.html">{{ $featureProduct->name }}</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">${{ $featureProduct->price }}.00</span>
                                                </div>
                                                <input type="hidden" name="product_id" value="{{ $featureProduct->id }}">
                                                <input type="hidden" name="num_product" value="1">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bestseller" role="tabpanel" aria-labelledby="bestseller-tab">
                                <div class="product-item-wrap row">
                                    @foreach($bestSellerProducts as $bestSellerProduct)
                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="shop/product/{{$bestSellerProduct->id }}">
                                                    <img class="primary-img" src="front/images/product/{{ $bestSellerProduct->productImages[0]->path }}" alt="Product Images">
                                                    <img class="secondary-img" src="front/images/product/{{ $bestSellerProduct->productImages[1]->path }}" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                        <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                            <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/addCartHome/{{ $featureProduct->id }}" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <button style = "padding: 0px; border: 0px solid;" type="submit" >
                                                                    <i class="pe-7s-cart"></i>
                                                                </button>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="shop.html">{{ $bestSellerProduct->name }}</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">${{ $bestSellerProduct->price }}.00</span>
                                                </div>
                                                <input type="hidden" name="product_id" value="{{ $bestSellerProduct->id }}">
                                                <input type="hidden" name="num_product" value="1">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- <div class="tab-pane fade" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                                <div class="product-item-wrap row">
                                    @foreach($latestProducts as $latestProduct)
                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="shop.html">
                                                    <img class="primary-img" src="front/images/product/{{ $latestProduct->productImages[0]->path }}" alt="Product Images">
                                                    <img class="secondary-img" src="front/images/product/{{ $latestProduct->productImages[1]->path }}" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                        <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                            <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/addCartHome/{{ $featureProduct->id }}" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <button style = "padding: 0px; border: 0px solid;" type="submit" >
                                                                    <i class="pe-7s-cart"></i>
                                                                </button>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="shop.html">{{ $latestProduct->name }}</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">${{ $latestProduct->price }}.00</span>
                                                </div>
                                                <input type="hidden" name="product_id" value="{{ $latestProduct->id }}">
                                                <input type="hidden" name="num_product" value="1">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->

        <!-- Begin Banner Area -->
        <div class="banner-area section-space-top-90">
            <div class="container">
                <div class="row g-min-30 g-4">
                    <div class="col-lg-8">
                        <div class="banner-item img-hover-effect">
                            <div class="banner-img">
                                <img src="front/images/banner/1-1-770x300.jpg" alt="Banner Image">
                            </div>
                            <div class="banner-content text-position-left">
                                <span class="collection">Collection Of Cactus</span>
                                <h3 class="title">Pottery Pots & <br> Plant</h3>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size btn-pronia-primary" href="shop/1">Shop
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-item img-hover-effect">
                            <div class="banner-img">
                                <img src="front/images/banner/1-2-370x300.jpg" alt="Banner Image">
                            </div>
                            <div class="banner-content text-position-center">
                                <span class="collection">New Collection</span>
                                <h3 class="title">Plant Port</h3>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size lg-size btn-pronia-primary" href="shop/2">Shop
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-item img-hover-effect">
                            <div class="banner-img">
                                <img src="front/images/banner/1-3-370x300.jpg" alt="Banner Image">
                            </div>
                            <div class="banner-content text-position-center">
                                <span class="collection">New Collection</span>
                                <h3 class="title">Plant Port</h3>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size lg-size btn-pronia-primary" href="shop/3">Shop
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="banner-item img-hover-effect">
                            <div class="banner-img">
                                <img src="front/images/banner/1-4-770x300.jpg" alt="Banner Image">
                            </div>
                            <div class="banner-content text-position-left">
                                <span class="collection">Collection Of Cactus</span>
                                <h3 class="title">Hanging Pots & <br> Plant</h3>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size lg-size btn-pronia-primary" href="shop/4">Shop
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End Here -->

        <!-- Begin Product Area -->
        <div class="product-area section-space-top-100">
            <div class="container">
                <div class="row">
                    <div class="section-title-wrap without-tab">
                        <h2 class="section-title">New Products</h2>
                        <p class="section-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature
                        </p>
                    </div>

                        <div class="col-lg-12">
                            <div class="swiper-container product-slider">
                                <div class="swiper-wrapper">
                                    @foreach($newProducts as $featureProduct)
                                    <div class="swiper-slide product-item">
                                        <div class="product-img">
                                            <a href="shop.html">
                                                @if(count($featureProduct->productImages) == 1) 
                                                    <img class="primary-img" src="front/images/product/{{ $featureProduct->productImages[0]->path }}" alt="Product Images">
                                                    <img class="secondary-img" src="front/images/product/{{ $featureProduct->productImages[0]->path }}" alt="Product Images">
                                                @elseif(count($featureProduct->productImages) >= 2)
                                                    <img class="primary-img" src="front/images/product/{{ $featureProduct->productImages[0]->path }}" alt="Product Images">
                                                    <img class="secondary-img" src="front/images/product/{{ $featureProduct->productImages[1]->path }}" alt="Product Images">
                                                @endif
                                            </a>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </li>
                                                    <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                        <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/addCartHome/{{ $featureProduct->id }}" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                            <button style = "padding: 0px; border: 0px solid;" type="submit" >
                                                                <i class="pe-7s-cart"></i>
                                                            </button>
                                                        </a>
                                                        {{-- <a href="/addCartHome" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-cart"></i>
                                                        </a> --}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="shop.html">{{ $featureProduct->name }}</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">${{ $featureProduct->price }}.00</span>
                                            </div>
                                            {{-- carts --}}
                                            <input type="hidden" name="product_id" value="{{ $featureProduct->id }}">
                                            <input type="hidden" name="num_product" value="1">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
        <!-- Product Area End Here -->

        <!-- Begin Testimonial Area -->
        <div class="testimonial-area section-space-top-90 section-space-bottom-95">
            <div class="container-fluid">
                <div class="testimonial-bg" data-bg-image="front/images/testimonial/bg/1-1-1820x443.jpg">
                    <div class="section-title-wrap">
                        <h2 class="section-title">What Say Client</h2>
                        <p class="section-desc mb-0">Contrary to popular belief, Lorem Ipsum is not simply random
                            text. It has roots in a piece of classical Latin literature
                        </p>
                    </div>
                </div>
                <div class="container custom-space">
                    <div class="swiper-container testimonial-slider with-bg">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide testimonial-item">
                                <div class="user-info mb-3">
                                    <div class="user-shape-wrap">
                                        <div class="user-img">
                                            <img src="front/images/testimonial/user/1.png" alt="User Image">
                                        </div>
                                    </div>
                                    <div class="user-content text-charcoal">
                                        <h4 class="user-name mb-1">Phoenix Baker</h4>
                                        <span class="user-occupation">Client</span>
                                    </div>
                                </div>
                                <p class="user-comment mb-6">Lorem ipsum dolor sit amet, conse adipisic elit, sed do eiusmod
                                    tempo
                                    incididunt ut labore et dolore. magna
                                </p>
                            </div>
                            <div class="swiper-slide testimonial-item">
                                <div class="user-info mb-3">
                                    <div class="user-shape-wrap">
                                        <div class="user-img">
                                            <img src="front/images/testimonial/user/2.png" alt="User Image">
                                        </div>
                                    </div>
                                    <div class="user-content text-charcoal">
                                        <h4 class="user-name mb-1">Phoenix Baker</h4>
                                        <span class="user-occupation">Client</span>
                                    </div>
                                </div>
                                <p class="user-comment mb-6">Lorem ipsum dolor sit amet, conse adipisic elit, sed do eiusmod
                                    tempo
                                    incididunt ut labore et dolore. magna
                                </p>
                            </div>
                            <div class="swiper-slide testimonial-item">
                                <div class="user-info mb-3">
                                    <div class="user-shape-wrap">
                                        <div class="user-img">
                                            <img src="front/images/testimonial/user/3.png" alt="User Image">
                                        </div>
                                    </div>
                                    <div class="user-content text-charcoal">
                                        <h4 class="user-name mb-1">Phoenix Baker</h4>
                                        <span class="user-occupation">Client</span>
                                    </div>
                                </div>
                                <p class="user-comment mb-6">Lorem ipsum dolor sit amet, conse adipisic elit, sed do eiusmod
                                    tempo
                                    incididunt ut labore et dolore. magna
                                </p>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination without-absolute"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End Here -->

        <!-- Begin Brand Area -->
        <div class="brand-area section-space-bottom-100">
            <div class="container">
                <div class="brand-bg" data-bg-image="front/images/brand/bg/1-1170x300.jpg">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="swiper-container brand-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a class="brand-item" href="#">
                                            <img src="front/images/brand/1-1.png" alt="Brand Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="brand-item" href="#">
                                            <img src="front/images/brand/1-2.png" alt="Brand Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="brand-item" href="#">
                                            <img src="front/images/brand/1-3.png" alt="Brand Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="brand-item" href="#">
                                            <img src="front/images/brand/1-4.png" alt="Brand Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="brand-item" href="#">
                                            <img src="front/images/brand/1-5.png" alt="Brand Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End Here -->

        <!-- Begin Blog Area -->
        <div class="blog-area section-space-bottom-100">
            <div class="container">
                <div class="section-title-wrap">
                    <h2 class="section-title mb-7">Latest Blog</h2>
                    <p class="section-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                        roots in a piece of classical Latin literature
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container blog-slider">
                            <div class="swiper-wrapper">
                                @foreach($newBlogs as $newBlog)
                                <div class="swiper-slide">
                    
                                        <div class="blog-item">
                                            <div class="blog-content">
                                                <div class="blog-meta">
                                                    <ul>
                                                        <li class="author">
                                                            <a href="#">By: Admin</a>
                                                        </li>
                                                        <li class="date">{{$newBlog->created_at}}</li>
                                                    </ul>
                                                </div>
                                                <h2 class="title">
                                                    <a href="/blog/{{$newBlog->id}}">{{$newBlog->title}}</a>
                                                </h2>
                                                {{-- <p class="short-desc mb-7">{{$newBlog->category}}</p> --}}
                                            </div>
                                            <div class="blog-img img-hover-effect">
                                                <a href="/blog/{{$newBlog->id}}">
                                                    <img class="img-full" src="front/images/blog/medium-size/{{$newBlog->image}}" alt="Blog Image">
                                                </a>
                                            </div>
                                        </div>
                                    
                                </div>
                                @endforeach
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End Here -->
    {{-- </form> --}}
@endsection
