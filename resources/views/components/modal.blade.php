<div class="flex justify-end">
  <button type="button"
      class="inline-block rounded bg-teal-600 px-6 pb-2 pt-2.5 text-xs mr-10 font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
      data-twe-toggle="modal" data-twe-target="#modal" data-twe-ripple-init
      data-twe-ripple-color="light">
      {{ $button }}
  </button>
</div>



<div data-twe-modal-init
  class="fixed left-0 top-0  z-[1055]  max-h-screen hidden h-full w-full  items-center justify-center overflow-t-20 overflow-x-hidden outline-none" {{ $attributes }}
  id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div data-twe-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-0 opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:max-w-[1000px]">

      <div
          class="pointer-events-auto relative flex w-full flex-col pt-5 rounded-xl border-none bg-slate-300 bg-clip-padding text-current shadow-4 outline-none">
          <div
              class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4">
              <h5 class="text-xl font-medium leading-normal text-surface" id="exampleModalLabel">
                  {{ $title }}
              </h5>
              <button type="button"
                  class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300"
                  data-twe-modal-dismiss aria-label="Close">
                  <span class="[&>svg]:h-6 [&>svg]:w-6">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                          stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round"
                              d="M6 18L18 6M6 6l12 12" />
                      </svg>
                  </span>
              </button>
          </div>

          <!-- Modal body -->
          <div class="relative flex-auto p-4" data-twe-modal-body-ref>
              {{ $slot }}
          </div>

          <!-- Modal footer -->
          
      </div>
  </div>
</div>
