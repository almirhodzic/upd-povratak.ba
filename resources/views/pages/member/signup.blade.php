@extends('layouts.index')

@section('content')
   <!-- Page Heading -->
   <x-partials.header>
      <x-slot name="currentpagename">Forma za Clanstvo</x-slot>
      <x-slot name="headertitle">
         <span class="whitespace-nowrap">Clan Udruzenja</span>
      </x-slot>
      <x-slot name="headertitlesub">
         Zahtjev za clanstvo {{ config('app.name') }}
      </x-slot>
   </x-partials.header>
   <!-- End Page Heading -->

   <main id="content">
      <div>
         <!-- Memberform -->
         <div class="grid-cols-1 2xl:grid-cols-2 gap-3 mb-6 2xl:mb-10">
            @if(session('status'))
            <div class="w-full bg-green-100 rounded-md shadow-lg dark:bg-gray-800 dark:border-gray-700 mb-3 lg:mb-6 pt-3" role="alert">
               <div class="flex p-4">
                  <div class="flex-shrink-0">
                     <svg class="h-6 w-6 text-green-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                     </svg>
                  </div>
                  <div class="ml-3">
                     <p class="text-green-600 dark:text-gray-400">
                     <p class="p-space">Poštovani/a {{ session('name') }}</p>
                     <p class="p-space">Uspjesno ste poslali Zahtjev za Clanstvo {{ config('app.name') }} Udruzenje. Otvorite Vas INBOX ({{ session('email') }}) na koji smo poslali verifikacijski link, kliknite na link da bi verificirali Vasu eMail adresu.</p>
                     <p class="mb-6">U koliko imate pitanja u vezi Verifikacije javite name se preko <a href="{{ route('contact.index') }}" class="link">Kontakt-forme</a>.</p>
                  </div>
               </div>
            </div>
            @else
            <div class="bg-white dark:bg-slate-900 grid grid-cols-1 xl:grid-cols-2 gap-3 xl:gap-6">
               <div class="flex flex-col">
                  <div>
                     <p class="mb-5 md:text-lg text-gray-800 dark:text-gray-200">
                        Popunite formu i kliknite na "Posalji zahtjev". Nakon toga primicete eMail kao potvrdu istog i slijedit Link u mailu.
                     </p>
                     <!--FormMember -->
                     <div class="flex flex-col">
                        <div class="mb-10 border rounded-xl p-10 xl:p-8 dark:border-gray-700 shadow-lg bg-gray-50">
                           @include('form.member.signup')
                        </div>
                     </div>
                     <!--FormMember End -->
                  </div>
               </div>
            </div>
            @endif
         </div>
         <!-- Memberform End -->
      </div>
   </main>
@endsection