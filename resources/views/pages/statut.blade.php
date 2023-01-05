@extends('layouts.index')

@section('content')
   <!-- Page Heading -->
   <x-partials.header>
      <x-slot name="currentpagename">Statut</x-slot>
      <x-slot name="headertitle">
         <span class="whitespace-nowrap">Statut</span> <span class="whitespace-nowrap text-indigo-500">{{ config('app.name') }}</span>
      </x-slot>
      <x-slot name="headertitlesub">
         Download
      </x-slot>
   </x-partials.header>
   <!-- End Page Heading -->

   <main id="content">
      <p>
         Na slijedecem linku mozete snimiti Statut {{ config('app.name') }} Udruzenja kao PDF-Fajl.
      </p>
      <p class="p-space">
         Kliknite na slijedeci link i snimite Fajl na Vas racunar ili mobitel.
      </p>

         <button class="btn btn-indigo mb-3" onClick="window.open('{{ asset('static/assets/files/Statut-UPD-Povratak.pdf') }}','_blank')">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="btn-icon w-5 h-5">
               <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
            </svg>
            Statut download
         </button>

      <small>PDF, 219 KB, 04.08.2022.</small>
   </main>
@endsection