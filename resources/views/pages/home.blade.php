@extends('layouts.index')

@section('content')
   <!-- Page Heading -->
   <x-partials.header>
      <x-slot name="currentpagename">Početna stranica</x-slot>
      <x-slot name="headertitle">
         <span class="whitespace-nowrap">Dobrodošli na</span> <span class="whitespace-nowrap text-indigo-500">{{ config('app.name') }}</span>
      </x-slot>
      <x-slot name="headertitlesub">
         Udruženje Penzionera Dijaspore Bosne i Hercegovine
      </x-slot>
   </x-partials.header>
   <!-- End Page Heading -->

   <main id="content">
      <p>
         {{ config('company.namefull') }} je dobrovoljna, socijalno-humanitarna nevladina i vanstranačka organizacija u kojoj članovi ostvaruju zajedničke interese i potrebe kao: zaštita prava penzionera dijaspore, jačanje veza između Udruženja i dijaspore, saradnju sa lokalnom upravom i drugim Udruženjima gdje postoji zajednički interes, zatim zajednička druženja, putovanja, banjska liječenja, humanitarne aktivnosti i slično. Udruženje će pomagati u zbrinjavanju svojih članova u domove za stara lica i učestvovati u izgradnji istih u skladu sa svojim mogućnostima.
      </p>
      <p class="mt-5">
         Udruženje se finansira članarinom svojih članova, donacijama, projektima, grantovima i slično.
      </p>
   <!-- Hero -->
   <div class="relative overflow-hidden mb-5">
      <div class="my-5">
         <div style="background-image: url('{{asset('static/assets/img/penzioneri/sretni.jpg')}}')" class="w-full object-cover h-96 bg-no-repeat bg-center bg-cover rounded-md"></div>
      </div>
   </div>
   <!-- End Hero -->
   <p>
      {{ config('company.namefull') }} je osnovano 04.08.2022. godine.
   </p>
   </main>
@endsection
