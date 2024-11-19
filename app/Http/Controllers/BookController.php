<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $status = ['Tersedia', 'Tidak Tersedia', 'Coming Soon'];
        $books = Book::all();
        $category = Category::all();
        $no=1;
        return view('admin.data-book', compact('books', 'no', 'category', 'status'));
    }

    public function getBooksByCategory($category)
    {
        $books = Book::where('category_id', $category)
        ->with('category')  
        ->get();
        return response()->json($books);
    }

}