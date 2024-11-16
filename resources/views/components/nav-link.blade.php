@props(['active'])


<li class="w-full"><a {{ $attributes }}
        class="{{ $active ? "text-teal-600 bg-gray-300" : "text-gray-500 transition hover:text-teal-600 hover:bg-gray-300" }}   rounded-md w-full text-center px-5 py-2.5" aria-current="{{ $active ? "page" : false }}
        ">{{ $slot }}</a></li>
