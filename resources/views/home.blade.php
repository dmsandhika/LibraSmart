<x-layout>

       <div>
        <div class="pt-24 h-full w-full bg-cover bg-center flex items-center justify-center flex-col lg:pb-96" style="background-image: url('{{ asset('img/bg-home.svg') }}');">
            <div class="max-w-4xl lg:mt-36 px-4 text-center">
                <h1 class="text-[#0d9488] text-6xl font-extrabold">Akses Buku, Artikel, dan Banyak Lagi Secara Gratis!</h1>
                
                <p class="text-[#494949] mt-6 pt-4 text-3xl font-bold">Pinjam kapan pun tanpa biaya.</p>
            </div>
        </div>
        <div class="h-auto bg-[#0d9488]  px-24 py-24">
            <x-small-title>Buku Sedang Tren</x-small-title>
            <div class="flex flex-wrap justify-evenly">
                <x-card></x-card>
                <x-card></x-card>
                <x-card></x-card>
                <x-card></x-card>
            </div>
            <x-small-title class="mt-24">FAQ</x-small-title>
            <x-accordion id="accordionItem1" title="Accordion Item #1">
                Placeholder content for this accordion, which is intended to demonstrate the accordion body.
            </x-accordion>
            <x-accordion id="accordion2" title="Accordion Item #2">
                Placeholder content for this accordion, which is intended to demonstrate the accordion body.
            </x-accordion>
              
        </div>
      
        
       </div>
    </x-layout>