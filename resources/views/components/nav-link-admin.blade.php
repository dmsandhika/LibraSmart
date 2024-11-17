@props(['active'])

<li class="mb-4 ps-2 " data-twe-nav-item-ref>
    <a class="{{ $active ?'border-teal-600 border-b-4 font-bold' : 'hover:border-b-4 hover:border-teal-600 hover:border-opacity-30 ' }} p-0   pb-2 text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out  focus:text-black/80 active:text-black/80 motion-reduce:transition-none  lg:px-2"
        {{ $attributes }} aria-current="{{ $active ? "page" : false }}">{{ $slot }}</a>
</li>
