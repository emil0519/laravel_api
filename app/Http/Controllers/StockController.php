<?php

namespace App\Http\Controllers;
use App\Http\Resources\StockResources;
use App\Models\Stock;

use App\Http\Requests\StockRequest;

class StockController extends Controller{
    public function index()
    {
        $stocks = Stock::all();
        // make the single instance of $stock in array
        return StockResources::collection($stocks); 
    }
    public function show(Stock $stock)
    {
        return StockResources::make($stock);
    }
    public function store(StockRequest $request)
    {
            $stock = Stock::new($request->stockInfo());
            return new StockResources($stock);
    }

    public function update(StockRequest $request){
        $stock = Stock::where('stock_id',operator: $request->stock_id)->first();
        $stock->update($request->stockInfo());
        return response()->json($stock);
    }

    public function destroy(Stock $stock){
        $stock->delete();
    }
}