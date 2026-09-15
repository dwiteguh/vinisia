<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\QuoteController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::post('/request-a-quote', [QuoteController::class, 'store'])
    ->name('quote.store');

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/{slug}', [ProductController::class, 'show'])
    ->name('products.show');

Route::get('/about', [AboutController::class, 'index'])
    ->name('about');

Route::get('/quality', [QualityController::class, 'index'])
    ->name('quality');

Route::get('/contact', [InquiryController::class, 'index'])
    ->name('contact');

Route::post('/contact', [InquiryController::class, 'store'])
    ->name('contact.store');

Route::get('/language/{locale}', function ($locale) {

    if (!in_array($locale, ['id', 'en'])) {
        abort(404);
    }

    session(['locale' => $locale]);

    return redirect()->back();

})->name('language.switch');
