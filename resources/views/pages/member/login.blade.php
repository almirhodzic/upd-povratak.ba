@extends('layouts.index')

@section('content')
   <!-- Page Heading -->
   <x-partials.header>
      <x-slot name="currentpagename">Login</x-slot>
      <x-slot name="headertitle">
         <span class="whitespace-nowrap">Clanstvo {{ config('app.name') }}</span>
      </x-slot>
      <x-slot name="headertitlesub">
         Prijavite se podacima
      </x-slot>
   </x-partials.header>
   <!-- End Page Heading -->

   <main id="content">
      <p>
         {{ $message }}
      </p>
   </main>
@endsection