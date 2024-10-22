<x-guest-layout>
    
    <div class="max-w-xl lg:max-w-3xl">
        <x-auth-session-status class="mb-4" :status="session('status')" />


        <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
          Luba Kata Sandi
        </h1>

        <p class="mt-4 leading-relaxed text-gray-500">
          Silahkan isi form untuk masuk akun sebelum melanjutkan
        </p>

        <form action="{{ route('password.email') }}" method="POST" class="mt-8 grid grid-cols-6 gap-6">
          @csrf
          
          

          <div class="col-span-6">
            <label for="Email" class="block text-sm font-medium text-gray-700"> Email </label>

            <input
              type="email"
              id="Email"
              name="email"
              class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" required
            /> 
          </div>
          @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
          <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
              <button
              class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
            type="submit"
              >
              Kirim Email
            </button>
            
        </div>
       
       

          
        </form>
      </div>
</x-guest-layout>
