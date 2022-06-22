@extends('front.layout.master')

@section('title', 'Product')

@section('body')

        <!-- Begin Main Content Area  -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="front/images/breadcrumb/bg/1-1-1919x388.jpg">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h2 class="breadcrumb-heading">Single Product</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>Single Product</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-product-area section-space-top-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-product-img">
                                <div class="swiper-container single-product-slider">
                                    <div class="swiper-wrapper">
                                        @foreach($product->productImages as $productImage)
                                        <div class="swiper-slide">
                                            <a href="front/images/product/large-size/1-1-570x633.jpg" class="single-img gallery-popup">
                                                <img class="img-full" src="front/images/product/{{$productImage->path}}" alt="Product Image">
                                            </a>
                                        </div>
                                        @endforeach
                                        {{-- <div class="swiper-slide">
                                            <a href="front/images/product/large-size/1-2-570x633.jpg" class="single-img gallery-popup">
                                                <img class="img-full" src="front/images/product/large-size/1-2-570x633.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="front/images/product/large-size/1-3-570x633.jpg" class="single-img gallery-popup">
                                                <img class="img-full" src="front/images/product/large-size/1-3-570x633.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="front/images/product/large-size/1-4-570x633.jpg" class="single-img gallery-popup">
                                                <img class="img-full" src="front/images/product/large-size/1-4-570x633.jpg" alt="Product Image">
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="thumbs-arrow-holder">
                                    <div class="swiper-container single-product-thumbs">
                                        <div class="swiper-wrapper">
                                            @foreach($product->productImages as $productImage)
                                            <a class="swiper-slide">
                                                <img class="img-full" src="front/images/product/{{$productImage->path}}" alt="Product Thumnail">
                                            </a>
                                            @endforeach
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class=" thumbs-button-wrap d-none d-md-block">
                                            <div class="thumbs-button-prev">
                                                <i class="pe-7s-angle-left"></i>
                                            </div>
                                            <div class="thumbs-button-next">
                                                <i class="pe-7s-angle-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-5 pt-lg-0">
                            <!-- @if ($product->price !== NULL) -->
                                <div class="single-product-content">
                                    <h2 class="title">{{$product->name}}</h2>
                                    <div class="price-box">
                                        <span class="new-price">${{$product->price}}.00</span>
                                    </div>
                                    <div class="rating-box-wrap pb-4">
                                        <div class="rating-box">
                                            <ul>
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($i <= $avgRating)
                                                        <li><i class="fa fa-star"></i></li>
                                                    @endif
                                                @endfor
                                                {{-- <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li> --}}
                                            </ul>
                                        </div>
                                        <div class="review-status">
                                            <a href="#">( {{count($product->productComments)}} Review )</a>
                                        </div>
                                    </div>
                                    <p class="short-desc">{{$product->description}}</p>

                                    <form action="/add-cart" method="post">
                                        <ul class="quantity-with-btn">
                                            <li class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" name="num_product" value="1" type="text">
                                                </div>
                                            </li>
                                            <li class="add-to-cart">
                                                <button type="submit" class="btn btn-custom-size lg-size btn-pronia-primary">
                                                    Add to cart
                                                </button>
                                                <!-- <a class="btn btn-custom-size lg-size btn-pronia-primary">Add to
                                                    cart</a> -->
                                            </li>
                                            <li class="wishlist-btn-wrap">
                                                <a class="custom-circle-btn" href="wishlist.html">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </li>
                                            <li class="compare-btn-wrap">
                                                <a class="custom-circle-btn" href="compare.html">
                                                    <i class="pe-7s-refresh-2"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            </li>
                                        </ul>
                                        @csrf
                                    </form>
                                    <ul class="service-item-wrap">
                                        <li class="service-item">
                                            <div class="service-img">
                                                <img src="front/images/shipping/icon/car.png" alt="Shipping Icon">
                                            </div>
                                            <div class="service-content">
                                                <span class="title">Free <br> Shipping</span>
                                            </div>
                                        </li>
                                        <li class="service-item">
                                            <div class="service-img">
                                                <img src="front/images/shipping/icon/card.png" alt="Shipping Icon">
                                            </div>
                                            <div class="service-content">
                                                <span class="title">Safe <br> Payment</span>
                                            </div>
                                        </li>
                                        <li class="service-item">
                                            <div class="service-img">
                                                <img src="front/images/shipping/icon/service.png" alt="Shipping Icon">
                                            </div>
                                            <div class="service-content">
                                                <span class="title">Safe <br> Payment</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="product-category">
                                        <span class="title">SKU:</span>
                                        <ul>
                                            <li>
                                                <a href="#">Ch-256xl</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-category">
                                        <span class="title">Categories :</span>
                                        <ul>
                                            <li>
                                                <a href="#">Office,</a>
                                            </li>
                                            <li>
                                                <a href="#">Home</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-category product-tags">
                                        <span class="title">Tags :</span>
                                        <ul>
                                            <li>
                                                <a href="#">Furniture</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-category social-link align-items-center pb-0">
                                        <span class="title pe-3">Share:</span>
                                        <ul>
                                            <li>
                                                <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-pinterest-p"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Tumblr" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-tumblr"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Dribbble" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <!-- @endif -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tab-area section-space-top-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav product-tab-nav tab-style-2 pt-0" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="tab-btn" id="information-tab" data-bs-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="false">
                                        Information
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="active tab-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">
                                        Description
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="tab-btn" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">
                                        Reviews({{count($product->productComments)}})
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content product-tab-content">
                                <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                                    <div class="product-information-body">
                                        <h4 class="title">Shipping</h4>
                                        <p class="short-desc mb-4">The item will be shipped from China. So it need 15-20 days to
                                            deliver. Our product is good with reasonable price and we believe you will worth it.
                                            So please wait for it patiently! Thanks.Any question please kindly to contact us and
                                            we promise to work hard to help you to solve the problem</p>
                                        <h4 class="title">About return request</h4>
                                        <p class="short-desc mb-4">If you don't need the item with worry, you can contact us
                                            then we will help you to solve the problem, so please close the return request!
                                            Thanks</p>
                                        <h4 class="title">Guarantee</h4>
                                        <p class="short-desc mb-0">If it is the quality question, we will resend or refund to
                                            you; If you receive damaged or wrong items, please contact us and attach some
                                            pictures about product, we will exchange a new correct item to you after the
                                            confirmation.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="product-description-body">
                                        <p class="short-desc mb-0">{{$product->description}}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="product-review-body">
                                        <div class="blog-comment mt-0">
                                            <h4 class="heading">Comments {{count($product->productComments)}}</h4>
                                            @foreach($product->productComments as $productComment)
                                            <div class="blog-comment-item">
                                                <div class="blog-comment-img">
                                                    <img src="front/images/blog/avatar/{{$productComment->user->avatar ?? 'download'}}.png" alt="User Image">
                                                </div>
                                                <div class="blog-comment-content">
                                                    <div class="user-meta">
                                                        <h2 class="user-name">{{$productComment->name}}</h2>
                                                        {{-- <span class="date">{{date('M d, Y',($productComment->created_at))}}</span> --}}
                                                    </div>
                                                    <p class="user-comment">{{$productComment->messages}}</p>
                                                    <a class="btn btn-custom-size comment-btn" href="#">Reply</a>
                                                </div>
                                            </div>
                                            @endforeach

                                            {{-- <div class="blog-comment-item relpy-item">
                                                <div class="blog-comment-img">
                                                    <img src="front/images/blog/avatar/1-2-120x120.png" alt="User Image">
                                                </div>
                                                <div class="blog-comment-content">
                                                    <div class="user-meta">
                                                        <h2 class="user-name">Marissa Swan</h2>
                                                        <span class="date">21 July 2021</span>
                                                    </div>
                                                    <p class="user-comment">Lorem ipsum dolor sit amet, consectetur adipisi
                                                        elit, sed do
                                                        eiusmod tempr incidid ut labore etl dolore magna aliqua. Ut enim ad
                                                        minim veniam,
                                                        quisnos exercitati ullamco laboris nisi ut aliquiex.
                                                    </p>
                                                    <a class="btn btn-custom-size comment-btn style-2" href="#">Reply</a>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="feedback-area">
                                            <h2 class="heading">Leave a comment</h2>
                                            <form class="feedback-form" action="" method="post">
                                                @csrf
                                                
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id ?? null }}">

                                                <div class="group-input">
                                                    <div class="form-field me-md-30 mb-30 mb-md-0">
                                                        <input type="text" name="name" placeholder="Your Name*" class="input-field">
                                                    </div>
                                                    <div class="form-field">
                                                        <input type="text" name="email" placeholder="Your Email*" class="input-field">
                                                    </div>
                                                </div>
                                                <div class="form-field mt-30">
                                                    <input type="text" name="subject" placeholder="Subject (Optinal)" class="input-field">
                                                </div>
                                                <div class="form-field mt-30">
                                                    <textarea name="messages" placeholder="Message" class="textarea-field"></textarea>
                                                </div>


                                                <div class="personal-rating">
                                                    <h6>Your Rating</h6>
                                                    <div class="rate">
                                                        <input type="radio" id="star5" name="rating" value="5"/>
                                                        <label for="star5" title="text">5 stars</label>
                                                        <input type="radio" id="star4" name="rating" value="4"/>
                                                        <label for="star4" title="text">4 stars</label>
                                                        <input type="radio" id="star3" name="rating" value="3"/>
                                                        <label for="star3" title="text">3 stars</label>
                                                        <input type="radio" id="star2" name="rating" value="2"/>
                                                        <label for="star2" title="text">2 stars</label>
                                                        <input type="radio" id="star1" name="rating" value="1"/>
                                                        <label for="star1" title="text">1 stars</label>
                                                    </div>
                                                </div>



                                                <div class="button-wrap pt-5">
                                                    <button type="submit" value="submit" class="btn btn-custom-size xl-size btn-pronia-primary">Post
                                                        Comment</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Begin Product Area -->
            <div class="product-area section-space-y-axis-90">
                <div class="container">
                    <div class="row">
                        <div class="section-title-wrap without-tab">
                            <h2 class="section-title">Related Products</h2>
                            <p class="section-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                roots in a piece of classical Latin literature
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="swiper-container product-slider">
                                <div class="swiper-wrapper">
                                    @foreach($relatedProducts as $relatedProduct)
                                    <div class="swiper-slide product-item">
                                        <div class="product-img">
                                            <a href="shop/product/{{ $relatedProduct->id }}">
                                                <img class="primary-img" src="front/images/product/{{ $relatedProduct->productImages[0]->path }}" alt="Product Images">
                                                <img class="secondary-img" src="front/images/product/{{ $relatedProduct->productImages[1]->path }}" alt="Product Images">
                                            </a>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </li>
                                                    <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                        <a href="shop/product/{{ $relatedProduct->id }}" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="shop/product/{{ $relatedProduct->id }}">{{ $relatedProduct->name }}</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">${{ $relatedProduct->price }}.00</span>
                                            </div>
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

        </main>
        <!-- Main Content Area End Here  -->

@endsection
