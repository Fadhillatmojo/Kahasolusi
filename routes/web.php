<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyStructureController;
use App\Http\Controllers\DashboardClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;

Route::get('/welcome', function () {
    return view('welcome');
});

// rute untuk menampilkan dashboard client
Route::controller(DashboardClientController::class)->group(function () {
    Route::get('/', 'index');
});

// ini yang ada di bawah sementara semua
// rute untuk admin
Route::prefix('admin')->group(function() {
    Route::get('/portfolios', [ViewsController::class, 'portfolios']);
    Route::get('/roles', [ViewsController::class, 'roles']);

});

//rute untuk daftar admin(sementara aja ini cuma nampilin biasa data nya)
Route::prefix('daftar')->group(function() {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/structures', [CompanyStructureController::class, 'index']);
});


