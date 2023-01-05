@extends('layouts.index')

@section('content')
   <!-- Page Heading -->
   <x-partials.header>
      <x-slot name="currentpagename">Dobrodosli</x-slot>
      <x-slot name="headertitle">
         <span class="whitespace-nowrap">IME PREZIME</span>
      </x-slot>
      <x-slot name="headertitlesub">
         Vas UPD Racun
      </x-slot>
   </x-partials.header>
   <!-- End Page Heading -->

   <main id="content">
      <p>
         Dobrodosli USER
      </p>
   </main>
@endsection