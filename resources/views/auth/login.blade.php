<x-guest-layout>
  
  
  
  
  
  <div class="max-w-xl lg:max-w-3xl">
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <a class="block text-blue-600" href="#">
                      <span class="sr-only">Home</span>
                     <img src="https://img.icons8.com/?size=100&id=xv9gnRfYNsNJ&format=png&color=000000" alt="">
                    </a>
            
                    <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                      Masuk LibraSmart
                    </h1>
            
                    <p class="mt-4 leading-relaxed text-gray-500">
                      Silahkan isi form untuk masuk akun sebelum melanjutkan
                    </p>
            
                    <form action="{{ route('login') }}" method="POST" class="mt-8 grid grid-cols-6 gap-6">
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
                      <div class="col-span-6 ">
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
                      <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                          <button
                          class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
                        type="submit"
                          >
                          Masuk
                        </button>
                        <x-google></x-google>
                        <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                          Belum Punya Akun?
                          <a href="{{ route('register') }}" class="text-gray-700 underline">Daftar</a>.
                        </p>
                    </div>
                    <div class="col-span-6 ">

                        <a class="text-sm text-gray-700 hover:underline " href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    </div>
                   
      
                      
                    </form>
                  </div>
  
            

</x-guest-layout>
