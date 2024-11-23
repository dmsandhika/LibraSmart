<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::with('category');

        if ($request->filled('search')) {
            $query->where('title', 'LIKE', '%' . $request->search . '%')
                ->orWhere('isbn', 'LIKE', '%' . $request->search . '%');
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }
        $status = ['Tersedia', 'Tidak Tersedia', 'Coming Soon'];
        $books = $query->paginate(10);
        $categories = Category::all();
        $no=1;
        return view('admin.data-book', compact('books', 'no', 'categories', 'status'));
    }

    

}