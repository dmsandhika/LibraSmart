<div class="mb-4">
  <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-2">
      {{ $slot }}
  </label>
  <div class="relative">
  <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
      class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm px-4 py-2"
      placeholder="{{ $placeholder }}">
      @if ($type == 'password')
      <span
      class="absolute inset-y-0 right-3 flex items-center mt-3 cursor-pointer icon-[mdi--eye]"
      onclick="togglePasswordVisibility()"
    ></span>
      @endif
  </div>
</div>
