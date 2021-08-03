
@extends('front.layout.master')
@section('content')
    <main>
        <!-- breadcrumb-area-start -->
        <div class="breadcrumb-area pt-230 pb-235" style="background-image:{{ 'url(../front/assets/img/bg/bg-14.jpg)'}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>{{ $service->name }}</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="{{route('index')}}">home</a></li>
                                <li><span>{{ $service->name }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-start -->

        <!-- management-area-start -->
        <div class="management-area pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="management-wrapper mb-30">
                            <div class="management-text">
                                <h1>We Serve As Your Complete Support Team Or As An Extension Of Your Current IT Team.</h1>
                                <p>Whether you have a few PC’s or offices throughout the country, Next Horizon will provide IT help when equip ment fails, the network crashes or simply when you need a helping hand. We offer a variety of maint nance ctracts to fit a variety of pricing and service-level needs.</p>
                                <p>Next Horizon’s IT managed services provide companies of all sizes in the Central Florida area with access to tech nology specialists who are experts in managing networks, network security and computer support.</p>
                                <p>The Next Horizon team possesses high-level expertise and industry certifications allowing them to work with advanced products such as Cisco, Microsoft, Novell and SonicWALL. Our Technicians hold many of the following Certifications: MCSE, MCP, CNA, CCNA, CCNP, CSSA and CCFA.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="management-img">
                            <img src="{{ asset('front/assets/img/bg/11.png') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- management-area-end -->

        <!-- services-area-start -->
        <div class="services-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-10 offset-lg-1 offset-xl-1">
                        <div class="section-title text-center mb-80">
                            <h1>High-Quality IT Service Desk Services Are Key to End User Productivity </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <i class="fal fa-server"></i>
                            </div>
                            <div class="services-text">
                                <h3>Server Security</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking </p>
                                <a href="{{ route('contact') }}"> <span class="services-button">contact us <i class="far fa-long-arrow-right"></i></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- services-area-end -->
    </main>
@endsection
