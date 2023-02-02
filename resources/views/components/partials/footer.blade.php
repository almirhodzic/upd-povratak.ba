<!--Footer-->
<footer class="bg-gray-900 w-full">
    <div class="max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">
        <!-- Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
            <div class="col-span-full lg:col-span-1">
                <a class="flex-none text-xl font-semibold text-white" href="/" aria-label="Brand">
                    <img src="{{ asset('static/assets/img/logo-upd.povratak.ba.png') }}">
                </a>
            </div>
            <!-- End Col -->

            <div class="col-span-1 text-sm">

                <h4 class="font-semibold text-gray-100">Adresa</h4>
                <div class="mt-1 grid space-y-0 text-gray-400">
                    <p class="font-semibold">UPD "Povratak"</p>
                    <p>Udruženje Penzionera Dijaspore BiH</p>
                    <p>Ul. Žrtava Genocida Srebrenice</p>
                    <p>75260 Kalesija</p>
                    <p>Bosna i Hercegovina</p>
                </div>

                <h4 class="font-semibold text-gray-100 mt-3">eMail</h4>
                <div class="mt-1 grid space-y-0 text-gray-400">
                    <p>info@upd-povratak.ba</p>
                </div>
            </div>
            <!-- End Col -->

            <div class="col-span-1 text-sm"">
            <h4 class="font-semibold text-gray-100">Kancelarija za Dijasporu</h4>
            <div class="mt-1 grid space-y-0 text-gray-400">
                <p>Majdančić Nihada</p>
                <p>+387 35 367 735</p>
            </div>

            <h4 class="font-semibold text-gray-100 mt-3">Statut PDF</h4>
            <div class="mt-1 grid space-y-0 text-gray-400">
                <a href="{{ asset('static/assets/files/Statut-UDP-Povratak.pdf') }}" class="underline underline-offset-4 hover:text-indigo-500">Statut Download (PDF)</a>
            </div>
        </div>
        <!-- End Col -->

        <div class="col-span-2 text-sm">
          <h4 class="font-semibold text-gray-100">Pretplata novosti i aktivnosti {{ config('app.name') }} Udruženja.</h4>

          <form>
            <div class="mt-4 flex flex-col items-center gap-2 sm:flex-row sm:gap-3 bg-white rounded-md p-2">
              <div class="w-full">
                <input type="text" id="hero-input" name="hero-input" class="text-sm py-1 px-2 block w-full border-transparent shadow-sm rounded-md focus:z-10 focus:outline-none" placeholder="Unesite vašu eMail-adresu">
              </div>
              <a class="w-full sm:w-auto whitespace-nowrap inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-white font-medium rounded-md focus:outline-none  py-1 px-2" href="#">
                Sačuvaj adresu
              </a>
            </div>
            <p class="mt-3 text-sm text-gray-400">
                Periodno primanje novosti i aktivnosti {{ config('app.name') }} Udruženja putem elektronkse poste (eMail). Pretplata je besplatna i može se deaktivirati u bilo koje vrijeme.
            </p>
          </form>
        </div>
        <!-- End Col -->
    </div>
    <!-- End Grid -->

    <div class="mt-5 sm:mt-12 grid gap-y-2 sm:gap-y-0 sm:flex sm:justify-between sm:items-center">
        <div class="flex justify-between items-center">
            <p class="text-sm text-gray-400">© 2022 Sva prava zadržana. {{ config('app.name') }}</p>
        </div>
        <!-- End Col -->

        <!-- Social Brands -->
        <div>
            <a class="inline-flex justify-center items-center gap-x-3.5 w-10 h-10 text-center text-gray-200 hover:bg-white/[.1] rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-gray-900 transition" href="{{ config('app.facebook') }}" target="_blank">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
            </a>
        </div>
        <!-- End Social Brands -->
    </div>
    </div>
</footer>
<!--Footer End-->
