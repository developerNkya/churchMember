<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/',[MemberController::class,'index'] )->name('member.register');
// Route::get('/', [MemberController::class,'index'])->name('admin.login');

//Route::get('/', [MemberController::class, 'create'])->name('register');
// Member registration routes
Route::prefix('member')->name('member.')->group(function () {
    Route::get('/register', [MemberController::class, 'create'])->name('register');
    Route::post('/register', [MemberController::class, 'store'])->name('store');
    Route::get('/success', [MemberController::class, 'success'])->name('success');
});

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'authenticate'])->name('authenticate');
});