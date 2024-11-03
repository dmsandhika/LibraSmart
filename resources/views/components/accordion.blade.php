<div id="accordionFlushExample">
  <div class="border border-e-0 border-s-0 border-t-0 border-neutral-200 bg-[#0d9488] rounded-xl">
    <h2 class="mb-0" id="{{ $id }}">
      <button
        class="rounded-t-xl group relative flex w-full items-center border-0 bg-[#0d9488] px-5 py-4 text-left text-base text-white transition duration-200 ease-in-out hover:bg-[#237f77] focus:outline-none"
        type="button"
        data-twe-collapse-init
        data-twe-target="#{{ $id }}-collapse"
        aria-expanded="false"
        aria-controls="{{ $id }}-collapse">
        {{ $title }}
        <span class="-me-1 ms-auto h-5 w-5 shrink-0 transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:rotate-0 rotate-[-180deg]">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white group-hover:text-gray-200">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </span>
      </button>
    </h2>
    <div
      id="{{ $id }}-collapse"
      class="!visible border-0 hidden"
      data-twe-collapse-item
      aria-labelledby="{{ $id }}"
      data-twe-parent="#accordionFlushExample">
      <div class="px-5 py-4">
        {{ $slot }} <!-- Konten accordion dapat diisi dengan slot -->
      </div>
    </div>
  </div>
</div>
