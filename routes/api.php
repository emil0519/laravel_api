<?php

use App\Http\Controllers\StockController;

    Route::get('/stocks', [StockController::class, 'index']);
    Route::post('/stocks', [StockController::class, 'store']);


