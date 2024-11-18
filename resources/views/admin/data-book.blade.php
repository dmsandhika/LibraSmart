<x-app-layout>
  <div class="flex py-12">
      <x-sidebar-data></x-sidebar-data>

      <div class="w-full mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <x-small-title class="text-slate-700 mx-10 mt-10">Data Buku</x-small-title>
              <div class="flex justify-between">

                  <x-search-data></x-search-data>
                  <x-modal button="Tambah Buku" title="Tambah Buku Baru" >
                    <form action="" class="grid grid-cols-1 gap-6 md:grid-cols-2">
                      <!-- Input Judul -->
                      <x-input name="title" type="text" placeholder="Masukkan Judul">Judul</x-input>
                    
                      <!-- Input Penulis -->
                      <x-input name="author" type="text" placeholder="Masukkan Nama Penulis">Penulis</x-input>
                    
                      <!-- Input ISBN -->
                      <x-input name="isbn" type="text" placeholder="Masukkan ISBN">ISBN</x-input>
                    
                      <!-- Pilihan Kategori -->
                      <div>
                        <label for="category_id" class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                        <select class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm px-4 py-2" name="category_id" id="category_id">
                          <option value="">Pilih Kategori</option>
                          @foreach ($category as $c)
                          <option value="{{ $c->id }}">{{ $c->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    
                      <!-- Input Stok -->
                      <x-input name="stock" type="number" placeholder="Masukkan Stok">Stok</x-input>
                    
                      <!-- Pilihan Status -->
                      <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status Buku</label>
                        <select class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm px-4 py-2" name="status" id="status">
                          @foreach ($status as $s)
                          <option value="{{ $s }}">{{ $s }}</option>
                          @endforeach
                        </select>
                      </div>
                    
                      <!-- Input Deskripsi -->
                      <div class="md:col-span-2">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                        <textarea class="form-inpu peer w-full p-4 bg-inherit border-2 rounded-md outline-none transition disabled:opacity-70 disabled:cursor-not-allowed border-gray-500 focus:border-teal-700" name="description" id="description"></textarea>
                      </div>
                    
                      <!-- Input Cover -->
                      <x-input name="cover" type="file" placeholder="Masukkan Cover">Gambar Cover</x-input>
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
                      <tbody class="text-left">

                          @foreach ($books as $b)
                              <tr>
                                <td class="border border-slate-500 p-3">{{ $no++ }}</td>
                                <td class="border border-slate-500 p-3">{{ $b->title}}</td>
                                <td class="border border-slate-500 p-3">{{ $b->isbn}}</td>
                                <td class="border border-slate-500 p-3">{{ $b->stock}}</td>
                                <td class="border border-slate-500 p-3">
                                  @if ($b->status == 'Tersedia')
                                    <span class="text-green-600">Tersedia</span>
                                  @elseif ($b->status == 'Tidak Tersedia')
                                  <span class="text-red-600">Tidak Tersedia</span>
                                  @elseif ($b->status == 'Coming Soon')
                                  <span class="text-yellow-600">Coming Soon</span>
                                  @endif
                                </td>
                                <td class="border border-slate-500 p-3">{{ $b->category->name}}</td>
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
                          <a
                            class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface border border-teal-500 transition duration-300 hover:bg-neutral-100 hover:text-surface focus:bg-teal-500 focus:text-white focus:outline-none focus:ring-0 active:bg-teal-500 active:text-white "
                            href="#"
                            >Previous</a
                          >
                        </li>
                        <li>
                          <a
                            class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface border border-teal-500 hover:text-surface transition duration-300 hover:bg-neutral-100 focus:bg-teal-500 focus:text-white focus:outline-none active:bg-neutral-100 active:text-primary-700 "
                            href="#"
                            >1</a
                          >
                        </li>
                        <li aria-current="page">
                          <a
                            class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface border border-teal-500 hover:text-surface transition duration-300 hover:bg-neutral-100 focus:bg-teal-500 focus:text-white focus:outline-none active:bg-neutral-100 active:text-primary-700 "
                            href="#"
                            >2</a
                          >
                        </li>
                        <li>
                          <a
                            class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface border border-teal-500 hover:text-surface transition duration-300 hover:bg-neutral-100 focus:bg-teal-500 focus:text-white focus:outline-none active:bg-neutral-100 active:text-primary-700 "
                            href="#"
                            >3</a
                          >
                        </li>
                        <li>
                          <a
                            class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface border border-teal-500 hover:text-surface transition duration-300 hover:bg-neutral-100 focus:bg-teal-500 focus:text-white focus:outline-none active:bg-neutral-100 active:text-primary-700 "
                            href="#"
                            >Next</a
                          >
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
  </script>
</x-app-layout>
