@php
    $assets = 17;
@endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{LaravelLocalization::setLocale() == 'en' ? 'ltr' : 'rtl'}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="{{setting('app' , 'description')}}" />
    <meta name="keywords" content="{{setting('app' , 'keywords')}}" />
    <meta property="og:locale" content="ar-sa" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="علاج طبيعي , الالم الظهر , الالم المفاصل , اجهزة علاج حديثه" />
    <meta property="og:url" content="https://arcphysio.sa" />
    <meta property="og:site_name" content="arcphysio" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <style>
        .lang-btn ,  .b-lang-mobile {
            display:none !important;
        }
    </style>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NVDHRWW6');</script>


</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVDHRWW6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
@include('sweetalert::alert')
<div class="loading-screen" id="loading-screen">
    <div class="loader"></div>
</div>
<section id="section-header" class="@yield('section_title')">
    <header>
        <div class="wsmobileheader clearfix ">
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            <span class="smllogo"><img src="{{asset('assets/img/logo-w.webp')}}?v=1" width="80" alt="" /></span>

        </div>
        <div class="wsmainfull clearfix">
            <div class="wsmainwp clearfix">


                <div class="desktoplogo">
                    <a href="{{route('index')}}" class="main">
                        <div class="logo-content">
                            <img src="{{asset('assets/img/logo-w.webp')}}" alt="">
                        </div>
                    </a>
                    <a href="{{route('index')}}" class="sticky">
                        <div class="logo-content">
                            <img src="{{asset('assets/img/logo-w.webp')}}" alt="">

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
                        {{--                        @if(count($services))--}}
                        {{--                        <li aria-haspopup="true"><a href="{{route('services')}}" class="{{request()->segment(2) == 'services' ? 'active' : ''}}"> {{__("home.Services")}} </a></li>--}}
                        {{--                        @endif--}}
                        <li aria-haspopup="true"><a href="{{route('devices')}}" class="{{request()->segment(2) == 'devices' ? 'active' : ''}}"> {{__("home.devices")}} </a></li>
                        <li aria-haspopup="true"><a href="{{route('doctors')}}" class="{{Route::is('doctors') ? 'active' : ''}}"> {{__("home.Health staff")}} </a></li>
                        <li aria-haspopup="true"><a href="{{route('education')}}" class="{{Route::is('education') ? 'active' : ''}}">  {{__("home.Health Education")}}  </a></li>
                        <li class="d-mobile">
                            <a href="{{route('contact')}}">
                                {{__("home.Connect us")}}
                            </a>
                        </li>
                        <li class="d-mobile b-lang-mobile">
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
<div class="social-fixed">
    <a target="_blank" href="https://x.com/arcrehab?s=21">
        <span>twitter</span>
        <i style="color: #fff;font-size: 26px;" class="fa-brands fa-x-twitter"></i>
    </a>
    <a target="_blank" href="https://instagram.com/arcrehab.sa?igshid=YzAwZjE1ZTI0Zg==">
        <span>instagram</span>
        <img src="{{asset('assets/img/Icons/instagram.png')}}" alt="">
    </a>
    <a target="_blank" href="https://www.snapchat.com/add/arcrehab.sa">
        <span>snapchat</span>
        <img src="{{asset('assets/img/Icons/snapchat.png')}}" alt="">
    </a>
</div>
<footer class="@yield('footer_class')">
    <div class="container-fluid">
        <div id="footer_content">
            <div class="row">
                <div class="col-md-5">
                    <div class="logo">
                        <img src="{{asset('assets/img/logo-w.webp')}}" alt="">
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
                            <a target="_blank" href="https://x.com/arcrehab?s=21">
                                <i style="color: #fff;font-size: 26px;" class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a target="_blank" href="https://instagram.com/arcrehab.sa?igshid=YzAwZjE1ZTI0Zg==">
                                <img src="{{asset('assets/img/Icons/instagram.png')}}" alt="">
                            </a>
                            <a target="_blank" href="https://www.snapchat.com/add/arcrehab.sa">
                                <img src="{{asset('assets/img/Icons/snapchat.png')}}" alt="">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_title">
                        <h1>{{__("home.For comments and complaints")}}</h1>
                        <a href="{{route('compain')}}" class="btn-read-more">{{__("home.click here")}}</a>
                        <br>
                        <a href="https://arcrehab.sa:2096/" target="_blank" class="btn-read-more ed">بريد الموظفين</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="https://api.whatsapp.com/send?phone=+966505838585&text=السلام عليكم" class="btn-whatsapp-pulse">
        <span>تواصل معنا الان</span>
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
    </a>

    <style>
        .float{
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            left: 12px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #99999940;
            z-index: 100;
            display: flex;
            justify-content: center;
            align-items: center;
            fill: #fff;
        }

        .my-float{
            margin-top:16px;
        }
        #section-header.breadcrumb .breadcrumb-title {
            position: absolute;
            bottom: 0;
            margin: 0px;
            color: #fff;
            width: 100%;
            padding-right: 24px;
            padding-bottom: 23px;
            text-align: center;
        }
        .btn-whatsapp-pulse {
            background: #25d366;
            color: white;
            position: fixed;
            bottom: 20px;
            left: 20px;
            font-size: 19px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 0;
            width: 200px;
            padding: 23px;
            text-decoration: none;
            border-radius: 29px;
            animation-name: pulse;
            animation-duration: 1.5s;
            animation-timing-function: ease-out;
            animation-iteration-count: infinite;
            z-index: 99999999999999999;
        }
        .btn-whatsapp-pulse svg {
            z-index: 999;
            color: #fff;
            width: 42px;
            height: 35px;
            display: block;
            stroke: #fff;
            fill: #fff;
        }
        .btn-whatsapp-pulse span {
            color: #fff;
            font-size: 16px;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5);
            }
            80% {
                box-shadow: 0 0 0 14px rgba(37, 211, 102, 0);
            }
        }

        .btn-whatsapp-pulse-border {
            bottom: 120px;
            right: 20px;
            animation-play-state: paused;
        }

        .btn-whatsapp-pulse-border::before {
            content: "";
            position: absolute;
            border-radius: 50%;
            padding: 25px;
            border: 5px solid #25d366;
            opacity: 0.75;
            animation-name: pulse-border;
            animation-duration: 1.5s;
            animation-timing-function: ease-out;
            animation-iteration-count: infinite;
        }

        @keyframes pulse-border {
            0% {
                padding: 25px;
                opacity: 0.75;
            }
            75% {
                padding: 50px;
                opacity: 0;
            }
            100% {
                opacity: 0;
            }
        }

    </style>
</footer>

<div class="copyright">
    تصميم و تطوير <a target="_blank" href="http://skyview.sa/">سكاي فيو</a> 2023
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
<script type='text/javascript'>
    (function(e, t, n) {
        if (e.snaptr) return;
        var a = e.snaptr = function() {
            a.handleRequest ? a.handleRequest.apply(a, arguments) : a.queue.push(arguments)
        };
        a.queue = [];
        var s = 'script';
        r = t.createElement(s);
        r.async = !0;
        r.src = n;
        var u = t.getElementsByTagName(s)[0];
        u.parentNode.insertBefore(r, u);
    })(window, document, 'https://sc-static.net/scevent.min.js');

    snaptr('init', '07ea6139-de14-4dd4-b6f9-246b8945865f', {
        'user_email': '_INSERT_USER_EMAIL_'
    });

    snaptr('track', 'PAGE_VIEW');
</script>
@yield('script')
</body>
</html>
