<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\DashboardClientController;
use App\Http\Controllers\CompanyStructureController;

Route::get('/welcome', function () {
    return view('welcome');
});

// rute untuk menampilkan dashboard client
Route::controller(DashboardClientController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/portfolios','seeMorePortfolio')->name('seeMorePortfolio');
});

Route::middleware(['prevent-back-history'])->group(function () {
    
    Route::prefix('admin')->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::middleware(['isGuest'])->group(function () {
                Route::get('/login','login')->name('login');
                Route::post('/authenticate', 'authenticate')->name('authenticate');
            });
        });
        Route::middleware(['auth:admin'])->group(function () {
            Route::controller(PortfolioController::class)->group(function () {
                Route::get('/portfolios','index')->name('portfolio');
            });
            
            // rute untuk logout
            Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
            
        });
    });
});
    

// // // ini yang ada di bawah sementara semua
// // // rute untuk admin
// // Route::prefix('admin')->group(function() {
// //     Route::get('/portfolios', [ViewsController::class, 'portfolios']);
// //     Route::get('/roles', [ViewsController::class, 'roles']);

// // });

// // //rute untuk daftar admin(sementara aja ini cuma nampilin biasa data nya)
// // Route::prefix('daftar')->group(function() {
// //     Route::get('/admin', [AdminController::class, 'index']);
// //     Route::get('/structures', [CompanyStructureController::class, 'index']);
// // });


