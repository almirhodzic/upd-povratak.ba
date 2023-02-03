@extends('layouts.index')

@section('content')
   <!-- Page Heading -->
   <x-partials.header>
      <x-slot name="currentpagename">Marketing</x-slot>
      <x-slot name="headertitle">
         <span class="whitespace-nowrap">Marketing i reklame</span>
      </x-slot>
      <x-slot name="headertitlesub">&nbsp;</x-slot>
   </x-partials.header>
   <!-- End Page Heading -->

   <main id="content">
      <div class="grid 2xl:grid-cols-2 gap-3 2xl:gap-6 mb-3 2xl:mb-6 mt-6">
         <a class="group flex flex-col bg-white hover:bg-indigo-50 border hover:border-indigo-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="javascript:void(0)">
            <div class="p-4 md:p-5">
               <div class="flex">
                  <div class="ml-5">
                     <h3 class="group-hover:text-blue-600 text-xl font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200 mb-3">Vaša reklama?</h3>
                     <p>Ovdje bi mogla biti Vaša reklama.</p>
                  </div>
               </div>
            </div>
         </a>
      </div>

       <div>
           <p>Informacije vezano za reklamu i marketing javite name se preko <a href="{{ route('contact.index') }}" class="link">Kontakt-forme</a>.</p>
       </div>
   </main>
@endsection
