<x-app-layout>
    <div class="flex py-12">
        <x-sidebar-data></x-sidebar-data>

        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <x-small-title class="text-slate-700 mx-10 mt-10">Data User</x-small-title>
                <div class="p-6 text-gray-900">
                    <table class="table-auto w-full rounded-lg border-separate border-spacing-0">
                        <thead class="text-center">
                            <tr>
                                <th class="border border-slate-500 p-3 rounded-tl-lg">Id</th>
                                <th class="border border-slate-500 p-3">Nama</th>
                                <th class="border border-slate-500 p-3">Email</th>
                                <th class="border border-slate-500 p-3">Google</th>
                                <th class="border border-slate-500 py-3 rounded-tr-lg">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-left">

                            @foreach ($data as $d)
                                <tr>
                                    <td class="border border-slate-400 p-3 text-center">{{ $no++ }}</td>
                                    <td class="border border-slate-400 p-3">{{ $d->name }}</td>
                                    <td class="border border-slate-400 p-3">{{ $d->email }}</td>
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
                                    </td>
                                    <td class="border border-slate-400  text-center">
                                      <span class="icon-[basil--edit-outline] m-2 hover:text-[#07c482]" style="width: 24px; height: 24px; "></span>  
                                      <span class="icon-[majesticons--eye-line] m-2 hover:text-[#1100ff]" style="width: 24px; height: 24px; "></span>
                                      <span class="icon-[tabler--trash] m-2 hover:text-[#ff0000]" style="width: 24px; height: 24px;"></span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
