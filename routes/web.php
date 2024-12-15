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

Route::middleware(['auth',  'role:admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/data/books', [BookController::class, 'index'])->name('book.index');
    Route::prefix('data/book')->group(function () {
        Route::post('/create', [BookController::class, 'create'])->name('book.create');
        Route::get('/{id}', [BookController::class, 'detail'])->name('book.detail');
        Route::delete('/{id}', [BookController::class, 'delete'])->name('book.delete');
        Route::get('/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
        Route::put('/edit/{id}', [BookController::class, 'update'])->name('book.update');
    });
    Route::prefix('data/user')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('data-user');
        Route::post('/create', [UserController::class, 'store'])->name('user.create');
        Route::delete('/{id}', [UserController::class, 'delete'])->name('user.delete');
        Route::put('/edit/{id}', [UserController::class, 'switchRole'])->name('user.update');
    });


});
Route::get('admin', function(){
    return '<h1>halo admin</h1>';
})->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';