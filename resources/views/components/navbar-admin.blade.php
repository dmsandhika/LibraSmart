<!-- Main navigation container -->
<nav class="relative flex w-full flex-nowrap items-center justify-between bg-zinc-50 py-2 shadow-dark-mild  lg:flex-wrap lg:justify-start lg:py-4"
    data-twe-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between px-3">
        <!-- Hamburger button for mobile view -->
        <button
            class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0  lg:hidden"
            type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent7"
            aria-controls="navbarSupportedContent7" aria-expanded="false" aria-label="Toggle navigation">
            <!-- Hamburger icon -->
            <span class="[&>svg]:w-7 [&>svg]:stroke-black/50 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </button>

        <!-- Collapsible navbar container -->
        <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
            id="navbarSupportedContent7" data-twe-collapse-item>
            <div class="pl-5">
              <h2 class="text-3xl font-medium text-gray-900">
                      @if (request()->is('dashboard'))
                          Dashboard
                      @elseif (request()->is('reports'))
                          Reports
                      @elseif (request()->is('data'))
                          Data
                      @else
                          Welcome
                      @endif
              </h2>
            </div> 
            <!-- Left links -->
            <ul class="list-style-none ms-auto flex flex-col ps-0 lg:mt-1 lg:flex-row" data-twe-navbar-nav-ref>

                <!-- Link -->
                <x-nav-link-admin href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-nav-link-admin>
                <x-nav-link-admin href="/reports" :active="request()->is('reports')">Reports</x-nav-link-admin>
                <x-nav-link-admin href="/data/user" :active="request()->is('data/*')">Data</x-nav-link-admin>

                <!-- Dropdown link -->
                <li class="mb-4 ps-2 mr-10 lg:mb-0 lg:pe-1 lg:ps-0" data-twe-nav-item-ref data-twe-dropdown-ref>
                    <!-- Dropdown -->
                    <a class="flex items-center text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none  lg:px-2"
                        href="#" type="button" id="dropdownMenuButton2" data-twe-dropdown-toggle-ref
                        aria-expanded="false">
                        {{ Auth::user()->name }}
                        <span class="ms-1 [&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                        aria-labelledby="dropdownMenuButton1" data-twe-dropdown-menu-ref>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline  "
                                href="/" data-twe-dropdown-item-ref>Go To User Side</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline  "
                                href="#" data-twe-dropdown-item-ref>Logout</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
