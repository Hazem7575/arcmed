@extends('layouts.app')
@section('content')
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            @foreach($sliders as $slider)
            <div class="slide-item">
                <div class="image-layer" style="background-image: url('{{asset($slider->image)}}');"></div>
                <div class="content">
                    <div class="text-content" style="width:100%;text-align:right">
                        <h1>{{$slider->title}}</h1>
                        <h1>{{$slider->content}}</h1>
                    </div>
                </div>
                <div id="scroll-down-animation">
                    <a href="#section-about-us">
                    <span class="mouse">
                    <span class="move"></span>
                    </span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <section id="section-about-us">
        <div class="container-fluid content-about">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-title-about">{{__("home.about us")}}</h1>
                    <p>
                        {{__("home.title home 2")}}
                    </p>
                    <a href="#" class="btn-read-more" style="display: none">{{__("home.Read more")}}</a>
                </div>
                <div class="col-md-6">
                    <div class="group-image-about">
                        <div class="image-about"></div>
                        <img class="image-icon-about" src="{{asset('assets/img/Icons/physical-therapy.png')}}" alt="icon">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-categories">
        <div class="container-fluid categories-about">
            <div class="row">
                <div class="col-md-8 background-image-categories">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true" uk-slider="clsActivated: uk-transition-active">
                        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@m uk-grid">
                            @foreach($clinics as $clinic)
                            <li>
                                <div class="box-category">
                                    <div class="image">
                                        <img src="{{asset($clinic->image)}}" alt="">
                                    </div>
                                    <h1>{{$clinic->name}}</h1>
                                    <span>{{\Illuminate\Support\Str::limit(strip_tags($clinic->description) , 110 , '...')}}</span>
                                    <a href="javascript:void(0)" data-href="{{route('clinic' , $clinic->id)}}"  data-title="{{$clinic->name}}" class="modal-button btn-read-more">{{__("home.Read more")}}</a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-categories">
                        <h1>{{__("home.sections home")}}</h1>
                        <span>{{__("home.section home desc")}}</span>
                        <a href="{{route('department')}}" class="btn-read-more">{{__("home.See all sections")}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-why-us">
        <div class="container-fluid why-us">
            <div class="row">
                <div class="col-md-6">
                    <div class="list-us">
                        <h1>{{__("home.Why us")}}</h1>
                        <h2>{{__("home.title why us")}}</h2>
                        <p>{{__("home.title small why us")}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-info">
                                <div class="image">
                                    <img src="{{asset('assets/img/Icons/stethoscope.png')}}" alt="">
                                </div>
                                <h1>{{__("home.Years of experience number")}}</h1>
                                <h2>{{__("home.Years of experience")}}</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-info">
                                <div class="image">
                                    <img src="{{asset('assets/img/Icons/man.png')}}" alt="">
                                </div>
                                <h1>{{__("home.My patients are happy number")}}</h1>
                                <h2>{{__("home.My patients are happy")}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-info">
                                <div class="image">
                                    <img src="{{asset('assets/img/Icons/doctor.png')}}" alt="">
                                </div>
                                <h1>{{__('home.Qualified doctors number')}}</h1>
                                <h2>{{__("home.Qualified doctors")}}</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-info">
                                <div class="image">
                                    <img src="{{asset('assets/img/Icons/clinic.png')}}" alt="">
                                </div>
                                <h1>{{__("home.Departments clinics number")}}</h1>
                                <h2>{{__("home.Departments clinics")}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-services">
        <div class="container-fluid">
            <div class="title-head">
                <h1>{{__('home.Our health care services')}}</h1>
            </div>
            <style>
                .mt-slider .box-category .image img {
                    width: 150px;
                    height: 150px;
                    text-align: center;
                    margin: auto;
                    display: block;
                    border-radius: 15px;
                }
                #section-services .box-category .image {
                    height: 150px !important;
                }
                .mt-slider .box-category h1 {
                    text-align: center;
                }
            </style>
            <div class="slider mt-slider">
                <div uk-slider>
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                        <ul class="uk-slider-items uk-child-width-1-5@s uk-grid">
                            @foreach($services as $service)
                            <li>
                                <div class="box-category" style="height: 300px;justify-content: center;">
                                    <div class="image">
                                        <img src="{{asset($service->image)}}" alt="">
                                    </div>
                                    <h1>{{$service->name_ar}}</h1>
                                    <h1>{{$service->name_en}}</h1>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                </div>
                <a href="#" class="btn-read-more m-auto"  style="display: none">{{__("home.See all services")}}</a>
            </div>
        </div>
    </section>
@stop
@section('script')
    <script>
        if ($('.banner-carousel').length) {
            $('.banner-carousel').owlCarousel({
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                loop: true,
                margin: 0,
                nav: false,
                smartSpeed: 2000,
                autoHeight: true,
                autoplay: true,
                autoplayTimeout: 7000,
                navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1024: {
                        items: 1
                    },
                }
            });
        }
    </script>
@stop
