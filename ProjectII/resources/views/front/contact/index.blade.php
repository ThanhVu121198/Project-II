@extends('front.layout.master')

@section('title', 'Contact')

@section('body')
@include('front.alert')
        <!-- Main Header Area End Here -->

        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="front/images/breadcrumb/bg/1-1-1919x388.jpg">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h2 class="breadcrumb-heading">Contact</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-wrap">
                                <div class="contact-info text-white" data-bg-image="front/images/contact/1-1-370x500.jpg">
                                    <h2 class="contact-title">Contact Info:</h2>
                                    <p class="contact-desc">Fill the form amd our teaam will get to back
                                        to you within 24 hours.
                                    </p>
                                    <ul class="contact-list">
                                        <li>
                                            <i class="pe-7s-call"></i>
                                            <a href="tel://123-456-789">123 456 789</a>
                                        </li>
                                        <li>
                                            <i class="pe-7s-mail"></i>
                                            <a href="mailto://info@example.com">info@example.com</a>
                                        </li>
                                        <li>
                                            <i class="pe-7s-map-marker"></i>
                                            <span>13, Your Address, Here</span>
                                        </li>
                                    </ul>
                                </div>

                                <form action="/store" id="contact-formf" class="contact-form" method="POST">
                                    @csrf
                                    <div class="group-input">
                                        <div class="form-field me-lg-30 mb-35 mb-lg-0">
                                            <input type="text" name="first_name" id="con_firstName" placeholder="First Name*" class="input-field" autocomplete="off" >
                                        </div>
                                        <div class="form-field mb-35">
                                            <input type="text" name="last_name" id="con_lastName" placeholder="Last Name*" class="input-field" autocomplete="off" >
                                        </div>
                                    </div>
                                    <div class="group-input mb-35">
                                        <div class="form-field me-lg-30 mb-35 mb-lg-0">
                                            <input type="text" name="phone" id="con_phone" placeholder="Phone*" class="input-field" autocomplete="off" >
                                        </div>
                                        <div class="form-field">
                                            <input type="text" name="email" id="con_email" placeholder="Email*" class="input-field" autocomplete="off" >
                                        </div>
                                    </div>
                                    <div class="form-field mb-5">
                                        <textarea name="mess" id="con_message" placeholder="Message" class="textarea-field"></textarea>
                                    </div>
                                    <div class="contact-button-wrap">
                                        <button type="submit" value="submit" class="btn btn btn-custom-size xl-size btn-pronia-primary" name="submit">Post
                                            Message</button>
                                        <p class="form-messege mb-0"></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-with-map">
                <div class="contact-map">
                    <iframe class="contact-map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1613802584124!5m2!1sen!2sbd" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->

        <!-- Begin Footer Area -->
@endsection
