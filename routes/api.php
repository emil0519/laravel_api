<?php

use App\Http\Controllers\StockController;

    Route::get('/stocks', [StockController::class, 'index']);
    Route::get('/stocks/{stock:stock_id}', [StockController::class, 'show']);
    Route::post('/stocks', [StockController::class, 'store']);
    Route::post('/stocks/{stock:stock_id}', [StockController::class, 'update']);



