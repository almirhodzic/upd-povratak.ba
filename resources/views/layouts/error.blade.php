<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="none" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <x-partials.font />

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
        ])
</head>
<body class="bg-white dark:bg-slate-900">
<!-- ========== MAIN CONTENT ========== -->
<!-- Content -->
<div class="w-full lg:w-11/12 xl:w-10/12 2xl:w-9/12 pt-10 px-4 sm:px-6 md:px-8 md:pl-72 pb-10">
    <!-- Page Content -->
    @yield('content')
    <!-- End Page Content -->
</div>
<!-- End Content -->
<!-- ========== END MAIN CONTENT ========== -->
</body>
</html>
