<form action="{{ route('contact.store') }}" method="POST">
   @csrf
   @method('POST')
   <div class="mb-5">
      <label for="name" class="sr-only">Ime i prezime</label>
      <input type="text" name="name" id="name" class="form-control basic-input @error('name') border border-red-500 @enderror" placeholder="Ime i prezime *" value="{{ old('name') }}">
      @error('name')<div class="error-label">{{ $message }}</div>@enderror
   </div>
   <div class="mb-5">
      <label for="email" class="sr-only">eMail adresa</label>
      <input type="email" name="email" id="email" class="form-control basic-input @error('email') border border-red-500 @enderror" placeholder="eMail adresa *" value="{{ old('email') }}">
      @error('email')<div class="error-label">{{ $message }}</div>@enderror
   </div>
   <div>
      <label for="message" class="sr-only">Poruka</label>
      <textarea id="message" name="message" rows="4" class="form-control basic-input @error('message') border border-red-500 @enderror" placeholder="Poruka">{{ old('message') }}</textarea>
      @error('message')<div class="error-label">{{ $message }}</div>@enderror
   </div>
   <div class="mt-4 grid">
      <button type="submit" class="btn btn-indigo bg-gray-200 text-gray-800 hover:text-gray-100">
         <svg class="btn-icon w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
         </svg>
         Pošalji poruku
      </button>
   </div>
</form>
