<x-app-layout>
    <div class="flex py-12">
        <x-sidebar-data></x-sidebar-data>

        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <x-small-title class="text-slate-700 mx-10 mt-10">Data User</x-small-title>
                <div class="flex justify-between">

                    <x-search-data></x-search-data>
                    <x-modal button="Tambah User" title="Tambah User Baru">
                        <form action="{{ route('user.create') }}" method="POST">
                          @csrf
                            <x-input name="name" type="text" placeholder="Masukkan Nama">Nama</x-input>
                            <x-input name="email" type="email" placeholder="Masukkan Email">Email</x-input>
                            <div class="mb-4">
                              <label for="role" class="block text-sm font-medium text-gray-700 mb-2">Role</label>
                              <select name="role" id="role" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm px-4 py-2">
                                <option value="" disabled selected>Choose Role</option>
                                <option value="admin" >Admin</option>
                                <option value="member" >Member</option>
                              </select>
                            </div>
                            <x-input name="password" type="password" placeholder="Masukkan Password">Password</x-input>
                            <div
                            class="flex flex-shrink-0 flex-wrap h-1/2 items-center justify-end rounded-b-md  p-4">
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
                    <table class="table-auto w-full rounded-lg border-separate border-spacing-0">
                        <thead class="text-center">
                            <tr>
                                <th class="border border-slate-500 p-3 rounded-tl-lg">No</th>
                                <th class="border border-slate-500 p-3">Nama</th>
                                <th class="border border-slate-500 p-3">Email</th>
                                <th class="border border-slate-500 p-3">Role</th>
                                <th class="border border-slate-500 p-3">Google</th>
                                <th class="border border-slate-500 p-3">Dibuat Pada</th>
                                <th class="border border-slate-500 py-3 rounded-tr-lg">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-left">

                            @foreach ($data as $d)
                                <tr>
                                    <td class="border border-slate-400 p-3 text-center">{{ $no++ }}</td>
                                    <td class="border border-slate-400 p-3">{{ $d->name }}</td>
                                    <td class="border border-slate-400 p-3">{{ $d->email }}</td>
                                    <td class="border border-slate-400 p-3">{{ $d->getRoleNames()[0] }}</td>
                                    <td class="border border-slate-400 p-3 text-center">
                                        @if ($d->google_id == null)
                                        <span
                                        class="inline-block whitespace-nowrap rounded-[0.27rem] bg-danger-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-danger-700 ">
                                        NO
                                    </span>
                                    @else
                                    <span
                                    class="inline-block whitespace-nowrap rounded-[0.27rem] bg-primary-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-primary-700 ">
                                    YES
                                </span>
                                @endif
                                <td class="border border-slate-400 p-3">{{  $d->created_at->format('d-m-Y') }}</td>
                                    </td>
                                    <td class="border border-slate-400  text-center">
                                      <div class="relative group cursor-pointer">
                                        <span class="icon-[lsicon--switch-filled] hover:text-blue-500" style="width: 24px; height: 24px; "></span>
                                        <div class="absolute left-0 top-6 px-2 z-10 py-1 bg-black text-white text-xs rounded opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                            Switch Role to 
                                        @if($d->hasRole('admin'))
                                            Member
                                        @else
                                            Admin
                                        @endif
                                        
                                        </div>
                                    </div>                                    
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
