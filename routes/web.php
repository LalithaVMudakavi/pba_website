<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\Admin\ListingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ListingFileController;


Route::get('/', function () {
    return redirect('/login');
});

Route::middleware('auth')->group(function () {

    Route::get('/home', [WebsiteController::class, 'index'])->name('home');
});

  Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('listings', ListingController::class);

Route::get(
    'files/{listingFile}/view',
    [ListingFileController::class, 'view']
)->name('files.view');

Route::delete(
    'files/{listingFile}',
    [ListingFileController::class, 'destroy']
)->name('files.destroy');


        Route::resource('categories', CategoryController::class);

        Route::resource('testimonials', TestimonialController::class);
    });

require __DIR__.'/auth.php';