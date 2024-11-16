<x-layout>
    <div class="min-h-screen">
        <x-title>Hubungi Kami</x-title>

        <form action="" class="w-3/4 mx-auto my-10">
            <div class="flex  w-full justify-center flex-col gap-5 items-center">
                <div class="w-3/4 relative">
                    <input
                        class="peer w-full p-4 pt-6 pl-10 pr-4 bg-inherit border-2 rounded-md outline-none transition disabled:opacity-70 disabled:cursor-not-allowed border-gray-500 focus:border-teal-700"
                        type="text" placeholder="" name="nama" id="nama" />
                    <label
                        class="absolute text-gray-500 text-base duration-150 transform -translate-y-3 top-5 z-10 origin-[0] left-10 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 peer-focus:text-teal-700"
                        for="username">
                        Nama
                    </label>
                </div>
                <div class="w-3/4 relative">
                    <input
                        class="peer w-full p-4 pt-6 pl-10 pr-4 bg-inherit border-2 rounded-md outline-none transition disabled:opacity-70 disabled:cursor-not-allowed border-gray-500 focus:border-teal-700"
                        type="email" placeholder="" name="email" id="email" />
                    <label
                        class="absolute text-gray-500 text-base duration-150 transform -translate-y-3 top-5 z-10 origin-[0] left-10 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 peer-focus:text-teal-700"
                        for="username">
                        Email
                    </label>
                </div>
                <div class="w-3/4 relative">
                    <input
                        class="form-inpu peer w-full p-4 pt-6 pl-10 pr-4 bg-inherit border-2 rounded-md outline-none transition disabled:opacity-70 disabled:cursor-not-allowed border-gray-500 focus:border-teal-700"
                        type="text" inputmode="numeric" pattern="[0-9]*" placeholder="" name="no"
                        id="no" />
                    <label
                        class="absolute text-gray-500 text-base duration-150 transform -translate-y-3 top-5 z-10 origin-[0] left-10 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 peer-focus:text-teal-700"
                        for="username">
                        No. Telepon (Opsional)
                    </label>
                </div>
                <div class="w-3/4 relative">
                    <textarea
                        class="form-inpu peer w-full p-4 pt-6 pl-10 pr-4 bg-inherit border-2 rounded-md outline-none transition disabled:opacity-70 disabled:cursor-not-allowed border-gray-500 focus:border-teal-700"
                        type="text" placeholder="" name="no" id="no"></textarea>
                    <label
                        class="absolute text-gray-500 text-base duration-150 transform -translate-y-3 top-5 z-10 origin-[0] left-10 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 peer-focus:text-teal-700"
                        for="username">
                        Pesan
                    </label>
                    <button type="submit"
                        class="w-full mt-5 rounded-md  bg-teal-700 border-2 px-5 py-2.5 hover:bg-teal-600 text-white"
                        type="button">Kirim</button>
                </div>

            </div>

        </form>
        <div class=" p-20">

            <x-small-title class="text-teal-700 ">Informasi Kontak</x-small-title>
            <div class="flex gap-5">
                <x-contact-card title="Alamat" isi="Jl. Pustaka No. 123, Jakarta, Indonesia" />
                <x-contact-card title="Nomor Telepon" isi="+62 21 1234 5678" />
            </div>
            <div class="flex gap-5">
                <x-contact-card title="Email" isi="info@perpustakaanapp.com" />
                <x-contact-card title="Deskripsi" isi="Untuk pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami melalui informasi kontak di atas. Kami siap melayani Anda dengan senang hati." />
            </div>
            <div class="flex gap-5">
                <x-contact-card title="Jam Operasional" isi="Senin - Jumat: 08.00 - 20.00<br>Sabtu - Minggu: 08.00 - 16.00" />
            </div>

            <x-small-title class="text-teal-700 mt-10">Peta Lokasi</x-small-title>
            <div class="  border-2">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5947715106495!2d106.87654667402462!3d-6.1849507605982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4ef886d773f%3A0xc08571b76e9247b!2sJl.%20Pustaka%20No.123%2C%20RT.5%2FRW.8%2C%20Kayu%20Putih%2C%20Kec.%20Pulo%20Gadung%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013210!5e0!3m2!1sid!2sid!4v1731772539711!5m2!1sid!2sid" class="w-full" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</x-layout>
