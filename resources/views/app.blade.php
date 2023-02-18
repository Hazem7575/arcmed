<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="icon" href="{{asset('assets/img/favicon.png')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/lightgallery.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/jQueryUi.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/textRotate.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/droidarabickufi.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}" />

        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue" ])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
        <script>
            let LinkUrl = '{{asset('/')}}';
        </script>
        <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('assets/js/isotope.pkg.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slick.min.js')}}"></script>
        <script src="{{asset('assets/js/mailchimp.min.js')}}"></script>
        <script src="{{asset('assets/js/counter.min.js')}}"></script>
        <script src="{{asset('assets/js/lightgallery.min.js')}}"></script>
        <script src="{{asset('assets/js/ripples.min.js')}}"></script>
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/jQueryUi.js')}}"></script>
        <script src="{{asset('assets/js/textRotate.min.js')}}"></script>
        <script src="{{asset('assets/js/select2.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{url('lang-'.  app()->getLocale() .'.js')}}"></script>

    </body>
</html>
