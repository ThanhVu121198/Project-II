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
                                <div class="widgets-searchbox">
                                    <form id="widgets-searchbox">
                                        <input class="input-field" type="text" placeholder="Search">
                                        <button class="widgets-searchbox-btn" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="widgets-area">
                                    <div class="widgets-item pt-0">
                                        <h2 class="widgets-title mb-4">Categories</h2>
                                        <ul class="widgets-category">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-chevron-right"></i>
                                                    All <span>(65)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-chevron-right"></i>
                                                    Bansai <span>(12)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-chevron-right"></i>
                                                    House Plants <span>(22)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-chevron-right"></i>
                                                    Indoor Living <span>(19)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-chevron-right"></i>
                                                    Perennnials <span>(17)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-chevron-right"></i>
                                                    Plant For Gift <span>(01)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-chevron-right"></i>
                                                    Garden Tools <span>(12)</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widgets-item">
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
                                    </div>
                                    <div class="widgets-item widgets-filter">
                                        <h2 class="widgets-title mb-4">Price Filter</h2>
                                        <div class="price-filter">
                                            <input type="text" class="pronia-range-slider" name="pronia-range-slider" value="" data-type="double" data-min="16" data-from="16" data-to="300" data-max="350" data-grid="false" />
                                        </div>
                                    </div>
                                    <div class="widgets-item">
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
                                    </div>
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
                                    <li class="short">
                                        <select class="nice-select">
                                            <option value="1">Sort by Default</option>
                                            <option value="2">Sort by Popularity</option>
                                            <option value="3">Sort by Rated</option>
                                            <option value="4">Sort by Latest</option>
                                            <option value="5">Sort by High Price</option>
                                            <option value="6">Sort by Low Price</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                                    <div class="product-grid-view row g-y-20">
<<<<<<< HEAD
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
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
                                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                    <i class="pe-7s-cart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">American
                                                        Marigold</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$23.45</span>
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
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-3-270x300.jpg" alt="Product Images">
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
                                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                    <i class="pe-7s-cart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Black Eyed
                                                        Susan</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$25.45</span>
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
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-3-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
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
                                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                    <i class="pe-7s-cart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Bleedin
                                                        Heart</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$30.45</span>
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
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
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
                                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                    <i class="pe-7s-cart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Bloody
                                                        Cranesbill</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$45.00</span>
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
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
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
                                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                    <i class="pe-7s-cart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Butterfly
                                                        Weed</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$50.45</span>
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
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
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
                                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                    <i class="pe-7s-cart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Common
                                                        Yarrow</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$65.00</span>
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
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
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
                                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                    <i class="pe-7s-cart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Doublefile
                                                        Viburnum</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$67.45</span>
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
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-9-270x300.jpg" alt="Product Images">
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
                                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                    <i class="pe-7s-cart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Feather Reed
                                                        Grass</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$20.00</span>
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
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-9-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-10-270x300.jpg" alt="Product Images">
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
                                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                    <i class="pe-7s-cart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Moss Verbena</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$15.25</span>
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
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-10-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-11-270x300.jpg" alt="Product Images">
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
                                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                    <i class="pe-7s-cart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Million Gold</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$72.25</span>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
