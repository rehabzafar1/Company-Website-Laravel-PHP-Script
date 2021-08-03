@extends('front.layout.master')
@section('content')
    <main>
        <!-- breadcrumb-area-start -->
        <div class="breadcrumb-area pt-230 pb-235" style="background-image:url(front/assets/img/bg/bg-14.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>career</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="{{ route('index') }}">home</a></li>
                                <li><span>career</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-start -->

        <section class="career-cat-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
                        <div class="section-title text-center ml-50 mr-50 mb-75">
                            <span class="border-left-1"></span>
                            <span>Job category</span>
                            <span class="border-right-1"></span>
                            <h1>Our Latest Job Category</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($categories as $category)
                    <div class="col-lg-3 col-md-4">
                        <a href="">
                            <div class="carrer-cat text-center mb-30">
                                <img class="img" src="{{ url('storage/images/icons/career/'.$category->icon) }}" alt="category" />
                                <h3>{{ $category->name }}</h3>
                            </div>
                        </a>
                    </div>
                   @endforeach
                </div>
            </div>
        </section>

        <section class="job-list-area grey-bg-2 pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="job-list mb-30">
                            <h3>Web Designer</h3>
                            <span>(Full Time)</span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa
                                ntium doloremque laudantium totam rem aperiam</p>
                            <a class="btn" href="#"><span class="btn-text">Read More <i class="far fa-long-arrow-right"></i></span> </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="job-list mb-30">
                            <h3>Web Developer</h3>
                            <span>(Part Time)</span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa
                                ntium doloremque laudantium totam rem aperiam</p>
                            <a class="btn" href="#"><span class="btn-text">Read More <i class="far fa-long-arrow-right"></i></span> </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="job-list mb-30">
                            <h3>SEO Optimization</h3>
                            <span>(Full Time)</span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa
                                ntium doloremque laudantium totam rem aperiam</p>
                            <a class="btn" href="#"><span class="btn-text">Read More <i class="far fa-long-arrow-right"></i></span> </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="job-list mb-30">
                            <h3>IT Marketing</h3>
                            <span>(Part Time)</span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa
                                ntium doloremque laudantium totam rem aperiam</p>
                            <a class="btn" href="#"><span class="btn-text">Read More <i class="far fa-long-arrow-right"></i></span> </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="job-list mb-30">
                            <h3>IT Consultant</h3>
                            <span>(Full Time)</span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa
                                ntium doloremque laudantium totam rem aperiam</p>
                            <a class="btn" href="#"><span class="btn-text">Read More <i class="far fa-long-arrow-right"></i></span> </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="job-list mb-30">
                            <h3>Computer Engineer</h3>
                            <span>(Part Time)</span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa
                                ntium doloremque laudantium totam rem aperiam</p>
                            <a class="btn" href="#"><span class="btn-text">Read More <i class="far fa-long-arrow-right"></i></span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
