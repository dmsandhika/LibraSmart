<x-app-layout>
  <div class="flex py-12">
      <x-sidebar-data></x-sidebar-data>

      <div class="w-full mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
              <x-small-title class="text-slate-700 ">Edit Data Buku : {{ $book->title }}</x-small-title>
            <form action="" class="w-full px-4 space-y-5" method="post" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                <div class="flex flex-col space-y-2">    
                    <label for="title">Judul</label>
                    <input class="rounded-xl w-full text-gray-700 border border-gray-400" name="title" type="text" id="title" value="{{ $book->title }}">
                </div>
                <div class="flex flex-col space-y-2">    
                    <label for="author">Penulis</label>
                    <input class="rounded-xl w-full text-gray-700 border border-gray-400" name="author" type="text" id="author" value="{{ $book->author }}">
                </div>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
