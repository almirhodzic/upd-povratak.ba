<div id="application-sidebar" class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 left-0 bottom-0 z-[60] w-64 bg-white border-r border-gray-200 pt-7 pb-10 overflow-y-auto scrollbar-y md:block md:translate-x-0 md:right-auto md:bottom-0 dark:scrollbar-y dark:bg-gray-800 dark:border-gray-700">
    <div class="grid place-items-center mb-5">
        <a href="{{ config('app.url') }}">
        <img src="{{ asset('static/assets/img/logo-upd.povratak.ba.png') }}" class="object-scale-down h-36 w-36" alt="Logo {{ config('app.name') }} BiH">
        </a>
    </div>
    <div class="px-6 text-center">
        <a class="text-xl font-bold dark:text-white leading-none" href="{{ config('app.url') }}" aria-label="{{ config('app.name') }}">
            {{ config('app.name') }}
            <span class="text-gray-600 text-xm uppercase font-medium">{{ config('company.association') }}</span>
        </a>
    </div>

    <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
        <ul class="space-y-1.5">
            <li><a class="navi-item {{ Route::is('home.index') ? 'active': '' }}" href="{{ route('home.index') }}">Pocetna</a></li>
            <li><a class="navi-item {{ Route::is('statut.index') ? 'active': '' }}" href="{{ route('statut.index') }}">Statut</a></li>
            <li><a class="navi-item {{ Route::is('bank.index') ? 'active': '' }}" href="{{ route('bank.index') }}">Uplate</a></li>
            <li><a class="navi-item {{ Route::is('contact.index') ? 'active': '' }}" href="{{ route('contact.index') }}">Kontakt</a></li>
            <li><a class="navi-item {{ Route::is('member.index') || Route::is('member.signup') ? 'active': '' }}" href="{{ route('member.index') }}">Clanstvo</a></li>
        </ul>
    </nav>
</div>