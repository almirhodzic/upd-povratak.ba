@extends('layouts.index')

@section('content')
   <!-- Page Heading -->
   <x-partials.header>
      <x-slot name="currentpagename">Login</x-slot>
      <x-slot name="headertitle">
         <span class="whitespace-nowrap">Članstvo</span>
      </x-slot>
      <x-slot name="headertitlesub">
         Članstvo {{ config('app.name') }} Udruženja
      </x-slot>
   </x-partials.header>
   <!-- End Page Heading -->

   <main>
      <div class="mb-8">
         <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-5">Koji su benefiti Članstva {{ config('app.name') }} Udruženja?</h2>
         @include('form.member.benefits')
      </div>
      <p class="p-space">
         Kliknite na slijedeći link kako bi podnijeli zahtjev za Članstvo {{ config('app.name') }} Udruženja.
      </p>

         <button class="btn btn-indigo mb-3" onClick="window.location = '{{ route('member.signup') }}'">
            <svg class="btn-icon w-5 h-5"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>
            Zahtjev za Članstvo
         </button>

      <p class="mt-5">
         Pitanja vezano za Članstvo postavite preko <a href="{{ route('contact.index') }}" class="link">Kontakt-forme</a>.
      </p>
   </main>
@endsection
