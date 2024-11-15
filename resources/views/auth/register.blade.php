<x-guest-layout>

      <div class="max-w-xl lg:max-w-3xl">
        <a class="block text-blue-600" href="#">
          <span class="sr-only">Home</span>
         <img src="https://img.icons8.com/?size=100&id=xv9gnRfYNsNJ&format=png&color=000000" alt="">
        </a>

        <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
          Buat Akun LibraSmart
        </h1>

        <p class="mt-4 leading-relaxed text-gray-500">
          Silahkan isi form dan buat akun sebelum melanjutkan
        </p>

        <form action="{{ route('register') }}" method="POST" class="mt-8 grid grid-cols-6 gap-6">
          @csrf
          <div class="col-span-6 ">
            <label for="tName" class="block text-sm font-medium text-gray-700">
              Nama
            </label>

            <input
              type="text"
              id="Name"
              name="name"
              class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" required
            />
          </div>

          

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
  
              <div class="relative">
                <input
                  type="password"
                  id="Password"
                  name="password"
                  class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm pr-10"
                />
                <span
                  class="absolute inset-y-0 right-3 flex items-center mt-4 cursor-pointer icon-[mdi--eye]"
                  onclick="togglePasswordVisibility()"
                ></span>
              </div>
              
              @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div> 
          <div class="col-span-6">
            <label for="PasswordConfirmation" class="block text-sm font-medium text-gray-700">
              Password Confirmation
            </label>
            <div class="relative">

              <input
              type="password"
              id="PasswordConfirmation"
              name="password_confirmation"
              class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
              />
              <span
              class="absolute inset-y-0 right-3 flex items-center mt-4 cursor-pointer icon-[mdi--eye]"
              onclick="togglePasswordVisibility2()"
              ></span>
            </div>
            @error('password_confirmation')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
          </div>


         

          <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
            <button
              class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
            type="submit"
              >
              Buat Akun
            </button>
            <x-google></x-google>


            <p class="mt-4 text-sm text-gray-500 sm:mt-0">
              Sudah Punya Akun?
              <a href="{{ route('login') }}" class="text-gray-700 underline">Masuk</a>.
            </p>
          </div>
        </form>
      </div>
      <script>
        const togglePasswordVisibility = () => {
          const passwordInput = document.getElementById('Password');
          const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
          passwordInput.setAttribute('type', type);
        }

        const togglePasswordVisibility2 = () => {
          const passwordInput = document.getElementById('PasswordConfirmation');
          const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
          passwordInput.setAttribute('type', type);
        }
      </script>
</x-guest-layout>
