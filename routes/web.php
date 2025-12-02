<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[MemberController::class,'index'] )->name('member.register');
Route::get('/', [MemberController::class,'index'])->name('admin.login');


