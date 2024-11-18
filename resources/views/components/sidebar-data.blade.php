<div
    class="ml-10 flex w-[100px] flex-col justify-center items-center relative transition-all duration-[450ms] ease-in-out">
    <article
        class="w-full ease-in-out duration-500 left-0 rounded-2xl inline-block shadow-lg shadow-black/15 bg-white">
        <x-side-link  href="/data/user" :active="request()->is('data/user')">
            <svg class="peer-hover:scale-125 peer-hover:text-blue-400 peer-hover:fill-blue-400 peer-checked:text-blue-400 peer-checked:fill-blue-400 text-2xl peer-checked:scale-125 ease-in-out duration-300"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
                </path>
            </svg>
        </x-side-link>
        <x-side-link href="/data/books" :active="request()->is('data/books')">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                <g fill="black">
                    <path
                        d="M36.99 29.003c-3.67-.038-5.717.332-9.612 1.923l-.756-1.852c4.127-1.685 6.438-2.112 10.388-2.071zm-9.612-2.077c3.895-1.59 5.943-1.961 9.612-1.923l.02-2c-3.95-.041-6.26.386-10.388 2.071zm9.612-5.923c-3.67-.038-5.717.332-9.612 1.923l-.756-1.852c4.127-1.685 6.438-2.112 10.388-2.071zM34.5 16v-3h2v3zM31 14v3h2v-3zm-3.5 4v-3h2v3zM11.01 29.003c3.67-.038 5.717.332 9.612 1.923l.756-1.852c-4.127-1.685-6.438-2.112-10.388-2.071zm9.612-2.077c-3.895-1.59-5.942-1.961-9.612-1.923l-.02-2c3.95-.041 6.26.386 10.388 2.071zm-9.612-5.923c3.67-.038 5.717.332 9.612 1.923l.756-1.852c-4.127-1.685-6.438-2.112-10.388-2.071zM13.5 16v-3h-2v3zm3.5-2v3h-2v-3zm3.5 4v-3h-2v3z" />
                    <path fill-rule="evenodd"
                        d="M42 10.984q.609.134 1.243.287a.99.99 0 0 1 .757.965v25.539c0 .633-.583 1.105-1.204.987c-6.213-1.185-10.4-1.268-16.122-.4a3 3 0 0 1-5.348 0c-5.721-.868-9.91-.785-16.122.4A1.01 1.01 0 0 1 4 37.775V12.237a.99.99 0 0 1 .757-.966q.634-.153 1.243-.287v-.46c0-.885.589-1.694 1.484-1.92c6.15-1.546 10.628.092 15.757 2.477q.375.077.759.16q.384-.083.76-.16c5.128-2.385 9.606-4.023 15.756-2.476A1.97 1.97 0 0 1 42 10.524zm-2 22.984V10.537c-5.658-1.415-9.683.135-15 2.64v23.242l.003.002l.002.001l.009.003h.003l.006-.002c4.909-2.222 9.191-3.483 14.923-2.437a.06.06 0 0 0 .047-.011zm-17.003 2.453l.003-.002V13.177c-5.317-2.504-9.342-4.055-15-2.64v23.431l.007.007a.06.06 0 0 0 .048.012c5.73-1.047 10.013.214 14.922 2.435l.008.003h.001z"
                        clip-rule="evenodd" />
                </g>
            </svg>
        </x-side-link>


    </article>
</div>