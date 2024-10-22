<x-guest-layout>
    <div class="max-w-xl lg:max-w-3xl">


        <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
          Ubah Kata Sandi
        </h1>

        <p class="mt-4 leading-relaxed text-gray-500">
          Silahkan isi form untuk masuk akun sebelum melanjutkan
        </p>

        <form action="{{ route('password.store') }}" method="POST" class="mt-8 grid grid-cols-6 gap-6">
          @csrf
          <input type="hidden" name="token" value="{{ $request->route('token') }}">
          

          <div class="col-span-6">
            <label for="Email" class="block text-sm font-medium text-gray-700" :value="__('Email')" > Email </label>

            <input
              type="email"
              id="Email"
              name="email"
              class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" required
              :value="old('email', $request->email)"
            /> 
          </div>
          @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            <div class="col-span-6 sm:col-span-3">
                <label for="Password" class="block text-sm font-medium text-gray-700"> Password </label>
    
                <input
                  type="password"
                  id="Password"
                  name="password"
                  class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                />
                @error('password')
                      <span class="text-red-500 text-sm">{{ $message }}</span>
                  @enderror
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="PasswordConfirmation" class="block text-sm font-medium text-gray-700">
                  Password Confirmation
                </label>
    
                <input
                  type="password"
                  id="PasswordConfirmation"
                  name="password_confirmation"
                  class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                />
                @error('password_confirmation')
                <span class="text-red-500 text-sm">{{ $message }}</span>
              @enderror
              </div>
          <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
              <button
              class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
            type="submit"
              >
              Reset Password
            </button>
            
        </div>
       
       

          
        </form>
      </div>
   
</x-guest-layout>
