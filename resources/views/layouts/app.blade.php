@php
    $assets = 1;
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}?v={{$assets}}?v={{$assets}}" />
    @yield('style')
</head>
<body class="font-sans antialiased">

@yield('script')
</body>
</html>
