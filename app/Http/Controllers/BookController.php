<?php

namespace App\Http\Controllers;


use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::with('category');

        if ($request->filled('search') && $request->filled('category_id')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'LIKE', '%' . $request->search . '%')
                  ->orWhere('isbn', 'LIKE', '%' . $request->search . '%');
            })->where('category_id', $request->category_id);
        }
        elseif ($request->filled('search')) {
            $query->where('title', 'LIKE', '%' . $request->search . '%')
                  ->orWhere('isbn', 'LIKE', '%' . $request->search . '%');
        }
        elseif ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }
        $status = ['Tersedia', 'Tidak Tersedia', 'Coming Soon'];
        $books = $query->paginate(10);
        $categories = Category::all();
        $no=1;
        return view('admin.data-book', compact('books', 'no', 'categories', 'status'));
    }

    public function create(Request $request){
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required',
            'category_id' => 'required',
            'stock' => 'required',
            'status' => 'required',
            'description' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $coverPath = $request->file('cover')->store('cover', 'public');

        $book = new Book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->isbn = $request->input('isbn');
        $book->category_id = $request->input('category_id');
        $book->stock = $request->input('stock');
        $book->status = $request->input('status');
        $book->description = $request->input('description');
        $book->cover = $coverPath; // Simpan path cover
        $book->save();

        return redirect()->route('book.index')->with('success', 'Data Buku Berhasil Ditambahkan');
    }

    public function delete($id)
    {
        $book = Book::findOrFail($id);

        // Hapus file cover
        if ($book->cover) {
            Storage::disk('public')->delete($book->cover);
        }

        // Hapus data dari database
        $book->delete();

        return response()->json(['success' => 'Data Buku Berhasil Dihapus']);
    }

    public function detail($id){
        $book = Book::find($id);
        return view('admin.detail-book', compact('book'));
    }

    public function edit($id){
        $book = Book::find($id);
        $categories = Category::all();
        $status = ['Tersedia', 'Tidak Tersedia', 'Coming Soon'];
        return view('admin.edit-book', compact('book', 'categories', 'status'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required',
            'category_id' => 'required',
            'stock' => 'required',
            'status' => 'required',
            'description' => 'required',
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->isbn = $request->input('isbn');
        $book->category_id = $request->input('category_id');
        $book->stock = $request->input('stock');
        $book->status = $request->input('status');
        $book->description = $request->input('description');
        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('cover', 'public');
            Storage::disk('public')->delete($book->cover);
            $book->cover = $coverPath;
        }
        $book->save();

        return redirect()->route('book.index')->with('success', 'Data Buku Berhasil Diubah');
    }


}