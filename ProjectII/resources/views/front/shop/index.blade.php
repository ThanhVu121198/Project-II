@extends('front.layout.master')

@section('title', 'Shop')

@section('body')

        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="front/images/breadcrumb/bg/1-1-1919x388.jpg">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h2 class="breadcrumb-heading">Shop</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>Shop Default</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 order-2 order-lg-1 pt-5 pt-lg-0">
                            <div class="sidebar-area">
                                <form action="shop">
                                    <div class="widgets-searchbox">
                                        <form id="widgets-searchbox">
                                            <input name="search" class="input-field" value="{{ request('search') }}" type="text" placeholder="Search">
                                            <button class="widgets-searchbox-btn" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </form>
                                <div class="widgets-area">
                                    <div class="widgets-item pt-0">
                                        <h2 class="widgets-title mb-4">Categories</h2>
                                        <ul class="widgets-category">
                                            @foreach($categories as $category)
                                                <li>
                                                    <a href="shop/{{$category->name}}">
                                                        <i class="fa fa-chevron-right"></i>
                                                        {{$category->name}} 
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    {{-- <div class="widgets-item">
                                        <h2 class="widgets-title mb-4">Color</h2>
                                        <ul class="widgets-category widgets-color">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-chevron-right"></i>
                                                    All <span>(65)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-chevron-right"></i>
                                                    Gold <span>(12)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-chevron-right"></i>

                                                    Green <span>(22)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-chevron-right"></i>
                                                    white <span>(13)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-chevron-right"></i>
                                                    Black <span>(10)</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                    <div class="widgets-item widgets-filter">
                                        <h2 class="widgets-title mb-4">Price Filter</h2>
                                        <div class="price-filter">
                                            <input type="text" class="pronia-range-slider" name="pronia-range-slider" value="" data-type="double" 
                                            data-min="16" data-from="16" data-to="300" data-max="350" 
                                            data-min-value="{{str_replace('$','',request('price_min')) }}"
                                            data-max-value="{{str_replace('$','',request('price_max')) }}"
                                            data-grid="false" />
                                        </div>
                                        <button type="submit" class="filter-btn">Filter</button>
                                    </div>
                                    {{-- <div class="widgets-item">
                                        <h2 class="widgets-title mb-4">Populer Tags</h2>
                                        <ul class="widgets-tag">
                                            <li>
                                                <a href="#">Fashion</a>
                                            </li>
                                            <li>
                                                <a href="#">Organic</a>
                                            </li>
                                            <li>
                                                <a href="#">Old Fashion</a>
                                            </li>
                                            <li>
                                                <a href="#">Men</a>
                                            </li>
                                            <li>
                                                <a href="#">Fashion</a>
                                            </li>
                                            <li>
                                                <a href="#">Dress</a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="banner-item widgets-banner img-hover-effect">
                                    <div class="banner-img">
                                        <img src="front/images/sidebar/banner/1-270x300.jpg" alt="Banner Image">
                                    </div>
                                    <div class="banner-content text-position-center">
                                        <span class="collection">New Collection</span>
                                        <h3 class="title">Plant Port</h3>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size sm-size btn-pronia-primary" href="#">Shop
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 order-1 order-lg-2">
                            <div class="product-topbar">
                                <ul>
                                    <li class="page-count">
                                        <span>12</span> Product Found of <span>30</span>
                                    </li>
                                    <li class="product-view-wrap">
                                        <ul class="nav" role="tablist">
                                            <li class="grid-view" role="presentation">
                                                <a class="active" id="grid-view-tab" data-bs-toggle="tab" href="#grid-view" role="tab" aria-selected="true">
                                                    <i class="fa fa-th"></i>
                                                </a>
                                            </li>
                                            <li class="list-view" role="presentation">
                                                <a id="list-view-tab" data-bs-toggle="tab" href="#list-view" role="tab" aria-selected="true">
                                                    <i class="fa fa-th-list"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <form action="">
                                        <li class="short">
                                            <select name="sort_by" class="nice-select" onchange="this.form.submit();">
                                                <option {{request('sort_by') == '1' ? 'selected' : ''}} value="1">Sort by Default</option>
                                                <option {{request('sort_by') == '2' ? 'selected' : ''}} value="2">Sort by Popularity</option>
                                                <option {{request('sort_by') == '3' ? 'selected' : ''}} value="3">Sort by Rated</option>
                                                <option {{request('sort_by') == '4' ? 'selected' : ''}} value="4">Sort by Latest</option>
                                                <option {{request('sort_by') == '5' ? 'selected' : ''}} value="5">Sort by High Price</option>
                                                <option {{request('sort_by') == '6' ? 'selected' : ''}} value="6">Sort by Low Price</option>
                                            </select>
                                        </li>  
                                    </form>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                                    <div class="product-grid-view row g-y-20">
                                        @foreach($products as $product)
                                            <div class="col-md-4 col-sm-6">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="shop/product/{{$product->id}}">
                                                            @if(isset($product->productImages))
                                                               @foreach($product->productImages as $key => $image)
                                                                @if ($key == 0)
                                                                    <img class="primary-img" src="front/images/product/{{$image->path}}" alt="Product Images">
                                                                @elseif ($key == 1)
                                                                <img class="secondary-img" src="front/images/product/{{$image->path}}" alt="Product Images">
                                                                @endif
                                                               @endforeach
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
                                                                    <a href="shop/product/{{$product->id}}" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
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
                                                        <a class="product-name" href="shop/product/{{$product->id}}">{{$product->name}}</a>
                                                        <div class="price-box pb-1">
                                                            <span class="new-price">${{$product->price}}.00</span>
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
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                                        <div class="product-list-view row g-y-30">
                                            @foreach($products as $product)
                                                <div class="col-12">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="shop/product/{{$product->id}}">
                                                            @if(isset($product->productImages))
                                                               @foreach($product->productImages as $key => $image)
                                                                @if ($key == 0)
                                                                    <img class="primary-img" src="front/images/product/{{$image->path}}" alt="Product Images">
                                                                @elseif ($key == 1)
                                                                <img class="secondary-img" src="front/images/product/{{$image->path}}" alt="Product Images">
                                                                @endif
                                                               @endforeach
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <a class="product-name" href="shop/product/{{$product->id}}">{{$product->name}}</a>
                                                        <div class="price-box pb-1">
                                                            <span class="new-price">${{$product->price}}.00</span>
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
                                                        <p class="short-desc mb-0">{{$product->description}}</p>
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
                                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                        <i class="pe-7s-cart"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-area">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        {{-- <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">&raquo;</a>
                                        </li> --}}
                                        {{$products->links()}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->

@endsection 