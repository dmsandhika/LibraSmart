<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('user.home');
})->name('home');
Route::get('/search', function () {
    return view('user.search');
})->name('searchBook');
Route::get('/koleksi', function () {
    return view('user.collection');
})->name('collectionBook');
Route::get('/kontak', function () {
    return view('user.contact');
})->name('contact');

Route::get('/dashboard', [ProfileController::class, 'showDashboard'])
->middleware(['auth', 'verified', 'role:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/data/user', [UserController::class, 'index'])->name('data-user');
    Route::get('/data/books', [BookController::class, 'index'])->name('book.index');

    Route::prefix('book')->group(function () {
        Route::post('/create', [BookController::class, 'create'])->name('book.create');
    });


});
Route::get('admin', function(){
    return '<h1>halo admin</h1>';
})->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';