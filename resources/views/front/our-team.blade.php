@extends('front.layout.master')
@section('content')
    <main>
        <!-- breadcrumb-area-start -->
        <div class="breadcrumb-area pt-230 pb-235" style="background-image: {{ 'url(front/assets/img/bg/bg-14.jpg)' }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>Exclusive Team</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="{{ route('index') }}">home</a></li>
                                <li><span>our team</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-start -->

        <!-- team-area-start -->
        <div class="team-area pt-95 pb-100 pos-rel">
            <div class="shape d-none d-xl-block">
                <div class="shape-item team-02 bounce-animate"><img src="{{ asset('front/assets/img/shape/shape-6.png') }}" alt=""></div>
            </div>
            <div class="container">
                <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
                    <div class="section-title text-center  mb-75">
                        <h1>Meet Our Experienced Team Member</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                        <div class="team-wrapper">
                            <div class="team-img">
                                <img src="{{ asset('front/assets/img/team/team-01.jpg') }}" alt="">
                            </div>
                            <div class="team-text">
                                <h4>Solvina D Naliz</h4>
                                <span>Web developer</span>
                                <div class="team-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- team-area-end -->

        <!-- cta-area-start -->
        <div class="cta-area pt-125 pb-95" style="background-image:url(front/assets/img/bg/bg-2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="cta-text mb-30">
                            <span>do you have any project ?</span>
                            <h1>Let’s Talk About Business Soluations With Us</h1>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="cta-button text-lg-right mb-30">
                            <a class="btn btn-white btn-none" href="#"><span class="btn-text">join with us <i class="far fa-long-arrow-right"></i></span> </a>
                            <a class="cta-link" href="#"><i class="far fa-phone"></i> +812 (345) 789 88</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta-area-end -->


    </main>
@endsection
