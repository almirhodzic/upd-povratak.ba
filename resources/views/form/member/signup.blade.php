<form action="{{ route('member.store') }}" method="POST">
   @csrf
   @method('POST')
   <div class="mb-5">
      <label for="name" class="sr-only">Ime i prezime</label>
      <input type="text" name="name" id="name" class="form-control basic-input @error('name') border border-red-500 @enderror" placeholder="Ime i prezime *" value="{{ old('name') }}">
      @error('name')<div class="error-label">{{ $message }}</div>@enderror
   </div>
   <div class="mb-5">
      <label for="street" class="sr-only">Ulica i broj (BiH)</label>
      <input type="text" name="street" id="street" class="form-control basic-input @error('street') border border-red-500 @enderror" placeholder="Ulica i broj (BiH) *" value="{{ old('street') }}">
      @error('street')<div class="error-label">{{ $message }}</div>@enderror
   </div>

   <div class="grid grid-cols-1 2xl:grid-cols-2 gap-3">
      <div class="flex flex-col mb-2">
         <label for="postcode" class="sr-only">Poštanski broj (BiH)</label>
         <input type="text" name="postcode" id="postcode" class="form-control basic-input @error('postcode') border border-red-500 @enderror" placeholder="Poštanski broj (BiH) *" value="{{ old('postcode') }}">
         @error('postcode')<div class="error-label">{{ $message }}</div>@enderror
      </div>
      <div class="flex flex-col mb-5">
         <label for="city" class="sr-only">Općina (BiH)</label>
         <input type="text" name="city" id="city" class="form-control basic-input @error('city') border border-red-500 @enderror" placeholder="Općina (BiH) *" value="{{ old('city') }}">
         @error('city')<div class="error-label">{{ $message }}</div>@enderror
      </div>
   </div>

   <div class="mb-5">
      <label for="phone" class="sr-only">Telefon / Mobitel (BiH)</label>
      <input type="text" name="phone" id="phone" class="form-control basic-input @error('phone') border border-red-500 @enderror" placeholder="Telefon / Mobitel (BiH) *" value="{{ old('phone') }}">
      @error('phone')<div class="error-label">{{ $message }}</div>@enderror
   </div>

   <div class="mb-5">
      <label for="email" class="sr-only">eMail adresa</label>
      <input type="email" name="email" id="email" class="form-control basic-input @error('email') border border-red-500 @enderror" placeholder="eMail adresa *" value="{{ old('email') }}">
      @error('email')<div class="error-label">{{ $message }}</div>@enderror
   </div>

   <div class="mb-5">
      <label for="phone-dijaspora" class="sr-only">Telefon / Mobitel (u dijaspori)</label>
      <input type="text" name="phone_dijaspora" id="phone_dijaspora" class="form-control basic-input @error('phone_dijaspora') border border-red-500 @enderror" placeholder="Telefon / Mobitel (u dijaspori)" value="{{ old('phone_dijaspora') }}">
      @error('phone_dijaspora')<div class="error-label">{{ $message }}</div>@enderror
   </div>
   <div class="mb-3">
      <label for="message" class="sr-only">Poruka (opcijonalno)</label>
      <textarea id="message" name="message" rows="2" class="form-control basic-input @error('message') border border-red-500 @enderror" placeholder="Poruka (opcijonalno)">{{ old('message') }}</textarea>
      @error('message')<div class="error-label">{{ $message }}</div>@enderror
   </div>

   <div class="flex items-center">
      <div class="flex">
         <input id="accept-statut" name="accept-statut" type="checkbox" class="form-control basic-checkbox @error('accept-statut') shadow hadow-red-600 shadow-xl s border border-2 border-red-500 @enderror" {{ (! empty(old('accept-statut')) ? 'checked' : '') }}>
      </div>
      <div class="ml-2">
         <label for="accept-statut" class="dark:text-white @error('accept-statut') text-red-500 @enderror">Prihvatam <a href="{{ asset('static/assets/files/Statut-UPD-Povratak.pdf') }}" class="link" target="_blank">
               Statut</a>, viziju i ciljeve Udruženja
         </label>
      </div>
   </div>@error('accept-statut')<div class="text-sm mt-2 px-1 py-0.5 bg-red-500 text-white font-light rounded"><span>{{ $message }}</span></div>@enderror

   <div class="mt-8 grid">
      <button type="submit" class="btn btn-indigo">
         <svg class="btn-icon w-5 h-5"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
         </svg>
         Pošalji zahtjev za Članstvo
      </button>
   </div>
</form>
