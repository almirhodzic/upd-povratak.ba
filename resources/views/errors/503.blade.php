@extends('layouts.error')

@section('content')
   <div class="mb-5">
      <img src="{{ asset('static/assets/img/logo-upd.povratak.ba.png') }}" class="object-scale-down h-36 w-36" alt="Logo {{ config('app.name') }} BiH">
   </div>
   <!-- Page Heading -->
   <x-partials.header>
      <x-slot name="currentpagename">Maintenance mode</x-slot>
      <x-slot name="headertitle">
         <span class="whitespace-nowrap">Update u toku!</span>
      </x-slot>
      <x-slot name="headertitlesub"></x-slot>
   </x-partials.header>
   <!-- End Page Heading -->

   <main id="content">
      <p class="mb-6">
         Poštovani, naš web-sajt je u toku obrade i uskoro će biti opet dostupan.
      </p>
      <p>
         Hvala za Vaše strpljenje!
      </p>
   </main>
@endsection
