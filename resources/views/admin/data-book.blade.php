<x-app-layout>
    <div class="flex py-12">
        <x-sidebar-data></x-sidebar-data>

        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <x-small-title class="text-slate-700 mx-10 mt-10">Data Buku</x-small-title>
                <div class="flex justify-between">

                    <form method="GET" action="{{ route('book.index') }}"
                        class="flex justify-stretch w-3/4 border border-gray-200 rounded-xl p-4 ml-5">
                        <x-search-data></x-search-data>
                        <div
                            class="border border-teal-200 ml-10 pt-1 relative group rounded-lg w-64  bg-gray-50 overflow-hidden before:absolute before:w-12 before:h-12 before:content[''] before:right-0 before:bg-teal-500 before:rounded-full before:blur-lg ">

                            <select id="category-select" name="category_id" onchange="this.form.submit()"
                                class="appearance-none  hover:placeholder-shown:bg-emerald-500 relative border-none text-teal-600 bg-transparent placeholder-violet-700 text-sm font-bold rounded-lg block w-full p-2.5 focus:outline-none focus:ring-0">
                                <option value="">Semua Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>



                        </div>
                        <button
                            class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="submit">
                            <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true" class="w-4 h-4 me-2">
                                <path d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" stroke-width="2"
                                    stroke-linejoin="round" stroke-linecap="round" stroke="currentColor"></path>
                            </svg>Cari
                        </button>
                    </form>
                    <x-modal button="Tambah Buku" title="Tambah Buku Baru">
                        <form action="{{ route('book.create') }}" method="post" enctype="multipart/form-data"
                            class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            @csrf
                            <x-input name="title" type="text" placeholder="Masukkan Judul" required>Judul</x-input>

                            <x-input name="author" type="text" placeholder="Masukkan Nama Penulis"
                                required>Penulis</x-input>

                            <x-input name="isbn" type="text" placeholder="Masukkan ISBN" required>ISBN</x-input>

                            <div>
                                <label for="category_id"
                                    class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                                <select
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm px-4 py-2"
                                    name="category_id" id="category_id">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($categories as $c)
                                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <x-input name="stock" type="number" placeholder="Masukkan Stok" required>Stok</x-input>

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
                                    name="description" id="description" required></textarea>
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
                                        onchange="updateDropzoneText()" required />
                                </label>
                            </div>

                            <div class="flex flex-shrink-0 flex-wrap h-1/2 items-center justify-end rounded-b-md  p-4">
                                <button type="button"
                                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-200 focus:bg-primary-accent-200 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                    data-twe-modal-dismiss data-twe-ripple-init data-twe-ripple-color="light">
                                    Tutup
                                </button>
                                <button type="submit"
                                    class="ms-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2"
                                    data-twe-ripple-init data-twe-ripple-color="light">
                                    Simpan
                                </button>
                            </div>

                        </form>


                    </x-modal>
                </div>

                <div class="p-6 text-gray-900">
                    @if ($books->count() > 0)
                        <table class="table-auto w-full rounded-lg border-separate border-spacing-0">
                            <thead class="text-center">
                                <tr>
                                    <th class="border border-slate-500 p-3 rounded-tl-lg">Id</th>
                                    <th class="border border-slate-500 p-3 w-1/4">Judul</th>
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
                                        <td class="border border-slate-400 text-center py-auto">
                                            <div class="flex justify-center items-center h-full gap-2">
                                                <a href="{{ route('book.edit', $b->id) }}"
                                                    class="bg-gray-300 rounded-xl p-1 flex items-center h-full hover:bg-green-300 ">
                                                    <span class="icon-[basil--edit-outline] hover:text-[#0b724e]"
                                                        style="width: 24px; height: 24px;"></span>
                                                </a>
                                                <a href="{{ route('book.detail', $b->id) }}"
                                                    class="bg-gray-300 rounded-xl p-1 flex items-center h-full hover:bg-blue-300 ">
                                                    <span class="icon-[majesticons--eye-line] hover:text-[#1100ff]"
                                                        style="width: 24px; height: 24px;"></span>
                                                </a>
                                                <button
                                                    class="bg-gray-300 rounded-xl p-1 flex items-center h-full hover:bg-red-300  btn-delete"
                                                    data-url="{{ route('book.delete', $b->id) }}">
                                                    <span class="icon-[tabler--trash] hover:text-[#ff0000]"
                                                        style="width: 24px; height: 24px;"></span>
                                                </button>
                                            </div>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-center m-10 pb-10">Data Tidak Ada</p>
                    @endif
                    <nav aria-label="Page navigation example" class="flex justify-center mt-7">
                        <ul class="list-style-none flex gap-2">
                            @if ($books->onFirstPage())
                                <li>
                                    <span
                                        class="relative block rounded bg-gray-300 px-3 py-1.5 text-sm text-gray-500 border border-gray-300 cursor-not-allowed">
                                        << </span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $books->previousPageUrl() }}"
                                        class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface border border-teal-500 transition duration-300 hover:bg-neutral-100 hover:text-surface focus:bg-teal-500 focus:text-white focus:outline-none focus:ring-0 active:bg-teal-500 active:text-white">
                                        << </a>
                                </li>
                            @endif
                            @foreach ($books->getUrlRange(1, $books->lastPage()) as $page => $url)
                                @if ($page == $books->currentPage())
                                    <li aria-current="page">
                                        <span
                                            class="relative block rounded bg-teal-500 px-3 py-1.5 text-sm text-white border border-teal-500">
                                            {{ $page }}
                                        </span>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $url }}"
                                            class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface border border-teal-500 hover:text-surface transition duration-300 hover:bg-neutral-100 focus:bg-teal-500 focus:text-white focus:outline-none active:bg-neutral-100 active:text-primary-700">
                                            {{ $page }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach

                            @if ($books->hasMorePages())
                                <li>
                                    <a href="{{ $books->nextPageUrl() }}"
                                        class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface border border-teal-500 transition duration-300 hover:bg-neutral-100 hover:text-surface focus:bg-teal-500 focus:text-white focus:outline-none focus:ring-0 active:bg-teal-500 active:text-white">
                                        >>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <span
                                        class="relative block rounded bg-gray-300 px-3 py-1.5 text-sm text-gray-500 border border-gray-300 cursor-not-allowed">
                                        >>
                                    </span>
                                </li>
                            @endif
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

        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.btn-delete');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const url = this.getAttribute('data-url');

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Data yang dihapus tidak dapat dikembalikan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            fetch(url, {
                                    method: 'DELETE',
                                    headers: {
                                        'X-CSRF-TOKEN': document.querySelector(
                                            'meta[name="csrf-token"]').getAttribute(
                                            'content')
                                    }
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        Swal.fire(
                                            'Terhapus!',
                                            data.success,
                                            'success'
                                        );
                                        setTimeout(() => location.reload(), 2000);
                                    }
                                })
                                .catch(error => {
                                    Swal.fire(
                                        'Error!',
                                        'Terjadi kesalahan saat menghapus data.',
                                        'error'
                                    );
                                });
                        }
                    });
                });
            });
        });
    </script>
</x-app-layout>
