<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SalesDashboardController;
use App\Http\Controllers\ServiceDashboardController;
use App\Http\Controllers\BusinessController;
use Illuminate\Support\Facades\Route;

// Public landing page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('services', ServiceController::class);

    // Sales and Service Dashboards
    Route::get('/sales-dashboard', [SalesDashboardController::class, 'index'])->name('sales.dashboard');
    Route::get('/service-dashboard', [ServiceDashboardController::class, 'index'])->name('service.dashboard');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // cathegory
    Route::get('/processors', [DashboardController::class, 'processors'])->name('processors');
    Route::get('/motherboards', [DashboardController::class, 'motherboards'])->name('motherboards');
    Route::get('/graphic-cards', [DashboardController::class, 'graphicCards'])->name('graphic-cards');



});

// Business Registration
Route::get('/register-business', [BusinessController::class, 'create'])->name('business.register');
Route::post('/register-business', [BusinessController::class, 'store'])->name('business.store');

// Admin specific routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Require authentication routes (Breeze, Fortify, or other packages)
require __DIR__.'/auth.php';
