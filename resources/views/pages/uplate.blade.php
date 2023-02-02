@extends('layouts.index')

@section('content')
   <!-- Page Heading -->
   <x-partials.header>
      <x-slot name="currentpagename">Uplate</x-slot>
      <x-slot name="headertitle">
         <span class="whitespace-nowrap">Bankovni račun</span>
      </x-slot>
      <x-slot name="headertitlesub">
         Informacije vezano za uplate
      </x-slot>
   </x-partials.header>
   <!-- End Page Heading -->

   <main id="content">
      <p class="p-space">
         Preuzmite informacije vezano za bankovni račun (uplate) {{ config('app.name') }} Udruženja.
      </p>
      <div class="grid 2xl:grid-cols-2 gap-3 2xl:gap-6 mb-3 2xl:mb-6">
         <a class="group flex flex-col bg-white hover:bg-indigo-50 border hover:border-indigo-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="javascript:void(0)">
            <div class="p-4 md:p-5">
               <div class="flex">
                  <div class="ml-5">
                     <h3 class="group-hover:text-blue-600 text-xl font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200 mb-3">
                        56A: Posrednička institucija<sup>1</sup>:
                     </h3>
                     <p class="font-semibold">BKAUATWW<sup>2</sup> (UNICREDIT BANK AUSTRIA):</p>
                     <p class="text-xs text-gray-400">ILI</p>
                     <p><span class="font-semibold">KTAGDEFF</span> (KT BANK AG, GERMANY)</p>
                     <p class="text-xs text-gray-400">ILI</p>
                     <p><span class="font-semibold">PBZGHR2X</span> (PRIVREDNA BANKA DD CROATIA)</p>
                  </div>
               </div>
            </div>
         </a>

         <a class="group flex flex-col bg-white hover:bg-indigo-50 border hover:border-indigo-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="javascript:void(0)">
            <div class="p-4 md:p-5">
               <div class="flex">
                  <div class="ml-5">
                     <h3 class="group-hover:text-blue-600 text-xl font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200 mb-3">
                        57A: Račun kod institucije:
                     </h3>
                     <p class="font-semibold">BBIBBA22XXX</p>
                     <p>BOSNA BANK INTERNATIONAL DD SARAJEVO</p>
                     <p>SARAJEVO, BOSNIA AND HERCEGOVINA</p>
                  </div>
               </div>
            </div>
         </a>

         <a class="group flex flex-col bg-white hover:bg-indigo-50 border hover:border-indigo-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="javascript:void(0)">
            <div class="p-4 md:p-5">
               <div class="flex">
                  <div class="ml-5">
                     <h3 class="group-hover:text-blue-600 text-xl font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200 mb-3">
                        59A: Korisnički racun:
                     </h3>
                     <p>UDRUZENJE PENZIONERA DIJASPORE POVRATAK</p>
                     <p>ZRTAVA GENOCIDA U SREBRENICI BB</p>
                     <p>KALESIJA</p>
                     <p>BOSNA I HERCEGOVINA</p>
                  </div>
               </div>
            </div>
         </a>

         <a class="group flex flex-col bg-white hover:bg-indigo-50 border hover:border-indigo-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="javascript:void(0)">
            <div class="p-4 md:p-5">
               <div class="flex">
                  <div class="ml-5">
                     <h3 class="group-hover:text-blue-600 text-xl font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200 mb-3">
                        IBAN / broj računa:
                     </h3>
                     <p class="font-semibold">BA391413895310004817</p>
                  </div>
               </div>
            </div>
         </a>

         <a class="group flex flex-col bg-white hover:bg-indigo-50 border hover:border-indigo-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="javascript:void(0)">
            <div class="p-4 md:p-5">
               <div class="flex">
                  <div class="ml-5">
                     <h3 class="group-hover:text-blue-600 text-xl font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200 mb-3">
                        70A: Informacije o doznaci:
                     </h3>
                     <p>Svrha plaćanja</p>
                  </div>
               </div>
            </div>
         </a>

         <a class="group flex flex-col bg-white hover:bg-indigo-50 border hover:border-indigo-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="javascript:void(0)">
            <div class="p-4 md:p-5">
               <div class="flex">
                  <div class="ml-5">
                     <h3 class="group-hover:text-blue-600 text-xl font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200 mb-3">
                        Bilješka:
                     </h3>
                     <p>Upotreba polja 56A, 57A, 59A i 70 je obavezna.</p>
                  </div>
               </div>
            </div>
         </a>

      </div>

      <hr class="my-8 w-full h-px bg-gray-200 border-0 dark:bg-gray-700">

      <p>Datum: 21.11.2022</p>
      <small class="m-3">
         <p>
            <sup>1</sup> Možete koristiti jednu od sljedećih korespondentskih banaka za plaćanje u EUR u korist računa kod BBI.
         </p>
         <p>
            <sup>2</sup> Preferirani dopisnik u EUR.
         </p>
      </small>
      {{--<p>
         Obavjestavamo Vas da ce BBI, za priliv koji bude realizirani sa opcijom OUR, a u slucaju da ino banka prema BBI ne doznaci cjelokupan ili dijelimican iznos provizije za obradu priliva, naplatu provizije potrazivati od Korisnika sredstava, te istu naknadno naplatiti sa transakcijskog racuna Korisnika.
      </p>--}}
   </main>
@endsection
