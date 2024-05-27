<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="title" content="Gugun - Full-Stack Developer Indonesia">
    <meta name="description" content="This is a personal portfolio html template made by ugunNet21">

    <!-- favicon-->
    <link rel="shortcut icon" href="{{ asset('frontend/favicon.svg') }}" type="image/svg+xml">

    <!-- google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
    @include('frontend.partials.style')
    <!-- preload images-->
    <link rel="preload" href="{{ asset('frontend/assets/images/hero-banner.png') }}">
</head>

<body>
    <!-- #PRELOADER-->

    <div class="preloader" data-preloader>
        <div class="preloader-circle"></div>
    </div>
    @include('frontend.partials.navbar')
    @yield('content')
    @include('frontend.partials.footer')
    @include('frontend.partials.script')
</body>

</html>
