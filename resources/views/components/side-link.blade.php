@props(['active'])

<div class="group relative w-full">
  <a href="#" class="{{ $active ? 'bg-gray-300' : 'group-hover:bg-gray-300 ' }} w-full h-16 p-4 rounded-xl flex flex-row gap-3 items-center justify-center text-black border-solid border-black/10 ease-in-out duration-300">
      {{ $slot }}
  </a>
</div>