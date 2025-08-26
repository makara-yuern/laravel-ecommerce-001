<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Admin dashboard route
Route::middleware('auth')->get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// User dashboard route (if needed)
Route::middleware('auth')->get('/users/dashboard', function () {
    return view('users.dashboard');
})->name('users.dashboard');

// Products
Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::get('/{id}', [ProductController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('destroy');
});

// Categories
Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/', [CategoryController::class, 'store'])->name('store');
    Route::get('/{id}', [CategoryController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
});

// Collections
Route::prefix('collections')->name('collections.')->group(function () {
    Route::get('/', [CollectionController::class, 'index'])->name('index');
    Route::get('/create', [CollectionController::class, 'create'])->name('create');
    Route::post('/', [CollectionController::class, 'store'])->name('store');
    Route::get('/{id}', [CollectionController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [CollectionController::class, 'edit'])->name('edit');
    Route::put('/{id}', [CollectionController::class, 'update'])->name('update');
    Route::delete('/{id}', [CollectionController::class, 'destroy'])->name('destroy');
});

// Profile routes (preserved)
Route::middleware('auth')->group(function () {
    Route::middleware('auth')->get('/admin/profile', [ProfileController::class, 'showProfile'])->name('admin.profile');
    Route::post('/admin/profile/update', [ProfileController::class, 'updateProfile'])->name('admin.profile.update');
});

Route::get('/test', [CollectionController::class, 'test'])->name('test');