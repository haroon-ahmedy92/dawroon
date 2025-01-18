<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/', function () {
//     return view('auth.auth-register');
// })->name('home');



Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'topSellingProducts'])->name('dashboard');
    
    });

Route::get('/admin/admin-product-list', function () {
    return view('admin.product.list');
});
Route::get('/admin/add', function () {
    return view('admin.product.add');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//Routes for Orders

Route::prefix('orders')->group(function () {
    Route::get('/', [OrderController::class, 'index']); // Get all orders
    Route::get('/{orderId}', [OrderController::class, 'show']); // Get a specific order
    Route::post('/', [OrderController::class, 'store']); // Create a new order
    Route::put('/{orderId}', [OrderController::class, 'update']); // Update an order
    Route::delete('/{orderId}', [OrderController::class, 'destroy']); // Delete an order
    Route::get('/user/{userId}', [OrderController::class, 'getUserOrders']); // Get orders for a specific user
});



Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'list']); // Get all orders
    // Route::get('/{orderId}', [OrderController::class, 'show']); // Get a specific order
    // Route::post('/', [OrderController::class, 'store']); // Create a new order
    // Route::put('/{orderId}', [OrderController::class, 'update']); // Update an order
    // Route::delete('/{orderId}', [OrderController::class, 'destroy']); // Delete an order
    // Route::get('/user/{userId}', [OrderController::class, 'getUserOrders']); // Get orders for a specific user
});





require __DIR__.'/auth.php';
