<?php

use App\Http\Controllers\admin\UserManagementController;
use App\Http\Controllers\admin\EventManagementController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientProductController;
  
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth', 'role:admin', 'verified'])->group(function () {

    Route::name('admin.')->group(function () {
        Route::get('/admin', [HomeController::class, 'index']);

        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

        Route::name('user-management.')->group(function () {
            Route::resource('/admin/user-management/users', UserManagementController::class);
        });
        
        Route::resource('products', ProductController::class);
        Route::get('/admin/pages/product-management', [ProductController::class, 'index'])->name('admin.pages.product-management.index');
        
    });
    

});

// Route::middleware(['auth', 'role:client', 'verified'])->group(function () {
    
//     Route::resource('clientproducts', ClientProductController::class);
//     Route::get('/client/pages/product-management', [ClientProductController::class, 'index'])->name('client.pages.product-management.index');

// });
