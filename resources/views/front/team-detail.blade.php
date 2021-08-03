@extends('front.layout.master')
@section('content')
    <main>
        <!-- breadcrumb-area-start -->
        <div class="breadcrumb-area pt-230 pb-235" style="background-image:url(front/assets/img/bg/bg-14.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>single team</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="">home</a></li>
                                <li><span>single team</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-start -->

        <!-- single-team-area-start -->
        <div class="single-team-area pt-130 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="single-img">
                            <img src="{{ asset('front/assets/img/team/single-tem.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6  col-lg-6 mb-30">
                        <div class="single-team-wrapper">
                            <div class="single-team-text">
                                <h1>I’m David Jeson</h1>
                                <span>sr IT Consultant</span>
                                <p>Must explain to you how all this mistaken idea of denouncing ple
                                    asure and praising pain was born and I will give you a complete count of the system and expound the actual teachings of the great explorer of the truth master-builder of human happiness one rejects</p>
                                <div class="team-single">
                                    <div class="single-team-info">
                                        <div class="single-team-icon">
                                            <img src="{{ asset('front/assets/img/icon/t-1.png') }}" alt="">
                                        </div>
                                        <div class="team-info">
                                            <span>Call For Me</span>
                                            <h4>+812 (345) 789 99</h4>
                                        </div>
                                    </div>
                                    <div class="single-team-info">
                                        <div class="single-team-icon">
                                            <img src="{{ asset('front/assets/img/icon/t-2.png') }}" alt="">
                                        </div>
                                        <div class="team-info">
                                            <span>Email Me</span>
                                            <h4><a href="http://bdevs.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e6959396968994928b83a6818b878f8ac885898b">[email&#160;protected]</a></h4>
                                        </div>
                                    </div>
                                    <div class="single-team-info">
                                        <div class="single-team-icon">
                                            <img src="{{ asset('front/assets/img/icon/t-3.png') }}" alt="">
                                        </div>
                                        <div class="team-info">
                                            <span>Fax Me</span>
                                            <h4>567 - 890 - 123</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-2-icon">
                                    <span>Follow Me</span>
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
        </div>
        <!-- single-team-area-end -->

        <!-- our-skill-area-start -->
        <div class="our-skill-area">
            <div class="container">
                <div class="skill-bg">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 mb-30">
                            <div class="progress-wrapper pr-25">
                                <div class="progress-bar-text">
                                    <div class="progress-skill">
                                        <div class="single-skill mb-35">
                                            <div class="bar-title">
                                                <h4>Design Strategy</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="1s" data-wow-delay=".5s">
                                                    <span>80%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-skill mb-35">
                                            <div class="bar-title">
                                                <h4>Marketing Strategy</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="2s" data-wow-delay=".5s">
                                                    <span>90%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-skill">
                                            <div class="bar-title">
                                                <h4>UX/UI Strategy</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="2s" data-wow-delay=".5s">
                                                    <span>85%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30">
                            <div class="progress-wrapper pl-25">
                                <div class="progress-bar-text progress-bar-2-text">
                                    <div class="progress-skill">
                                        <div class="single-skill mb-35">
                                            <div class="bar-title">
                                                <h4>Design Strategy</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="1s" data-wow-delay=".5s">
                                                    <span>80%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-skill mb-35">
                                            <div class="bar-title">
                                                <h4>IT Consulting</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 92%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="2s" data-wow-delay=".5s">
                                                    <span>90%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-skill">
                                            <div class="bar-title">
                                                <h4>Software Development</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 98%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="2s" data-wow-delay=".5s">
                                                    <span>85%</span>
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
        </div>
        <!-- our-skill-area-end -->

        <!-- experience-area-satrt -->
        <div class="experience-area pt-130 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 mb-30">
                        <div class="experience-text">
                            <h1>Experience</h1>
                            <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system and expound the actual teachings of the great explorer of the truth the master-builder of human happiness. No one rejects dislikes</p>
                            <p>Born and I will give you a complete account of the system and expound the actual teachings of the great explorer of the truth the master-builder.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="experience-single mb-30">
                            <div class="experience-img">
                                <img src="{{ asset('front/assets/img/bg/ex-1.jpg') }}" alt="">
                                <div class="experience-video">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=LTXD6XZXc3U" tabindex="0"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- experience-area-end -->


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