=======
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
                                                                <li class="quuickview-btn" data-bs-toggle="" data-bs-target="#quickModal">
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
>>>>>>> main
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-11-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
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
                                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                    <i class="pe-7s-cart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Hybrid Pansy</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$54.25</span>
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
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
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
                                                                <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                    <i class="pe-7s-cart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Doublefile
                                                        Viburnum</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$67.45</span>
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
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                                    <div class="product-list-view row g-y-30">
                                        <div class="col-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">American
                                                        Marigold</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$23.45</span>
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
                                                    <p class="short-desc mb-0">Proin nec ligula dolor. Mauris mollis turpis
                                                        vitae viverra viverra. Mauris at lacus commodo, dictum eros in, interdum
                                                        diam. Sed lorem orci, maximus nec efficitur, mattis sed tortor.
                                                        Voluptates repudiandae nulla rhoncus varius eget id eros.
                                                    </p>
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
                                        <div class="col-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-3-270x300.jpg" alt="Product Images">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Black Eyed
                                                        Susan</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$25.45</span>
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
                                                    <p class="short-desc mb-0">Proin nec ligula dolor. Mauris mollis turpis
                                                        vitae viverra viverra. Mauris at lacus commodo, dictum eros in, interdum
                                                        diam. Sed lorem orci, maximus nec efficitur, mattis sed tortor.
                                                        Voluptates repudiandae nulla rhoncus varius eget id eros.
                                                    </p>
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
                                        <div class="col-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-3-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Bleedin
                                                        Heart</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$30.45</span>
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
                                                    <p class="short-desc mb-0">Proin nec ligula dolor. Mauris mollis turpis
                                                        vitae viverra viverra. Mauris at lacus commodo, dictum eros in, interdum
                                                        diam. Sed lorem orci, maximus nec efficitur, mattis sed tortor.
                                                        Voluptates repudiandae nulla rhoncus varius eget id eros.
                                                    </p>
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
                                        <div class="col-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Bloody
                                                        Cranesbill</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$45.00</span>
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
                                                    <p class="short-desc mb-0">Proin nec ligula dolor. Mauris mollis turpis
                                                        vitae viverra viverra. Mauris at lacus commodo, dictum eros in, interdum
                                                        diam. Sed lorem orci, maximus nec efficitur, mattis sed tortor.
                                                        Voluptates repudiandae nulla rhoncus varius eget id eros.
                                                    </p>
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
                                        <div class="col-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Butterfly
                                                        Weed</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$50.45</span>
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
                                                    <p class="short-desc mb-0">Proin nec ligula dolor. Mauris mollis turpis
                                                        vitae viverra viverra. Mauris at lacus commodo, dictum eros in, interdum
                                                        diam. Sed lorem orci, maximus nec efficitur, mattis sed tortor.
                                                        Voluptates repudiandae nulla rhoncus varius eget id eros.
                                                    </p>
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
                                        <div class="col-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Common
                                                        Yarrow</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$65.00</span>
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
                                                    <p class="short-desc mb-0">Proin nec ligula dolor. Mauris mollis turpis
                                                        vitae viverra viverra. Mauris at lacus commodo, dictum eros in, interdum
                                                        diam. Sed lorem orci, maximus nec efficitur, mattis sed tortor.
                                                        Voluptates repudiandae nulla rhoncus varius eget id eros.
                                                    </p>
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
                                        <div class="col-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Doublefile
                                                        Viburnum</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$67.45</span>
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
                                                    <p class="short-desc mb-0">Proin nec ligula dolor. Mauris mollis turpis
                                                        vitae viverra viverra. Mauris at lacus commodo, dictum eros in, interdum
                                                        diam. Sed lorem orci, maximus nec efficitur, mattis sed tortor.
                                                        Voluptates repudiandae nulla rhoncus varius eget id eros.
                                                    </p>
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
                                        <div class="col-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-9-270x300.jpg" alt="Product Images">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Feather Reed
                                                        Grass</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$20.00</span>
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
                                                    <p class="short-desc mb-0">Proin nec ligula dolor. Mauris mollis turpis
                                                        vitae viverra viverra. Mauris at lacus commodo, dictum eros in, interdum
                                                        diam. Sed lorem orci, maximus nec efficitur, mattis sed tortor.
                                                        Voluptates repudiandae nulla rhoncus varius eget id eros.
                                                    </p>
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
                                        <div class="col-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-9-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-10-270x300.jpg" alt="Product Images">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Moss Verbena</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$15.25</span>
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
                                                    <p class="short-desc mb-0">Proin nec ligula dolor. Mauris mollis turpis
                                                        vitae viverra viverra. Mauris at lacus commodo, dictum eros in, interdum
                                                        diam. Sed lorem orci, maximus nec efficitur, mattis sed tortor.
                                                        Voluptates repudiandae nulla rhoncus varius eget id eros.
                                                    </p>
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
                                        <div class="col-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-10-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Million Gold</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$72.25</span>
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
                                                    <p class="short-desc mb-0">Proin nec ligula dolor. Mauris mollis turpis
                                                        vitae viverra viverra. Mauris at lacus commodo, dictum eros in, interdum
                                                        diam. Sed lorem orci, maximus nec efficitur, mattis sed tortor.
                                                        Voluptates repudiandae nulla rhoncus varius eget id eros.
                                                    </p>
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
                                        <div class="col-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-11-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Hybrid Pansy</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$54.25</span>
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
                                                    <p class="short-desc mb-0">Proin nec ligula dolor. Mauris mollis turpis
                                                        vitae viverra viverra. Mauris at lacus commodo, dictum eros in, interdum
                                                        diam. Sed lorem orci, maximus nec efficitur, mattis sed tortor.
                                                        Voluptates repudiandae nulla rhoncus varius eget id eros.
                                                    </p>
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
                                        <div class="col-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="single-product-variable.html">
                                                        <img class="primary-img" src="front/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                                        <img class="secondary-img" src="front/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product-variable.html">Doublefile
                                                        Viburnum</a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price">$67.45</span>
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
                                                    <p class="short-desc mb-0">Proin nec ligula dolor. Mauris mollis turpis
                                                        vitae viverra viverra. Mauris at lacus commodo, dictum eros in, interdum
                                                        diam. Sed lorem orci, maximus nec efficitur, mattis sed tortor.
                                                        Voluptates repudiandae nulla rhoncus varius eget id eros.
                                                    </p>
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
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-area">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">&raquo;</a>
                                        </li>
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