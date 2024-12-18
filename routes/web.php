<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

route::get("product", [ProductController::class, 'index'])->name('index.index');
route::get('/product/create', [ProductController::class, 'create'])->name('index.create');
route::post('/product/store', [ProductController::class, 'store'])->name('index.store');
