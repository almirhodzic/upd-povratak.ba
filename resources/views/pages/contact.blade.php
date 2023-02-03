@extends('layouts.index')

@section('content')
   <!-- Page Heading -->
   <x-partials.header>
      <x-slot name="currentpagename">{{ config('app.name') }}</x-slot>
      <x-slot name="headertitle">
         <span class="whitespace-nowrap">Kontakt</span>
      </x-slot>
      <x-slot name="headertitlesub">
         Elektronska kontakt-forma
      </x-slot>
   </x-partials.header>
   <!-- End Page Heading -->

   <main id="content">
      <div>

         <!-- Contactform -->
         <div class="grid-cols-1 2xl:grid-cols-2 gap-3 2xl:gap-6 mb-6 2xl:mb-10">
            @if(session('status'))
            <div class="w-full bg-green-100 rounded-md shadow-lg dark:bg-gray-800 dark:border-gray-700 mb-3 lg:mb-6" role="alert">
               <div class="flex p-4">
                  <div class="flex-shrink-0">
                     <svg class="h-6 w-6 text-green-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                     </svg>
                  </div>
                  <div class="ml-3">
                     <p class="text-green-600 dark:text-gray-400">
                        {{ session('status') }}
                     </p>
                  </div>
               </div>
            </div>
            @else
            <div class="bg-white border shadow-sm rounded-xl hover:shadow-md dark:bg-slate-900 dark:border-gray-800 p-6 grid grid-cols-1 xl:grid-cols-2 gap-3 xl:gap-6">
               <div class="flex flex-col items-center">
                  <svg class="w-32 mb-2 lg:mb-5 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                     </svg>
                  <h2 class="font-semibold mb-3">Kontaktirajte nas</h2>
                  <p class="text-center justify-center">U koliko želite stupiti sa nama u kontakt ispunite slijedeću formu i kliknite na "Pošalji poruku".</p>
                  <p class="mt-5"><small>Polja u formi sa zvjezdicom (*) obavezno ispuniti.</small></p>
               </div>
               <div class="flex flex-col">
                  @include('form.contact.write')
               </div>
            </div>
            @endif
         </div>
         <!-- Contactform End -->


         <!-- Cards -->
         <div class="text-xl font-bold mb-5">
            <h2>Kontakt-informacije {{ config('app.name') }} Udruženja</h2>
         </div>
         <div class="grid 2xl:grid-cols-2 gap-3 2xl:gap-6 mb-3 2xl:mb-6">
            <div class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="javascript:void(0)">
               <div class="p-4 md:p-5">
                  <div class="flex">
                     <svg class="mt-1 shrink-0 w-5 h-5 text-gray-800 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                     </svg>

                     <div class="ml-5">
                        <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                           Sjedište {{ config('app.name') }}
                        </h3>
                        <p>{{ config('company.namefull') }}</p>
                        <p>{{ config('company.street') }}</p>
                        <p>{{ config('company.postcode') }} {{ config('company.city') }}</p>
                        <p>{{ config('company.country-l') }}</p>
                        <p class="mt-3">
                           <a class="link flex items-center" href="{{ config('app.facebook') }}" target="_blank">
                              <span class="flex items-center">Facebook stranica</span>
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex items-center ml-1 underline underline-offset-4">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                              </svg>
                           </a>
                        </p>

                        <h3 class="mt-4 group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                           Obavještenje:
                        </h3>
                        <p>ID-broj: 4210525740004<br><small>(Identifikacioni broj poslovnog subjekta)</small></p>

                        <h3 class="mt-4 group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                           Predsjednik Udruženja:
                        </h3>
                        <p>Ramić Osman</p>
                         <p>eMail: <a href="mailto:o.ramix@gmx.ch" class="underline underline-offset-4">o.ramix@gmx.ch</a></p>
                         <p>Tel. +41 76 322 89 23 (CH)</p>
                     </div>

                  </div>
               </div>
            </div>
            <div class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="javascript:void(0)">
               <div class="p-4 md:p-5">
                  <div class="flex">
                     <svg class="mt-1 shrink-0 w-5 h-5 text-gray-800 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                     </svg>

                     <div class="ml-5">
                        <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                           Kancelarija za Dijasporu Općina Kalesija
                        </h3>
                        <p>Majdančić Nihada</p>
                        <p>Tel. +387 35 367 735</p>
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
         </div>
         <!-- Cards End -->
      </div>
   </main>
@endsection
