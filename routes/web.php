<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ListingController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ListingFileController;

/*
|--------------------------------------------------------------------------
| Public Website
|--------------------------------------------------------------------------
*/

Route::get('/', [WebsiteController::class, 'index'])->name('home');

Route::get('/about', [WebsiteController::class, 'about'])
    ->name('about');

Route::get('/services', [WebsiteController::class, 'services'])
    ->name('services');

Route::get('/services/buyer', [WebsiteController::class, 'buyerService'])
    ->name('services.buyer');

Route::get('/services/seller', [WebsiteController::class, 'sellerService'])
    ->name('services.seller');

Route::get('/services/appraisal', [WebsiteController::class, 'appraisalService'])
    ->name('services.appraisal');

Route::get('/listings', [WebsiteController::class, 'listings'])
    ->name('listings');

Route::get('/listings/{listing}', [WebsiteController::class, 'show'])
    ->name('listings.show');

Route::get('/valuation', [WebsiteController::class, 'valuation'])
    ->name('valuation');

Route::get('/testimonials', [WebsiteController::class, 'testimonials'])
    ->name('testimonials');

Route::get('/process', [WebsiteController::class, 'process'])
    ->name('process');

Route::get('/contact', [WebsiteController::class, 'contact'])
    ->name('contact');

/*
|--------------------------------------------------------------------------
| Admin Panel
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('categories', CategoryController::class);

        Route::resource('listings', ListingController::class);

        Route::resource('testimonials', TestimonialController::class);

        Route::get(
            'files/{listingFile}/view',
            [ListingFileController::class, 'view']
        )->name('files.view');

        Route::delete(
            'files/{listingFile}',
            [ListingFileController::class, 'destroy']
        )->name('files.destroy');
    });

require __DIR__.'/auth.php';