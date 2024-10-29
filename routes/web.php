<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('customer.index');
// });
// Route::get('/menu', function () {
//     return view('customer.menu.menu');
// });
// Route::get('/menu-detail', function () {
//     return view('customer.menu.menu_detail');
// });
// Route::get('/keranjang', function () {
//     return view('customer.order.keranjang');
// });
// Route::get('/checkout', function () {
//     return view('customer.order.checkout');
// });

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerCMSContoller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MerchantProfileController;

Route::get('/', [CustomerController::class, 'homeCustomer'])->name('home');
Route::get('/menu', [CustomerController::class, 'menuCustomer'])->name('menu-customer');
Route::get('/menu-detail/{id}', [CustomerController::class, 'menuDetail'])->name('menu-detail');
Route::get('/keranjang', [CustomerController::class, 'keranjang'])->name('keranjang');
Route::get('/checkout', [CustomerController::class, 'checkout'])->name('checkout');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('loginForm');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::get('/customerCMS', [CustomerCMSContoller::class, 'index'])->name('customerCMS');

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

    Route::get('/customerCMS/orders/{order}/invoice/pdf', [OrderController::class, 'generateInvoicePDF'])->name('customer.order.invoice.pdf');

    Route::get('/customerCMS/orders', [OrderController::class, 'index'])->name('customer.orders');
    Route::get('/customerCMS/menu/{menu}/order', [OrderController::class, 'create'])->name('customer.order.create');
    Route::post('/customerCMS/menu/{menu}/order', [OrderController::class, 'store'])->name('customer.order.store');
});
