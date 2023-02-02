@extends('layouts.index')

@section('content')
   <!-- Page Heading -->
   <x-partials.header>
      <x-slot name="currentpagename">Verifikacija</x-slot>
      <x-slot name="headertitle">
         <span class="whitespace-nowrap">Članstvo {{ config('app.name') }}</span>
      </x-slot>
      <x-slot name="headertitlesub">
         Verifikacija eMail adrese
      </x-slot>
   </x-partials.header>
   <!-- End Page Heading -->

   <main id="content">
      @isset($message)
         <x-result-messages.w-full>

            @if($status == 'verified')
               <x-slot name="resultbgcolor">bg-gray-200</x-slot>
               <x-slot name="resulticon">
                  <svg class="h-7 w-7 text-gray-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                  </svg>

               </x-slot>
               <x-slot name="resulmessage">
                  <h3 class="text-xl mb-2 text-green-900 dark:text-gray-200">{{ $message }}</h3>
                  <p class="p-space">Hvala!</p>
               </x-slot>

            @elseif($status == 'notfound')
               <x-slot name="resultbgcolor">bg-rose-100</x-slot>
               <x-slot name="resulticon">
                  <svg class="h-6 w-6 text-rose-600 mt-0.5"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                  </svg>

               </x-slot>
               <x-slot name="resulmessage">
                  <h3 class="text-xl mb-2 text-rose-700 dark:text-gray-200">{{ $message }}</h3>
                  <p class="text-rose-700 dark:text-gray-200 p-space">Ukoliko smatrate da je ovo greška obratite nam se putem <a href="{{ route('contact.index') }}" class="link">Kontakt-forme.</a></p>
               </x-slot>

            @else
               <x-slot name="resultbgcolor">bg-green-100</x-slot>
               <x-slot name="resulticon">
                  <svg class="h-6 w-6 text-green-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                     <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                  </svg>
               </x-slot>
               <x-slot name="resulmessage">
                  <h3 class="text-xl mb-2 text-green-700 dark:text-gray-200">{{ $message }}</h3>
                  <p class="p-space">Zahtjev za Članstvo je, nakog verifikacije eMail-adrese, u toku. Obratićemo Vam se putem maila ili poštom sto prije.</p>
                  <p class="p-space">Hvala za Vas interes prema našem Udruženju.</p>
               </x-slot>
            @endif
         </x-result-messages.w-full>
      @endisset
      <div class="">Dalje na <a href="{{ route('home.index') }}" class="link">početnu stranicu</a>.</div>
   </main>
@endsection
