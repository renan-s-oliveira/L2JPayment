<?php

use Illuminate\Support\Facades\Route;


Route::prefix(config('l2jpayment.prefix'))->group(function () {
    Route::get(config('l2jpayment.url_order'), [L2Jpayment\Controllers\OrderController::class, 'show'])->name('order.show');
    Route::post(config('l2jpayment.url_order'), [L2Jpayment\Controllers\OrderController::class, 'order'])->name('order.create');
});