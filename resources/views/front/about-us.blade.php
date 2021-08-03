@extends('front.layout.master')
@section('content')
    <main>
        <!-- breadcrumb-area-start -->
        <div class="breadcrumb-area pt-230 pb-235" style="background-image:url(front/assets/img/bg/bg-14.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>About Us</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="{{ route('index') }}">home</a></li>
                                <li><span>About Us</span></li>
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
                        <div class="about-2-img">
                            <img src="{{ asset('front/assets/img/about/02.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="about-1-wrapper">
                            <div class="about-text">
                                <span>who we are</span>
                                <h1>More than 23+ years we provide <span>IT solutions </span></h1>
                                <p>Sed ut perspiciatis unde omnis iste natus errorsit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo invetore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
                                <p class="mt-20">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem </p>
                            </div>
                            <div class="about-button">
                                <a class="btn" href="#"><span class="btn-text">learn more <i class="far fa-long-arrow-right"></i></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area-end -->

        <!-- services-area-start -->
        <div class="services-area  pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <i class="fal fa-laptop-code"></i>
                            </div>
                            <div class="services-text">
                                <h3>Web Development</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking </p>
                                <a href="#"> <span class="services-button">read more <i class="far fa-long-arrow-right"></i></span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="single-services active text-center">
                            <div class="services-icon">
                                <i class="fal fa-database"></i>
                            </div>
                            <div class="services-text">
                                <h3>Database Analysis</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking </p>
                                <a href="#"> <span class="services-button">read more <i class="far fa-long-arrow-right"></i></span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <i class="fal fa-server"></i>
                            </div>
                            <div class="services-text">
                                <h3>Server Security</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking </p>
                                <a href="#"> <span class="services-button">read more <i class="far fa-long-arrow-right"></i></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- services-area-end -->

        <!-- choose-area-start -->
        <div class="choose-area pt-130 pb-130" style="background-image:url(front/assets/img/bg/bg-15.jpg)">
            <div class="choose-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 mb-30">
                            <div class="faq-wrapper">
                                <div class="section-title mb-45">
                                    <span class="b-sm-left-1"></span>
                                    <span class="b-sm-left-2"></span>
                                    <span class="sub-t-left">why choose us</span>
                                    <h1>We Are Expert In IT Solutions Services</h1>
                                </div>
                                <div class="faq-box faq-2-box">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                        Best It Solutions Provider Agency</a>
                                                </h5>
                                            </div>
                                            <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium   mque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi artecto beatae dicta sunt explicabo. Nemo enim ipsam voluptatem quia  voluptas  aspernatur aut odit aut fugit</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Professional & Experienced Team Member </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium   mque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi artecto beatae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas  aspernatur aut odit aut fugit</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Our Main Goal How To Success In IT Business</a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium   mque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi artecto beatae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                                        voluptas  aspernatur aut odit aut fugit</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                                <h5 class="mb-0">
                                                    <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        We Start Our Journey Since 1990</a>
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium   mque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi artecto beatae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                                        voluptas  aspernatur aut odit aut fugit</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30">
                            <div class="choose-wrapper">
                                <div class="choose-text">
                                    <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will which is the same as saying through shrinking from toil and pain cases are perfectly</p>
                                </div>
                                <div class="choose-img">
                                    <img src="{{ asset('front/assets/img/bg/c.jpg') }}" alt="">
                                    <div class="choose-video">
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=LTXD6XZXc3U" tabindex="0"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- choose-area-end -->

        <!-- team-area-start -->
        <div class="team-area pt-120 pb-100 pos-rel">
            <div class="shape d-none d-xl-block">
                <div class="shape-item team-01 bounce-animate"><img src="{{ asset('front/assets/img/shape/shape-1.png') }}" alt=""></div>
            </div>
            <div class="container">
                <div class="row mb-50">
                    <div class="col-xl-4 col-lg-6">
                        <div class="section-title  mb-30">
                            <span class="b-sm-left-1"></span>
                            <span class="b-sm-left-2"></span>
                            <span class="sub-t-left">our Team</span>
                            <h1>Meet Experience Team Member</h1>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-3 col-lg-6">
                        <div class="team-section mb-30">
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give.</p>
                            <a class="btn" href="#"><span class="btn-text">join with us <i class="far fa-long-arrow-right"></i></span> </a>
                        </div>
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
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                        <div class="team-wrapper">
                            <div class="team-img">
                                <img src="{{ asset('front/assets/img/team/team-02.jpg') }}" alt="">
                            </div>
                            <div class="team-text">
                                <h4>Jerry D.Silva</h4>
                                <span>UI Designer</span>
                                <div class="team-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                        <div class="team-wrapper">
                            <div class="team-img">
                                <img src="{{ asset('front/assets/img/team/team-03.jpg') }}" alt="">
                            </div>
                            <div class="team-text">
                                <h4>David Walillams</h4>
                                <span>sr consultant</span>
                                <div class="team-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                        <div class="team-wrapper">
                            <div class="team-img">
                                <img src="{{ asset('front/assets/img/team/team-04.jpg') }}" alt="">
                            </div>
                            <div class="team-text">
                                <h4>Michel Z. Jones</h4>
                                <span>CEO & Founder</span>
                                <div class="team-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
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
                    <div class="col-xl-7 col-lg-6">
                        <div class="cta-text mb-30">
                            <span>do you have any project ?</span>
                            <h1>Let’s Talk About Business Soluations With Us</h1>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="cta-button text-lg-right mb-30">
                            <a class="btn btn-white btn-none" href="#"><span class="btn-text">contact us <i class="far fa-long-arrow-right"></i></span> </a>
                            <a class="btn btn-white btn-none btn-margin" href="#"><span class="btn-text">join with us <i class="far fa-long-arrow-right"></i></span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta-area-end -->

        <!-- client-area-start -->
        <div class="client-area dark pt-120 pb-100 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title  mb-70">
                            <span class="b-sm-left-2"></span>
                            <span class="sub-t-left">our testimonials</span>
                            <h1>More Than 800+ Customer Satisfied Our Solutions</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="client-active owl-carousel">
                        <div class="col-xl-12">
                            <div class="client-say-wrapper mb-30">
                                <div class="client-say-text">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusante doloremque laudantium, totam rem  aperiam eaque ipsa illventore verit atis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <div class="client-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="clientsay-name">
                                        <div class="client-say-img">
                                            <img src="{{ asset('front/assets/img/testimonial/01.png') }}" alt="">
                                        </div>
                                        <div class="client-say-content">
                                            <h4>Sonix Paleda Joda</h4>
                                            <span>Web Designer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="client-say-wrapper mb-30">
                                <div class="client-say-text">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusante doloremque laudantium, totam rem  aperiam eaque ipsa illventore verit atis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <div class="client-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="clientsay-name">
                                        <div class="client-say-img">
                                            <img src="{{ asset('front/assets/img/testimonial/02.png') }}" alt="">
                                        </div>
                                        <div class="client-say-content">
                                            <h4>Jeson Roy Newzi</h4>
                                            <span>SR Consultant</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="client-say-wrapper mb-30">
                                <div class="client-say-text">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusante doloremque laudantium, totam rem  aperiam eaque ipsa illventore verit atis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <div class="client-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="clientsay-name">
                                        <div class="client-say-img">
                                            <img src="{{ asset('front/assets/img/testimonial/03.png') }}" alt="">
                                        </div>
                                        <div class="client-say-content">
                                            <h4>David Mexxwell</h4>
                                            <span>Business manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="client-say-wrapper mb-30">
                                <div class="client-say-text">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusante doloremque laudantium, totam rem  aperiam eaque ipsa illventore verit atis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <div class="client-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="clientsay-name">
                                        <div class="client-say-img">
                                            <img src="{{ asset('front/assets/img/testimonial/01.png') }}" alt="">
                                        </div>
                                        <div class="client-say-content">
                                            <h4>Sonix Paleda Joda</h4>
                                            <span>Web Designer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="client-say-wrapper mb-30">
                                <div class="client-say-text">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusante doloremque laudantium, totam rem  aperiam eaque ipsa illventore verit atis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <div class="client-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="clientsay-name">
                                        <div class="client-say-img">
                                            <img src="{{ asset('front/assets/img/testimonial/01.png') }}" alt="" />
                                        </div>
                                        <div class="client-say-content">
                                            <h4>Sonix Paleda Joda</h4>
                                            <span>Web Designer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- client-area-end -->

        <!-- brand-area-start -->
        <div class="brand-area pt-130 pb-130">
            <div class="container">
                <div class="row">
                    <div class="brand-active owl-carousel">
                        <div class="col-xl-12">
                            <div class="brand-img text-center">
                                <img src="{{ asset('front/assets/img/brand/brand-01.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="brand-img text-center">
                                <img src="{{ asset('front/assets/img/brand/brand-02.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="brand-img text-center">
                                <img src="{{ asset('front/assets/img/brand/brand-03.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="brand-img text-center">
                                <img src="{{ asset('front/assets/img/brand/brand-04.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="brand-img text-center">
                                <img src="{{ asset('front/assets/img/brand/brand-05.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="col-xl-12 text-center">
                            <div class="brand-img">
                                <img src="{{ asset('front/assets/img/brand/brand-02.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->



    </main>
@endsection
