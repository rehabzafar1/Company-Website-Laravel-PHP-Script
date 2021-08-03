@extends('front.layout.master')
@section('content')
    <main>
        <!-- breadcrumb-area-start -->
        <div class="breadcrumb-area pt-230 pb-235" style="background-image:url(front/assets/img/bg/bg-14.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>IT Services</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="{{ route('index') }}">home</a></li>
                                <li><span>IT Services</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-start -->

        <!-- about-area-start -->
        <div class="about-area pt-130 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="single-about">
                            <div class="about-us-img">
                                <img src="{{ asset('front/assets/img/about/03.jpg') }}" alt="">
                                <div class="about-us-2-img">
                                    <div class="about-inner-img about-2-inner">
                                        <img src="{{ asset('front/assets/img/about/04.jpg') }}" alt="">
                                        <div class="about-video">
                                            <a class="popup-video" href="https://www.youtube.com/watch?v=LTXD6XZXc3U" tabindex="0"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-10">
                        <div class="faq-wrapper">
                            <div class="section-title mb-25">
                                <span class="b-sm-left-1"></span>
                                <span class="b-sm-left-2"></span>
                                <span class="sub-t-left">who we are</span>
                                <h1>Why Most People Choose Our Business Solutions</h1>
                                <p>Sedut perspiciatis unde omnis iste natus error sitlupttem accusantium doloremque laudantium totam remap eriaeaque ipsa quae ab illo inventore veritatis </p>
                            </div>
                            <div class="faq-box">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Product Sesign Strategy </a>
                                            </h5>
                                        </div>

                                        <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete acount of the system anpound the actual teacings of the great explorer of the truth-builder </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Software Development Solutions</a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete acount of the system anpound the actual teacings of the great explorer of the truth-builder </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    UX/UI Design Strategy</a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete acount of the system anpound the actual teacings of the great explorer of the truth-builder </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area-end -->

        <!-- services-area-start -->
        <div class="services-area pt-120 pb-100" style="background-image:url(front/assets/img/bg/bg-1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                        <div class="section-title text-center ml-50 mr-50 mb-80">
                            <span class="border-left-1"></span>
                            <span>what we do</span>
                            <span class="border-right-1"></span>
                            <h1>We provide exclusive services for your busainess</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="services-wrapper text-center">
                            <div class="services-img">
                                <img class="img" src="{{ url('storage/images/services/'.$service->icon) }}" alt="pricing" />
                            </div>
                            <div class="services-text">
                                <h3>{{ $service->name }}</h3>
                                <p>{{ $service->description }}</p>
                                <a href="#"> <span class="services-button">read more <i class="far fa-long-arrow-right"></i></span> </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- services-area-end -->




    </main>
@endsection
