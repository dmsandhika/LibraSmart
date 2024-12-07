<x-app-layout>
    <div class="flex py-12">
        <x-sidebar-data></x-sidebar-data>

        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
                <x-small-title class="text-slate-700 ">Detail Buku</x-small-title>
                <img src="{{ asset('storage/' . $book->cover) }}" alt="{{ $book->title }}" class="rounded-lg w-1/4">
                <h1 class="text-3xl font-bold my-4">{{ $book->title }}</h1>
                <h3 class="mb-8">Penulis : {{ $book->author }}</h3>
                <hr>
                <div class="my-8 space-y-3">
                  <p>ISBN : {{ $book->isbn }}</p>
                  <p>Kategori : {{ $book->category->name }}</p>
                  <p>Stok : {{ $book->stock }}</p>
                  <p>Status : {{ $book->status }}</p>
                  <p>Ditambahkan Pada {{   date('d M Y', strtotime($book->created_at));}}</p>
                  <p>Terakhir Diupdate : {{ date('d M Y', strtotime($book->updated_at)) }}</p>
                  <p>Deskripsi : <br><span><i>"{{ $book->description }}"</i></span></p>
                </div>
                <a href="/data/books" class="p-4 bg-teal-600 text-white rounded-xl hover:bg-teal-500">Kembali</a>
            </div>
        </div>

    </div>
</x-app-layout>
