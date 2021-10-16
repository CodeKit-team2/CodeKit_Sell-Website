<?php

use App\Http\Controllers\Admin\View\AdminManagerController;
use App\Http\Controllers\Admin\View\AdminProfileController;
use App\Http\Controllers\Admin\View\CustomerManagerController;
use App\Http\Middleware\Admin\SignedInRedirect;
use Illuminate\Support\Facades\Route;


Route::get('/login', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'create'])
    ->name('login.create');

Route::post('/login', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'store'])
    ->name('login.store');

Route::post('/logout', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'destroy'])
    ->name('logout');

Route::get('/register', [\App\Http\Controllers\Admin\Auth\RegisterController::class, 'create'])
    ->name('register');

Route::post('/register', [\App\Http\Controllers\Admin\Auth\RegisterController::class, 'store'])
    ->name('register.store');

Route::middleware('admin.auth:admin')->group(function (){
    Route::view('/', 'admin.customer-manager');
// User & Profile...
    Route::get('/profile', [AdminProfileController::class, 'show'])->name('profile');
    Route::patch('/profile/updateInf', [AdminProfileController::class, 'updateInf'])->name('profile.updateInf');
    Route::patch('/profile/updatePass', [AdminProfileController::class, 'updatePass'])->name('profile.updatePass');
    Route::get('/admin-manager', [AdminManagerController::class, 'show'])->name('admin-manager');
    Route::view('customer-manager', 'admin.customer-manager')->name('customer-manager');
    Route::view('product-manager', 'admin.product-manager')->name('product-manager');
    Route::get('product-manager/{id}', [\App\Http\Controllers\ProductController::class, 'create'])->name('product-update');
    Route::view('category-manager', 'admin.category-manager')->name('category-manager');
});



