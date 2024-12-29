<?php

use App\Http\Controllers\StockController;

    Route::get('/stocks', [StockController::class, 'index']);
    Route::get('/stocks/{stock:id}', [StockController::class, 'show']);
    Route::post('/stocks', [StockController::class, 'store']);


