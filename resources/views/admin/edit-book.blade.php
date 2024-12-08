<x-app-layout>
    <div class="flex py-12">
        <x-sidebar-data></x-sidebar-data>

        <div class="w-full mx-auto sm:px-6 lg:px-8 min-h-screen">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 min-h-screen">
                <x-small-title class="text-slate-700 ">Edit Data Buku : {{ $book->title }}</x-small-title>
                <form action="" class="w-full px-4 space-y-5" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-col space-y-2">
                        <label for="title">Judul</label>
                        <input class="rounded-xl w-full text-gray-700 border border-gray-400" name="title"
                            type="text" id="title" value="{{ $book->title }}" required>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="author">Penulis</label>
                        <input class="rounded-xl w-full text-gray-700 border border-gray-400" name="author"
                            type="text" id="author" value="{{ $book->author }}" required>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="isbn">ISBN</label>
                        <input class="rounded-xl w-full text-gray-700 border border-gray-400" name="isbn"
                            type="text" id="isbn" value="{{ $book->isbn }}" required>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="category_id">Kategori</label>
                        <select class="rounded-xl w-full text-gray-700 border border-gray-400" name="category_id"
                            id="category_id" required>
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $book->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex flex-col space-y-2">
                        <label for="stock">Stok</label>
                        <input class="rounded-xl w-full text-gray-700 border border-gray-400" name="stock"
                            type="text" id="stock" value="{{ $book->stock }}" required>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="status">Status</label>
                        <select class="rounded-xl w-full text-gray-700 border border-gray-400" name="status"
                            id="status" required>
                            @foreach ($status as $s)
                                <option value="{{ $s }}"
                                    {{ $book->status == $s ? 'selected' : '' }}>
                                    {{ $s }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="description">Deskripsi</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="rounded-xl w-full text-gray-700 border border-gray-400">{{ $book->description }}
                        </textarea>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="cover">Gambar Sampul</label>
                        @if ($book->cover)
                            <img src="{{ asset('storage/' . $book->cover) }}" 
                                 alt="Gambar Sampul" 
                                 class="w-32 h-32 object-cover rounded-md mb-2">
                        @endif

                        <input class="rounded-xl w-full text-gray-700 border border-gray-400" 
                               name="cover" 
                               type="file" 
                               id="cover" 
                               accept="image/*">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
