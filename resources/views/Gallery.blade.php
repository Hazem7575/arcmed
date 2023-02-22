@extends('layouts.app')
@section('content')
    <div class="st-content pages-content">
        <section id="gallery">
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="st-portfolio-wrapper">
                    <div class="st-isotop-filter st-style1 text-center">
                        <ul class="st-mp0">
                            <li class="active"><a href="#" data-filter="*">الكل</a></li>
                            <li class=""><a href="#" data-filter=".cardiology">التخصصات</a></li>
                        </ul>
                    </div>
                    <div class="st-isotop st-style1 st-port-col-3 st-has-gutter st-lightgallery" style="direction: ltr !important;">
                        <div class="st-grid-sizer"></div>
                        <div class="st-isotop-item cardiology urology">
                            <a href="{{asset('assets/img/project2.jpg')}}" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img src="{{asset('assets/img/project1.jpg')}}" alt="project1"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div>

                        <div class="st-isotop-item cardiology neurology">
                            <a href="{{asset('assets/img/project2.jpg')}}" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img src="{{asset('assets/img/project2.jpg')}}" alt="project2"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div>

                        <div class="st-isotop-item urology pulmonary">
                            <a href="{{asset('assets/img/project2.jpg')}}" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img src="{{asset('assets/img/project3.jpg')}}" alt="project3"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div>

                        <div class="st-isotop-item neurology traumatology">
                            <a href="{{asset('assets/img/project2.jpg')}}" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img src="{{asset('assets/img/project4.jpg')}}" alt="project4"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div>

                        <div class="st-isotop-item cardiology pulmonary">
                            <a href="{{asset('assets/img/project2.jpg')}}" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img src="{{asset('assets/img/project5.jpg')}}" alt="project5"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div>

                        <div class="st-isotop-item neurology traumatology">
                            <a href="{{asset('assets/img/project2.jpg')}}" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img src="{{asset('assets/img/project6.jpg')}}" alt="project6"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div>

                        <div class="st-isotop-item urology pulmonary traumatology">
                            <a href="{{asset('assets/img/project2.jpg')}}" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img src="{{asset('assets/img/project7.jpg')}}" alt="project6"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
    </div>
@stop
@section('style')
    <style>
        .lg-outer {
            direction: ltr;
        }
    </style>
@endsection
