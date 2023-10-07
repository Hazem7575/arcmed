@php
    $assets = 6;
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{LaravelLocalization::setLocale() == 'en' ? 'ltr' : 'rtl'}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <title>العلاج الطبيعي</title>
    <link rel="shortcut icon" href="{{asset('assets/img/logo.webp')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.xyz/npm/uikit@3.16.26/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}?v={{$assets}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}?v={{$assets}}">
    <!---------------------------- Header -------------------------------->
    <link rel="stylesheet" href="{{asset('assets/css/header.css')}}?v={{$assets}}">
    <link rel="stylesheet" href="{{asset('assets/css/color-skins/grd-black.css')}}?v={{$assets}}">
    <link rel="stylesheet" href="{{asset('assets/css/dropdown-effects/rotate-x.css')}}?v={{$assets}}">
    <!---------------------------- Header -------------------------------->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}?v={{$assets}}">
    @if(LaravelLocalization::setLocale() == 'en')
        <link rel="stylesheet" href="{{asset('assets/css/style_en.css')}}?v={{$assets}}">
    @endif
    @yield('style')
</head>
<body>
@include('sweetalert::alert')
<div class="loading-screen" id="loading-screen">
    <div class="loader"></div>
</div>
<section id="section-header" class="@yield('section_title')">
    <header>
        <div class="wsmobileheader clearfix ">
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            <span class="smllogo"><img src="{{asset('assets/img/logo.webp')}}" width="80" alt="" /></span>

        </div>
        <div class="wsmainfull clearfix">
            <div class="wsmainwp clearfix">


                <div class="desktoplogo">
                    <a href="{{route('index')}}" class="main">
                        <div class="logo-content">
                            <img src="{{asset('assets/img/logo.webp')}}" alt="">
                        </div>
                    </a>
                    <a href="{{route('index')}}" class="sticky">
                        <div class="logo-content">
                            <img src="{{asset('assets/img/logo.webp')}}" alt="">

                        </div>
                    </a>
                </div>
                <!--Main Menu HTML Code-->
                <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list">
                        <li aria-haspopup="true"><a href="{{route('index')}}" class="{{Route::is('index') ? 'active' : ''}} menuhomeicon"> {{__("home.home")}}</a></li>
                        <li aria-haspopup="true"><a href="{{route('about')}}" class="{{Route::is('about') ? 'active' : ''}}" role="menuitem"> {{__("home.who are we")}} </a>
                        </li>
                        <li aria-haspopup="true"><a href="{{route('department')}}" class="{{Route::is('department') ? 'active' : ''}}">{{__("home.Sections")}}</a></li>
                        @if(count($services))
                        <li aria-haspopup="true" class="sub"><a href="#service" class="{{request()->segment(2) == 'services' ? 'active' : ''}}"> {{__("home.Services")}} <span class="wsarrow"></span></a>
                            <ul class="sub-menu">
                                @foreach($services as $key => $service)
                                <li aria-haspopup="true"><a href="{{route('services' , $key)}}"> {{$service}}  </a></li>
                                @endforeach
                            </ul>
                        </li>
                        @endif
                        <li aria-haspopup="true"><a href="{{route('doctors')}}" class="{{Route::is('doctors') ? 'active' : ''}}"> {{__("home.Health staff")}} </a></li>
                        <li aria-haspopup="true"><a href="{{route('education')}}" class="{{Route::is('education') ? 'active' : ''}}">  {{__("home.Health Education")}}  </a></li>
                        <li class="d-mobile">
                            <a href="{{route('contact')}}">
                                {{__("home.Connect us")}}
                            </a>
                        </li>
                        <li class="d-mobile">
                            <a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::setLocale() == 'en' ? 'ar' : 'en', null, [], true) }}">
                                {{LaravelLocalization::setLocale() == 'en' ? 'Ar' : 'En'}}
                            </a>
                        </li>

                    </ul>
                    <div class="btns">
                        <a href="{{route('contact')}}" class="contact-btn"> {{__("home.Connect us")}} </a>
                        <a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::setLocale() == 'en' ? 'ar' : 'en', null, [], true) }}" class="lang-btn"> {{LaravelLocalization::setLocale() == 'en' ? 'Ar' : 'En'}}  </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    @yield('breadcrumb')
    <!----------------------------------------------------------------------->
</section>

@yield('content')


<div class="modal show-popup-modal">
    <div class="modal-container">
        <div class="content-header">
            <button class="icon-button close-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
                </svg>
            </button>
            <h1 class="title-modal-info"></h1>
        </div>
        <div class="content-modal loading">
            <div class="info-loading">
                <div class="lds-heart"><div></div></div>
                <h1>جاري التحميل ..</h1>
            </div>
            <div class="body-modal"></div>
        </div>

    </div>
</div>

<footer class="@yield('footer_class')">
    <div class="container-fluid">
        <div id="footer_content">
            <div class="row">
                <div class="col-md-5">
                    <div class="logo">
                        <img src="{{asset('assets/img/logo.webp')}}" alt="">
                        <p class="note-web">{{__("home.about title 1")}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <h1>{{__("home.Connect us")}}</h1>
                        <p>{{__("home.address footer")}}</p>
                        <p>{{__("home.email footer")}}</p>
                        <p>{{__("home.Tel footer")}}</p>
                        <div class="social-icons">
                            <a href="#">
                                <i style="color: #fff;font-size: 26px;" class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="#">
                                <img src="{{asset('assets/img/Icons/instagram.png')}}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{asset('assets/img/Icons/snapchat.png')}}" alt="">
                            </a>
                            <a href="https://arcphysio.sa:2096/" target="_blank">
                                <img src="{{asset('assets/img/contact/mail.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_title">
                        <h1>{{__("home.For comments and complaints")}}</h1>
                        <a href="{{route('compain')}}" class="btn-read-more">{{__("home.click here")}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<div class="copyright">
    جميع حقوق التصميم والتطوير محفظة ل <a href="#">skyview</a> 2023
</div>
<script src="https://cdn.jsdelivr.xyz/npm/uikit@3.16.26/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.xyz/npm/uikit@3.16.26/dist/js/uikit-icons.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}?v={{$assets}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}?v={{$assets}}"></script>
<script src="{{asset('assets/js/header.js')}}?v={{$assets}}"></script>
<script src="{{asset('assets/js/main.js')}}?v={{$assets}}"></script>
<script>
    $(function () {
        document.getElementById("loading-screen").style.display = "none";
        document.body.classList.add("loaded");
    })
</script>
@yield('script')
</body>
</html>
