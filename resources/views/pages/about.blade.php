@extends('layouts.index')

@section('content')
   <!-- Page Heading -->
   <x-partials.header>
      <x-slot name="currentpagename">O nama</x-slot>
      <x-slot name="headertitle">
         <span class="whitespace-nowrap">Ukratko o </span> <span class="whitespace-nowrap text-indigo-500">{{ config('app.name') }}</span>
      </x-slot>
      <x-slot name="headertitlesub">
         &nbsp;
      </x-slot>
   </x-partials.header>
   <!-- End Page Heading -->

   <main id="content">
   <p>
      {{ config('company.namefull') }} je osnovano 04.08.2022. godine.
   </p>
      <p class="mb-6">Slijedi galerija osnivačke skupštine {{ config('app.name') }}. (Uskoro sa više fotografija)</p>
         <div class="gallery grid grid-cols-2 gap-4 md:grid-cols-3 md:gap-8">
         @foreach($files as $file)
            <div class="bg-blue-400">
            <a href="{{asset('gallery/about').'/'.basename($file)}}" data-lightbox="about" data-title="Osnivačka Skupština">
               <img class="object-cover h-full w-auto" src="{{$file}}" alt="image">
            </a>
            </div>
         @endforeach
         </div>
   </main>
@endsection
