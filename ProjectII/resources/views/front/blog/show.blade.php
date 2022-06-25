@extends('front.layout.master')

@section('title', 'Blog Detail')

@section('body')

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
                                    <li>Blog Detail</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-8 order-1">
                            <div class="blog-detail-item">
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li class="author">
                                                <a href="#">By: Admin</a>
                                            </li>
                                            <li class="date">24 April 2021</li>
                                        </ul>
                                    </div>
                                    <h2 class="title">{{$blog->title}}</h2>
                                    <p class="short-desc">{{$blog->category}}</p>
                                </div>
                                <div class="blog-img img-hover-effect">
                                    <img class="img-full" src="front/images/blog/medium-size/{{$blog->image}}" alt="Blog Image">
                                </div>
                                {!! $blog->content !!}
                                
                            </div>
                            <div class="social-with-tags">
                                <div class="tags">
                                    <span class="title">Tags: </span>
                                    <ul>
                                        <li>
                                            <a href="#">Plant,</a>
                                        </li>
                                        <li>
                                            <a href="#">Tree Plant</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="social-link">
                                    <ul>
                                        <li>
                                            <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Dribbble" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li class="comment">
                                            <a href="#">
                                                <span>2</span>
                                                <i class="fa fa-comments"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->

        <!-- Begin Footer Area -->
@endsection