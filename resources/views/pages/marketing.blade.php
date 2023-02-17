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

      <div class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="javascript:void(0)">
         <div class="p-4 md:p-5">
            <div class="flex">
               <svg class="mt-1 shrink-0 w-5 h-5 text-gray-800 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
               </svg>

               <div class="ml-5">
                  <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                     Ured za dijasporu Općine Kalesija
                  </h3>
                  <p>Tel.: +387 35 367-735</p>
                  <p>Mob. & Viber: +387 61 163-159</p>

                  <p><a>eMail: <a href="mailto:dijaspora@kalesija.ba" class="underline underline-offset-4">dijaspora@kalesija.ba</a></p>
                  <p>75260 Kalesija BiH</p>
                  <p class="mt-3">
                     <a class="link flex items-center" href="https://www.facebook.com/profile.php?id=100087622836166" target="_blank">
                        <span class="flex items-center">Facebook stranica</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex items-center ml-1 underline underline-offset-4">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                        </svg>
                     </a>
                  </p>
               </div>
            </div>
         </div>
      </div>

      <div class="mt-6">
           <p>Informacije vezano za reklamu i marketing javite name se preko <a href="{{ route('contact.index') }}" class="link">Kontakt-forme</a>.</p>
       </div>
   </main>
@endsection
