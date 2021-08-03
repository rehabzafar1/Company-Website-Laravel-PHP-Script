@extends('front.layout.master')
@section('content')
    <main>
        <!-- breadcrumb-area-start -->
        <div class="breadcrumb-area pt-230 pb-235" style="background-image:url(front/assets/img/bg/bg-14.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>Contact Us</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="{{ route('index') }}">home</a></li>
                                <li><span>Contact Us</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-start -->

        <section class="map-area">
            <div id="contact-map" class="contact-page-map"></div>
        </section>

        <!-- contact-area start -->
        <section class="contact-info-area" data-background="assets/img/bg/bg-map.html">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="contact text-center mb-30" data-background="front/assets/img/bg/contact-bg.png">
                            <i class="fal fa-envelope-open"></i>
                            <h3>Mail Here</h3>
                            <p><a href="http://bdevs.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="64171114140b1610240309050d084a070b09">[email&#160;protected]</a></p>
                            <p>www.infotorun.net</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="contact text-center mb-30" data-background="front/assets/img/bg/contact-bg.png">
                            <i class="fal fa-map-marker-alt"></i>
                            <h3>Visit Here</h3>
                            <p>27 Division St, New York, NY 10002,
                                Jaklina, United Kingpung</p>
                        </div>
                    </div>
                    <div class="col-xl-4  col-lg-4 col-md-4 ">
                        <div class="contact text-center mb-30" data-background="front/assets/img/bg/contact-bg.png">
                            <i class="fal fa-phone"></i>
                            <h3>Call Us Now</h3>
                            <p>+8 (123) 985 789</p>
                            <p>+787 878897 87</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area end -->

        <!-- contact-us-area-start -->
        <div class="contact-2-area pt-120 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
                        <div class="section-title text-center ml-50 mr-50 mb-75">
                            <span class="border-left-1"></span>
                            <span>contact us</span>
                            <span class="border-right-1"></span>
                            <h1>Don't Hesitate To Contact Us</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="appointment-wrapper contact-form-page">
                        <form class="appointment-form" action="{{ route('email.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Full Name Here">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" name="email" placeholder="Email Here">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-box date-icon mb-30">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-30">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write message"></textarea>
                                    </div>
                                    <div class="contact-btn contact-2-btn text-center">
                                        <button class="btn" type="submit">
                                            <span class="btn-text">send message <i class="far fa-long-arrow-right"></i></span>
                                            <span class="btn-border"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact-us-area-end -->
    </main>
@endsection
