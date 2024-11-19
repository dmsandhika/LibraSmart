<x-app-layout>
    <div class="flex py-12">
        <x-sidebar-data></x-sidebar-data>

        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <x-small-title class="text-slate-700 mx-10 mt-10">Data Buku</x-small-title>
                <div class="flex justify-between">

                    <x-search-data></x-search-data>
                    <div
                        class="border border-teal-200 ml-10 pt-1 relative group rounded-lg w-64  bg-gray-50 overflow-hidden before:absolute before:w-12 before:h-12 before:content[''] before:right-0 before:bg-teal-500 before:rounded-full before:blur-lg ">

                        <select id="category-select"
                            class="appearance-none  hover:placeholder-shown:bg-emerald-500 relative border-none text-teal-600 bg-transparent placeholder-violet-700 text-sm font-bold rounded-lg block w-full p-2.5 focus:outline-none focus:ring-0">
                            <option>Pilih Kategori</option>
                            @foreach ($category as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <x-modal button="Tambah Buku" title="Tambah Buku Baru">
                        <form action="" class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <x-input name="title" type="text" placeholder="Masukkan Judul">Judul</x-input>

                            <x-input name="author" type="text" placeholder="Masukkan Nama Penulis">Penulis</x-input>

                            <x-input name="isbn" type="text" placeholder="Masukkan ISBN">ISBN</x-input>

                            <div>
                                <label for="category_id"
                                    class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                                <select
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm px-4 py-2"
                                    name="category_id" id="category_id">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($category as $c)
                                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <x-input name="stock" type="number" placeholder="Masukkan Stok">Stok</x-input>

                            <div>
                                <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status
                                    Buku</label>
                                <select
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm px-4 py-2"
                                    name="status" id="status">
                                    @foreach ($status as $s)
                                        <option value="{{ $s }}">{{ $s }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="md:col-span-2">
                                <label for="description"
                                    class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                                <textarea
                                    class="form-inpu peer w-full p-4 bg-inherit border-2 rounded-md outline-none transition disabled:opacity-70 disabled:cursor-not-allowed border-gray-500 focus:border-teal-700"
                                    name="description" id="description"></textarea>
                            </div>


                            <div class="flex items-center justify-center w-full">
                                <label for="dropzone-file"
                                    class="block text-sm font-medium text-gray-700 mb-2 mr-10">Cover</label>
                                <label for="dropzone-file"
                                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 ">
                                    <div id="dropzone-text" class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-8 h-8 mb-4 text-gray-500 " aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 ">
                                            <span class="font-semibold">Click to upload</span> or drag and drop
                                        </p>
                                        <p class="text-xs text-gray-500 ">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                    </div>
                                    <input id="dropzone-file" name="cover" type="file" class="hidden"
                                        onchange="updateDropzoneText()" />
                                </label>
                            </div>



                        </form>

                    </x-modal>
                </div>

                <div class="p-6 text-gray-900">
                    <table class="table-auto w-full rounded-lg border-separate border-spacing-0">
                        <thead class="text-center">
                            <tr>
                                <th class="border border-slate-500 p-3 rounded-tl-lg">Id</th>
                                <th class="border border-slate-500 p-3">Judul</th>
                                <th class="border border-slate-500 p-3">ISBN</th>
                                <th class="border border-slate-500 p-3">Stok</th>
                                <th class="border border-slate-500 p-3">Status</th>
                                <th class="border border-slate-500 p-3">Kategori</th>
                                <th class="border border-slate-500 py-3 rounded-tr-lg">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-left" id="book-table-body">

                            @foreach ($books as $b)
                                <tr>
                                    <td class="border border-slate-500 p-3">{{ $no++ }}</td>
                                    <td class="border border-slate-500 p-3">{{ $b->title }}</td>
                                    <td class="border border-slate-500 p-3">{{ $b->isbn }}</td>
                                    <td class="border border-slate-500 p-3">{{ $b->stock }}</td>
                                    <td class="border border-slate-500 p-3">
                                        @if ($b->status == 'Tersedia')
                                            <span class="text-green-600">Tersedia</span>
                                        @elseif ($b->status == 'Tidak Tersedia')
                                            <span class="text-red-600">Tidak Tersedia</span>
                                        @elseif ($b->status == 'Coming Soon')
                                            <span class="text-yellow-600">Coming Soon</span>
                                        @endif
                                    </td>
                                    <td class="border border-slate-500 p-3">{{ $b->category->name }}</td>
                                    <td class="border border-slate-400  text-center">
                                        <span class="icon-[basil--edit-outline] m-2 hover:text-[#07c482]"
                                            style="width: 24px; height: 24px; "></span>
                                        <span class="icon-[majesticons--eye-line] m-2 hover:text-[#1100ff]"
                                            style="width: 24px; height: 24px; "></span>
                                        <span class="icon-[tabler--trash] m-2 hover:text-[#ff0000]"
                                            style="width: 24px; height: 24px;"></span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example" class="flex justify-center mt-7">
                        <ul class="list-style-none flex gap-2">
                            <li>
                                <a class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface border border-teal-500 transition duration-300 hover:bg-neutral-100 hover:text-surface focus:bg-teal-500 focus:text-white focus:outline-none focus:ring-0 active:bg-teal-500 active:text-white "
                                    href="#">Previous</a>
                            </li>
                            <li>
                                <a class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface border border-teal-500 hover:text-surface transition duration-300 hover:bg-neutral-100 focus:bg-teal-500 focus:text-white focus:outline-none active:bg-neutral-100 active:text-primary-700 "
                                    href="#">1</a>
                            </li>
                            <li aria-current="page">
                                <a class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface border border-teal-500 hover:text-surface transition duration-300 hover:bg-neutral-100 focus:bg-teal-500 focus:text-white focus:outline-none active:bg-neutral-100 active:text-primary-700 "
                                    href="#">2</a>
                            </li>
                            <li>
                                <a class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface border border-teal-500 hover:text-surface transition duration-300 hover:bg-neutral-100 focus:bg-teal-500 focus:text-white focus:outline-none active:bg-neutral-100 active:text-primary-700 "
                                    href="#">3</a>
                            </li>
                            <li>
                                <a class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface border border-teal-500 hover:text-surface transition duration-300 hover:bg-neutral-100 focus:bg-teal-500 focus:text-white focus:outline-none active:bg-neutral-100 active:text-primary-700 "
                                    href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <script>
        const togglePasswordVisibility = () => {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        }

        document.getElementById('category-select').addEventListener('change', function() {
            const categoryId = this.value;
            const tableBody = document.getElementById('book-table-body');

            if (categoryId) {
                fetch(`/books/${categoryId}`)
                    .then(response => response.json())
                    .then(books => {
                        tableBody.innerHTML = '';

                        if (books.length > 0) {
                            books.forEach((book, index) => {
                                const row = document.createElement('tr');

                                row.innerHTML = `
                                <td class="border border-slate-500 p-3">${index + 1}</td>
                                <td class="border border-slate-500 p-3">${book.title}</td>
                                <td class="border border-slate-500 p-3">${book.isbn}</td>
                                <td class="border border-slate-500 p-3">${book.stock}</td>
                                <td class="border border-slate-500 p-3">
                                    ${book.status === 'Tersedia' ? '<span class="text-green-600">Tersedia</span>' : book.status === 'Tidak Tersedia' ? '<span class="text-red-600">Tidak Tersedia</span>' : '<span class="text-yellow-600">Coming Soon</span>'}
                                </td>
                                <td class="border border-slate-500 p-3">
                                   ${book.category.name}
                                  </td>
                                <td class="border border-slate-400 text-center">
                                    <span class="icon-[basil--edit-outline] m-2 hover:text-[#07c482]" style="width: 24px; height: 24px;"></span>
                                    <span class="icon-[majesticons--eye-line] m-2 hover:text-[#1100ff]" style="width: 24px; height: 24px;"></span>
                                    <span class="icon-[tabler--trash] m-2 hover:text-[#ff0000]" style="width: 24px; height: 24px;"></span>
                                </td>
                            `;

                                tableBody.appendChild(row);
                            });
                        } else {
                            tableBody.innerHTML = `
                            <tr>
                                <td colspan="7" class="text-center p-3 text-red-500">Tidak ada buku untuk kategori ini.</td>
                            </tr>
                        `;
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching books:', error);
                        tableBody.innerHTML = `
                        <tr>
                            <td colspan="7" class="text-center p-3 text-red-500">Gagal memuat data buku.</td>
                        </tr>
                    `;
                    });
            } else {
                tableBody.innerHTML = `
                <tr>
                    <td colspan="7" class="text-center p-3 text-gray-500">Silakan pilih kategori.</td>
                </tr>
            `;
            }
        });

        function updateDropzoneText() {
            const fileInput = document.getElementById('dropzone-file');
            const dropzoneText = document.getElementById('dropzone-text');

            if (fileInput.files.length > 0) {
                const fileName = fileInput.files[0].name;
                dropzoneText.innerHTML = `
                <svg class="w-8 h-8 mb-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                </svg>
                <p class="mb-2 text-sm text-gray-500 ">
                    File uploaded: <span class="font-semibold">${fileName}</span>
                </p>
                <p class="text-xs text-gray-500 ">Thank you for uploading your file!</p>
            `;
            }
        }
    </script>
</x-app-layout>
