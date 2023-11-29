<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyStructureController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardClientController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

// rute untuk menampilkan dashboard client
Route::controller(DashboardClientController::class)->group(function () {
    Route::get('/', 'index')->name('dashboardClient');
    Route::get('/portfolios', 'seeMorePortfolio')->name('seeMorePortfolio');
});
Route::post('/send-mail', [ContactUsController::class, 'sendEmail'])->name('contactUs');

Route::middleware(['prevent-back-history'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::middleware(['isGuest'])->group(function () {
                Route::get('/login', 'login')->name('login');
                Route::post('/authenticate', 'authenticate')->name('authenticate');
            });
        });
        Route::middleware(['auth:admin'])->group(function () {
            // rute untuk portfolios
            Route::resource('portfolios', PortfolioController::class);
            // rute untuk roles
            Route::resource('roles', RoleController::class);
            // rute untuk tools
            Route::resource('tools', ToolController::class);
            // rute untuk founders
            Route::resource('founders', CompanyStructureController::class);
            // rute untuk faqs
            Route::resource('faqs', FAQController::class);
            // rute untuk testimonials
            Route::resource('testimonials', TestimonialController::class);
            // rute untuk logout
            Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

        });
    });
});
