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
    Route::get('/check-pledge', [MemberController::class, 'checkPledgeNumber'])->name('check_pledge');
});

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'loginPage'])->name('login');
    Route::post('/login', [AdminController::class, 'authenticate'])->name('authenticate');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::put('/member/{id}', [AdminController::class, 'update'])->name('update');
    Route::delete('/member/{id}', [AdminController::class, 'destroy'])->name('destroy');
    Route::post('/member/{id}/archive', [AdminController::class, 'archive'])->name('archive');
    Route::post('/member/{id}/restore', [AdminController::class, 'restore'])->name('restore');
});