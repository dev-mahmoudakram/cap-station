<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Bare root → redirect to the default locale homepage.
Route::get('/', function () {
    return redirect('/'.config('locale.default', 'ar'));
});

// Locale-prefixed routes. {locale} is constrained to supported values;
// the SetLocale middleware validates and applies the app locale.
Route::prefix('{locale}')
    ->whereIn('locale', config('locale.supported', ['ar', 'en']))
    ->middleware('setlocale')
    ->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
    });
