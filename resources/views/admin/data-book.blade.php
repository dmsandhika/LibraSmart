<x-app-layout>
  <div class="flex py-12">
      <x-sidebar-data></x-sidebar-data>

      <div class="w-full mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <x-small-title class="text-slate-700 mx-10 mt-10">Data Buku</x-small-title>
              <div class="flex justify-between">

                  <x-search-data></x-search-data>
                  <x-modal button="Tambah User" title="Tambah User Baru">
                      <form action="">
                          <x-input name="name" type="text" placeholder="Masukkan Nama">Nama</x-input>
                          <x-input name="email" type="email" placeholder="Masukkan Email">Email</x-input>
                          <x-input name="password" type="password" placeholder="Masukkan Password">Password</x-input>

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
