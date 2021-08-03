@extends('front.layout.master')
@section('content')
    <main>
        <!-- breadcrumb-area-start -->
        <div class="breadcrumb-area pt-230 pb-235" style="background-image:url(front/assets/img/bg/bg-14.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>pricing</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="{{ route('index') }}">home</a></li>
                                <li><span>pricing</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- pricing-area-start -->
        <div class="pricing-area pt-120 pb-100" style="background-image:url(front/assets/img/bg/bg-10.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                        <div class="section-title section-title-white text-center ml-50 mr-50 mb-80">
                            <span class="border-left-1"></span>
                            <span>our pricing</span>
                            <span class="border-right-1"></span>
                            <h1>Exclusive Pricing Planning</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($packages as $package)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="pricing-wrapper text-center mb-30">
                            <div class="pricing-icon">
                                <img class="img" src="{{ url('storage/images/icons/'.$package->icon) }}" alt="pricing" />
                            </div>
                            <div class="pricing-top-text">
                                <h3>{{ $package->name }}</h3>
                            </div>
                            <div class="pricing-menu">
                                <ul>
                                    @foreach($package->options as $option)
                                        <li>{{ $option->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="price-count">
                                <h1><span class="usd">$</span>{{ $package->price }}</h1>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- pricing-area-end -->
    </main>
@endsection
