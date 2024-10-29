<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MerchantProfileController;

Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('/', [AuthController::class, 'showLoginForm'])->name('loginForm');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');

    Route::get('/merchant/profile/create', [MerchantProfileController::class, 'create'])->name('merchant.create-profile');
    Route::post('/merchant/profile', [MerchantProfileController::class, 'store'])->name('merchant.store-profile');
    Route::get('/merchant/profile', [MerchantProfileController::class, 'showProfile'])->name('merchant.profile');
    Route::get('/merchant/profile/edit', [MerchantProfileController::class, 'editProfile'])->name('merchant.edit-profile');
    Route::put('/merchant/profile/update', [MerchantProfileController::class, 'updateProfile'])->name('merchant.update-profile');

    Route::get('/merchant/menus', [MenuController::class, 'index'])->name('merchant.menus');
    Route::get('/merchant/menus/create', [MenuController::class, 'create'])->name('merchant.create-menu');
    Route::post('/merchant/menus', [MenuController::class, 'store'])->name('merchant.store-menu');
    Route::get('/merchant/menus/{menu}/edit', [MenuController::class, 'edit'])->name('merchant.edit-menu');
    Route::put('/merchant/menus/{menu}', [MenuController::class, 'update'])->name('merchant.update-menu');
    Route::delete('/merchant/menus/{menu}', [MenuController::class, 'destroy'])->name('merchant.destroy-menu');

    Route::get('merchant/orders', [OrderController::class, 'merchantOrders'])->name('merchant.orders');

    Route::get('customer/orders/{order}/invoice/pdf', [OrderController::class, 'generateInvoicePDF'])->name('customer.order.invoice.pdf');

    Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
    Route::get('/customer/orders', [OrderController::class, 'index'])->name('customer.orders');
    Route::get('/customer/menu/{menu}/order', [OrderController::class, 'create'])->name('customer.order.create');
    Route::post('/customer/menu/{menu}/order', [OrderController::class, 'store'])->name('customer.order.store');
});
