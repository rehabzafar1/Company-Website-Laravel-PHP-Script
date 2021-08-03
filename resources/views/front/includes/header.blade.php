<!-- header-start -->
<header class="header-transparent">
    <div class="header-area header-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 d-flex align-items-center">
                    <div class="logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('front/assets/img/logo/white-logo.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="header-top-right d-none d-lg-block">
                        <div class="header-top-cta-text f-left">
                            <div class="header-top-icon">
                                <i class="far fa-map-marker-alt"></i>
                            </div>
                            <div class="header-top-text">
                                <p>15 Hamston Street, West</p>
                                <span> Coast ,Newyork, USA</span>
                            </div>
                        </div>
                        <div class="header-top-cta-text f-left">
                            <div class="header-top-icon">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="header-top-text">
                                <p>We Are Available</p>
                                <span>+812 (345) 6789</span>
                            </div>
                        </div>
                        <div class="header-top-cta-text f-left">
                            <div class="header-top-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="header-top-text">
                                <p>Sunday - Monday</p>
                                <span>10:00 am - 06:00 pm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-area menu-5" id="myHeader">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="{{Route::currentRouteNamed('index') ? 'active' : '' }}">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="{{Route::currentRouteNamed('about.us') ? 'active' : '' }}">
                                    <a href="{{ route('about.us') }}">About</a>
                                </li>
                                <li class="{{Route::currentRouteNamed('our.services') ? 'active' : '' }}">
                                    <a href="{{ route('our.services') }}">Services</a>
                                    <ul class="sub-menu text-left">
                                        @foreach($shared_services as $service)
                                            <li><a href="{{ route('service.detail', $service->id) }}">{{ $service->name }}</a></li>
                                            @endforeach
                                    </ul>
                                </li>
                                <li class="{{Route::currentRouteNamed('pricing') ? 'active' : '' }}">
                                    <a href="{{ route('pricing') }}">Pricing</a>
                                </li>
                                <li class="{{Route::currentRouteNamed('faqs') ? 'active' : '' }}">
                                    <a href="{{ route('faqs') }}">Faqs</a>
                                </li>
                                <li class="{{Route::currentRouteNamed('team') ? 'active' : '' }}">
                                    <a href="{{ route('team') }}">Our Team</a>
                                </li>
                                <li class="{{Route::currentRouteNamed('career') ? 'active' : '' }}">
                                    <a href="{{ route('career') }}">Career</a>
                                </li>
                                <li class="{{Route::currentRouteNamed('contact') ? 'active' : '' }}">
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                    <div class="header-right f-right ">
                        <div class="header-3-icon f-right">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-start -->


