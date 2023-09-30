<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyStructureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [ViewsController::class, 'home']);

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


