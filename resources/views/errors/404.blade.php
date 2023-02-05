@extends('layouts.error')

@section('content')
   <div class="mb-5">
      <img src="{{ asset('static/assets/img/logo-upd.povratak.ba.png') }}" class="object-scale-down h-36 w-36" alt="Logo {{ config('app.name') }} BiH">
   </div>
   <!-- Page Heading -->
   <x-partials.header>
      <x-slot name="currentpagename">Greška</x-slot>
      <x-slot name="headertitle">
         <span class="whitespace-nowrap">404</span>
      </x-slot>
      <x-slot name="headertitlesub"></x-slot>
   </x-partials.header>
   <!-- End Page Heading -->

   <main id="content">
      <p class="mb-6">
         Sajt ili link nije pronađen ili ne funkcioniše kao očekivano.
      </p>
      <p>Vratite se <span onclick="window.history.go(-1); return false;" class="underline underline-offset-4" role="button">nazad</span>.</p>
   </main>
@endsection

