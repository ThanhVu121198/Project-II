@extends('front.layout.master')

@section('title', 'Blog')

@section('body')
        <!-- Main Header Area End Here -->

        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="front/images/breadcrumb/bg/1-1-1919x388.jpg">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h2 class="breadcrumb-heading">Blog</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>Blog Grid View</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        {{-- <div class="col-xl-3 col-lg-4 order-2 pt-5 pt-lg-0">
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
                                        <h2 class="widgets-title mb-4">Recent Post</h2>
                                        <div class="swiper-container widgets-list-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="widgets-list-item">
                                                        <div class="widgets-list-img">
                                                            <a href="#">
                                                                <img class="img-full" src="front/images/blog/small-size/1-1-70x70.png" alt="Blog Images">
                                                            </a>
                                                        </div>
                                                        <div class="widgets-list-content">
                                                            <div class="widgets-meta">
                                                                <ul>
                                                                    <li class="date">
                                                                        24 April 2021
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <h2 class="title mb-0">
                                                                <a href="#">Lorem ipsum dolo
                                                                    conse tetur.</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="widgets-list-item">
                                                        <div class="widgets-list-img">
                                                            <a href="#">
                                                                <img class="img-full" src="front/images/blog/small-size/1-2-70x70.png" alt="Blog Images">
                                                            </a>
                                                        </div>
                                                        <div class="widgets-list-content">
                                                            <div class="widgets-meta">
                                                                <ul>
                                                                    <li class="date">
                                                                        24 April 2021
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <h2 class="title mb-0">
                                                                <a href="#">Lorem ipsum dolo
                                                                    conse tetur.</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="widgets-list-item">
                                                        <div class="widgets-list-img">
                                                            <a href="#">
                                                                <img class="img-full" src="front/images/blog/small-size/1-3-70x70.png" alt="Blog Images">
                                                            </a>
                                                        </div>
                                                        <div class="widgets-list-content">
                                                            <div class="widgets-meta">
                                                                <ul>
                                                                    <li class="date">
                                                                        24 April 2021
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <h2 class="title mb-0">
                                                                <a href="#">Lorem ipsum dolo
                                                                    conse tetur.</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide without-border">
                                                    <div class="widgets-list-item">
                                                        <div class="widgets-list-img">
                                                            <a href="#">
                                                                <img class="img-full" src="front/images/blog/small-size/1-1-70x70.png" alt="Blog Images">
                                                            </a>
                                                        </div>
                                                        <div class="widgets-list-content">
                                                            <div class="widgets-meta">
                                                                <ul>
                                                                    <li class="date">
                                                                        24 April 2021
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <h2 class="title mb-0">
                                                                <a href="#">Lorem ipsum dolo
                                                                    conse tetur.</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                            <a class="btn btn-custom-size sm-size btn-pronia-primary" href="shop.html">Shop
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-xl-12 col-lg-8 order-1">
                            <div class="blog-item-wrap row g-y-30">
                                @foreach($blogs as $blog)
                                    <div class="col-md-6">
                                    <div class="blog-item">
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <ul>
                                                    <li class="author">
                                                        <a href="#">By: Admin</a>
                                                    </li>
                                                    <li class="date">{{$blog->created_at}}</li>
                                                </ul>
                                            </div>
                                            <h2 class="title">
                                                <a href="/blog/{{$blog->id}}">{{$blog->title}}</a>
                                            </h2>
                                            <p class="short-desc mb-7">{{$blog->category}}</p>
                                        </div>
                                        <div class="blog-img img-hover-effect">
                                            <a href="/blog/{{$blog->id}}">
                                                <img class="img-full" src="front/images/blog/medium-size/{{$blog->image}}" alt="Blog Image">
                                            </a>
                                        </div>
                                    </div>
                                 </div>
                                @endforeach
                            </div>
                            <div class="pagination-area">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
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

        <!-- Begin Footer Area -->

@endsection 