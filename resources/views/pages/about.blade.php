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
      <p class="mb-6">Slijedi galerija osnivačke skupštine. (Uskoro sa više fotografija)</p>
         <div class="gallery grid grid-cols-2 gap-4 md:grid-cols-3 md:gap-8">
         @foreach($files as $file)
            <div class="bg-blue-400 rounded-md">
            <a href="{{asset('gallery/about').'/'.basename($file)}}" data-lightbox="about" data-title="Osnivačka Skupština">
               <img class="object-cover h-full w-auto rounded-md transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 hover:shadow-xl duration-200" src="{{$file}}" alt="image">
            </a>
            </div>
         @endforeach
         </div>
   </main>
@endsection
