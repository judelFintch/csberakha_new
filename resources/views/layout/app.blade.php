<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="refresh" content="60">
    <title>Cs Berakha - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400&display=swap" rel="stylesheet">

   
    <link rel="shortcut icon" href="{{ asset('app/images/logo.png')  }}">
</head>
<body class="min-h-screen bg-[#F1F5F9] font-Oxygen w-full overflow-x-hidden">
    @include('part.header')
    <div>
        @yield('content')
    </div>
    @include('part.footer')
    
    @if(env('APP_ENV') === 'local')
        <script src="{{ asset('app/js/jquery.js') }}"></script>
    @else
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"
        ></script>
    @endif
    <script src="{{ asset('app/js/hamburger.js') }}"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    @yield("scripts")
</body>
</html>
