<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [AuthController::class, 'showLogin'])->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.process');

Route::get('admin/dashboard', function(){
    return view('admin/dashboard');
})->name('admin.dashboard')->middleware('role:admin');

Route::resource('products', ProductsController::class);

Route::get('kasir/dashboard', function(){
    return view('kasir/dashboard');
})->name('kasir.dashboard')->middleware('role:kasir');

Route::post('logout', function(){
    Auth::logout();
    return redirect('/');
});