<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Fonts -->
<x-partials.font />


<!-- Scripts -->
@vite(['resources/css/app.css','resources/js/app.js'])

<script src="{{ asset('static/assets/js/fontawesome/js/solid.min.js') }}" defer></script>
<script src="{{ asset('static/assets/js/fontawesome/js/fontawesome.min.js') }}" defer></script>
<script src="{{ asset('static/assets/js/preline/dist/preline.js') }}"></script>

</head>
<body class="antialiased bg-gray-900">
    <div id="app" class="bg-gray-100 flex flex-col justify-between min-h-screen">
        <x-partials.header />
        @yield('content')
        <x-partials.footer />
    </div>
</body>
</html>
