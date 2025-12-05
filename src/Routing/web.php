<?php

use Illuminate\Support\Facades\Route;

use Mario1515\LaravelCart\Http\Controllers\CheckoutController;

Route::prefix('cart')->name('cart.')->group(function () {

    Route::prefix('checkout')->name('checkout.')->group(function () {
        Route::get('personal-data', [CheckoutController::class, 'personal'])->name('personal');
        Route::post('personal-data', [CheckoutController::class, 'savePersonal'])->name('personal.save');
    });
});
