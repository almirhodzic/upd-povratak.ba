<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>
<!-- Fonts -->
<x-partials.font />
    <link rel="stylesheet" href="{{asset('static/assets/js/lightbox/lightbox.min.css')}}">
    <script src="{{ asset('static/assets/js/lightbox/lightbox-plus-jquery.min.js')  }}"></script>
    <script>
        lightbox.option({
            'resizeDuration': 100,
            'wrapAround': true,
            'alwaysShowNavOnTouchDevices':true,
            'albumLabel':"Slika %1 od %2"
        })
    </script>
<!-- Scripts -->
@vite([
    'resources/css/app.css',
    'resources/js/app.js'
    ])
</head>
<body class="bg-white dark:bg-slate-900">
<!-- ========== MAIN CONTENT ========== -->


<!-- Sidebar Toggle -->
<x-partials.sidebar-toggle />
<!-- End Sidebar Toggle -->

<!-- Sidebar -->
<x-partials.sidebar />
<!-- End Sidebar -->

<!-- Content -->
<div class="w-full lg:w-11/12 xl:w-10/12 2xl:w-9/12 pt-4 md:pt-10 px-4 sm:px-6 md:px-8 md:pl-72 pb-10">
    <!-- Page Content -->
    @if (app()->isDownForMaintenance())
        <div class="p-4 bg-pink-600 text-white flex items-center w-full rounded-md mb-6">Site is in maintenance mode!</div>
    @endif
    <div class="grid justify-items-start w-full mb-6 md:hidden">
    <a href="{{ config('app.url') }}">
        <img src="{{ asset('static/assets/img/logo-upd.povratak.ba.png') }}" class="object-scale-down h-36 w-36" alt="Logo {{ config('app.name') }} BiH">
    </a>
    </div>
    @yield('content')
    <!-- End Page Content -->
</div>
<!-- End Content -->
<!-- ========== END MAIN CONTENT ========== -->
<script>
    let gallery = new SimpleLightbox('.gallery a');
</script>
</body>
</html>
