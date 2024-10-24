<header class="bg-white">
  <div class="mx-auto max-w-screen-xl px-4 py-5 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex-1 md:flex md:items-center md:gap-12">
        <a class="flex items-center text-teal-600" href="#">
          <img src="https://img.icons8.com/?size=100&id=xv9gnRfYNsNJ&format=png&color=000000" alt="" class="h-8 mr-2">
          <h1 class="font-bold text-lg">LibraSmart</h1>
        </a>
      </div>

      <div class="md:flex md:items-center md:gap-12">
        <nav aria-label="Global" class="hidden md:block">
          <ul class="flex place-items-center gap-6 text-sm">
            <li class="w-full"><a class="text-gray-500 transition hover:text-teal-600 hover:bg-gray-300 rounded-md w-full text-center px-5 py-2.5" href="#">About</a></li>
            <li class="w-full"><a class="text-gray-500 transition hover:text-teal-600 hover:bg-gray-300 rounded-md w-full text-center px-5 py-2.5" href="#">Careers</a></li>
            <li class="w-full"><a class="text-gray-500 transition hover:text-teal-600 hover:bg-gray-300 rounded-md w-full text-center px-5 py-2.5" href="#">History</a></li>
            <li class="w-full"><a class="text-gray-500 transition hover:text-teal-600 hover:bg-gray-300 rounded-md w-full text-center px-5 py-2.5" href="#">Services</a></li>
            <li class="w-full"><a class="text-gray-500 transition hover:text-teal-600 hover:bg-gray-300 rounded-md w-full text-center px-5 py-2.5" href="#">Projects</a></li>
          </ul>
        </nav>

        <div class="flex items-center gap-4">
          <div class="sm:flex sm:gap-4">
            <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow" href="{{ route('login') }}">Login</a>
            <div class="hidden sm:flex">
              <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600" href="{{ route('register') }}">Register</a>
            </div>
          </div>

          <div class="block md:hidden">
            <button id="mobile-menu-button" class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
              <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden h-auto">
      <nav aria-label="Global" class="mt-4">
        <ul class="flex flex-col gap-4 text-sm w-full">
          <li>
            <a class="text-gray-500 transition hover:text-teal-600 hover:bg-gray-300 rounded-md w-full text-center px-5 py-2.5" href="#">About</a>
          </li>
          <li>
            <a class="text-gray-500 transition hover:text-teal-600 hover:bg-gray-300 rounded-md w-full text-center px-5 py-2.5" href="#">Careers</a>
          </li>
          <li>
            <a class="text-gray-500 transition hover:text-teal-600 hover:bg-gray-300 rounded-md w-full text-center px-5 py-2.5" href="#">History</a>
          </li>
          <li>
            <a class="text-gray-500 transition hover:text-teal-600 hover:bg-gray-300 rounded-md w-full text-center px-5 py-2.5" href="#">Services</a>
          </li>
          <li>
            <a class="text-gray-500 transition hover:text-teal-600 hover:bg-gray-300 rounded-md w-full text-center px-5 py-2.5" href="#">Projects</a>
          </li>
          <li>
            <a class="text-gray-500 transition hover:text-teal-600 hover:bg-gray-300 rounded-md w-full text-center px-5 py-2.5" href="#">Blog</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>

<script>
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');

  mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>
