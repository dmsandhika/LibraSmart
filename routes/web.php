<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.home');
})->name('home');
Route::get('/search', function () {
    return view('user.search');
})->name('searchBook');

Route::get('/dashboard', [ProfileController::class, 'showDashboard'])
->middleware(['auth', 'verified', 'role:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('admin', function(){
    return '<h1>halo admin</h1>';
})->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';